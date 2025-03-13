<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrearHistorialRequest;
use App\Models\Historial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    /**
     * Función que retorna el historial de consultas realizadas
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $query = Historial::select('id', 'presupuesto_original', 'presupuesto_convertido', 'tasa_cambio', 'clima', 'temperatura', 'ciudad_id','created_at', 'updated_at')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        $query->load('ciudad');

        return response()->json($query);
    }

    /**
     * Función que crea un pais
     * @param Request $request
     * @return JsonResponse
     */
    public function store(CrearHistorialRequest $request): JsonResponse
    {
        $historial = new Historial();
        $historial->presupuesto_original = $request->presupuesto_original;
        $historial->presupuesto_convertido = $request->presupuesto_convertido;
        $historial->tasa_cambio = $request->tasa_cambio;
        $historial->clima = $request->clima;
        $historial->temperatura = $request->temperatura;
        $historial->ciudad_id = $request->ciudad_id;
        $historial->save();

        return response()->json($historial, 201);
    }

    /**
     * Función que retorna un el historial de consultas por su id
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $query = Historial::findOrFail($id);
        $query->load('ciudad');
        return response()->json($query);
    }

    /**
     * Función que actualiza un historial de consultas por su id
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        return response()->json(['message' => 'endpoint no implementado', 501]);
    }

    /**
     * Función que elimina un historial de consultas por su id
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        return response()->json(['message' => 'endpoint no implementado', 501]);
    }
}
