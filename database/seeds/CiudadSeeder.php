<?php

use App\Models\Ciudad;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listaCiudades = [
            ['nombre' => 'London', 'codigo_clima' => 'London,GB', 'pais_id' => 1],
            ['nombre' => 'Manchester', 'codigo_clima' => 'Manchester,GB', 'pais_id' => 1],
            ['nombre' => 'Tokyo', 'codigo_clima' => 'Tokyo,JP', 'pais_id' => 2],
            ['nombre' => 'Osaka', 'codigo_clima' => 'Osaka,JP', 'pais_id' => 2],
            ['nombre' => 'New Delhi', 'codigo_clima' => 'New Delhi,IN', 'pais_id' => 3],
            ['nombre' => 'Mumbai', 'codigo_clima' => 'Mumbai,IN', 'pais_id' => 3],
            ['nombre' => 'Copenhague', 'codigo_clima' => 'Copenhagen,DK', 'pais_id' => 4],
            ['nombre' => 'Aarhus', 'codigo_clima' => 'Aarhus,DK', 'pais_id' => 4]
        ];

        foreach ($listaCiudades as $ciudad) {
            $ciudadObj = new Ciudad();
            $ciudadObj->nombre = $ciudad['nombre'];
            $ciudadObj->codigo_clima = $ciudad['codigo_clima'];
            $ciudadObj->pais_id = $ciudad['pais_id'];
            $ciudadObj->save();
        }
    }
}
