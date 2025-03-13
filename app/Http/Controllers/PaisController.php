<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Función que retorna todas los paises
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $query = Pais::all();
        return response()->json($query);
    }

    /**
     * Función que crea un pais
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json(['message' => 'endpoint no implementado', 501]);
    }

    /**
     * Función que retorna un pais por su id
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $query = Pais::findOrFail($id);
        return response()->json($query);
    }

    /**
     * Función que actualiza un pais por su id
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        return response()->json(['message' => 'endpoint no implementado', 501]);
    }

    /**
     * Función que elimina un pais por su id
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        return response()->json(['message' => 'endpoint no implementado', 501]);
    }
}
