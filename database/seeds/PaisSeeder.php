<?php

use App\Models\Pais;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listadoPaises = [
            ['nombre' => 'Inglaterra', 'codigo_moneda' => 'GBP'],
            ['nombre' => 'Japón', 'codigo_moneda' => 'JPY'],
            ['nombre' => 'India', 'codigo_moneda' => 'INR'],
            ['nombre' => 'Dinamarca', 'codigo_moneda' => 'DKK']
        ];

        foreach ($listadoPaises as $pais) {
            $paisObj = new Pais();
            $paisObj->nombre = $pais['nombre'];
            $paisObj->codigo_moneda = $pais['codigo_moneda'];
            $paisObj->save();
        }

    }
}
