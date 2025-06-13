#!/bin/bash

# Esperar a que MySQL esté listo
echo "⏳ Esperando a que la base de datos esté disponible..."
until nc -z -v -w30 db 3306
do
  echo "⌛ Aún esperando a MySQL..."
  sleep 5
done

# Generar la APP_KEY solo si no existe
if [ ! -f /var/www/html/storage/oauth-private.key ]; then
    echo "🔑 Generando APP_KEY..."
    php artisan key:generate
fi

# Ejecutar migraciones
echo "🔄 Ejecutando migraciones..."
php artisan migrate --force

# Ejecutar seeders
echo "🌱 Ejecutando seeders..."
php artisan db:seed --force

# Limpiar vistas y generar cachés
echo "🧹 Limpiando y generando cachés..."
php artisan view:clear
php artisan config:cache
php artisan route:cache

# Iniciar Apache en primer plano
echo "🚀 Iniciando Apache..."
exec apache2-foreground
