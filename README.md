
## infodec-api
Proyecto backend desarrollado de acuerdo a los requerimientos de la prueba técnica de la empresa infodec.

## Tecnologia usada

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Requisitos pre-instalación

- Es necesario que tengas instalado PHP 7.4 para que funcione con normalidad.
- Este proyecto fue desarrollado usando la pila de desarrollo XAMPP para php 7.4.

Puedes descargar la version de XAMPP aquí [xampp-windows-x64-7.4.33-0-VC15-installer.exe](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.33/xampp-windows-x64-7.4.33-0-VC15-installer.exe/download)

## Instalación

Para la instalación del proyecto asegurate de seguir los siguiente pasos:

- Crea una copia del archivo ".env.example" y renombrala como ".env".
- En la llave "APP_NAME" en el archivo ".env" coloca el nombre del directorio que contiene el proyecto, Ejm "infodec-api".
- Extrae en la carpeta raiz del proyecto el archivo "vendor.zip" en caso de que no cuentes con composer en tu computador.
- Extrae en la carpeta raiz del proyecto el archivo "storage.zip".
- Abre una terminal o cmd en la carpeta raiz del proyecto y ejecuta el siguiente comando "php artisan key:generate", lo que creará la llave adecuada para el proyecto en el archivo ".env".
- En tu administrador de base de datos crea una base nueva y coloca el nombre "infodec_api".
- Configura en el archivo ".env" las llaves "DB_DATABASE, DB_USERNAME y DB_PASSWORD" según como tengas configurado tu entorno de desarrollo.
- Abre una terminal o cmd en la carpeta raiz del proyecto y ejecuta el siguiente comando:
- "php artisan migrate --seed" para configurar las entidades en la base de datos.

## Funcionalidades

El sistema tiene incorporado las siguientes funcionalidades:
- Consulta de lista de paises.
- Consulta de lista de ciudades.
- Consulta de lista de historial de presupuestos.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).