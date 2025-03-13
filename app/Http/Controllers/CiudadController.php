<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Función que retorna todas las ciudades
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $query = Ciudad::all()->load('pais');
        return response()->json($query);
    }

    /**
     * Función que crea una ciudad
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json(['message' => 'endpoint no implementado', 501]);
    }

    /**
     * Función que retorna una ciudad por su id
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $query = Ciudad::findOrFail($id)->load('pais');
        return response()->json($query);
    }

    /**
     * Función que actualiza una ciudad por su id
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        return response()->json(['message' => 'endpoint no implementado', 501]);
    }

    /**
     * Función que elimina una ciudad por su id
     * @param $id
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        return response()->json(['message' => 'endpoint no implementado', 501]);
    }

    /**
     * Función que retorna todas las ciudades de un país por su id
     * @param $id
     * @return JsonResponse
     */
    public function ciudadesPorPais($id): JsonResponse
    {
        $query = Ciudad::where('pais_id', $id)->get();
        $query = $query->load('pais');
        return response()->json($query);
    }
}
