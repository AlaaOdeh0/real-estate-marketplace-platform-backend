<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        return Property::all();
    }

    public function show($id)
    {
        return Property::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'address' => 'nullable|string',
            'status' => 'nullable|string',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'area' => 'required|numeric',
            'agency' => 'required|string',
            'agent' => 'required|string',
            'features' => 'nullable|string',
            'amount' => 'required|numeric',
            'price_cut_date' => 'required|date',
        ]);

        $property = Property::create($validated);

        return response()->json($property, 201);
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string',
            'price' => 'sometimes|required|numeric',
            'description' => 'nullable|string',
            'address' => 'nullable|string',
            'status' => 'nullable|string',
            'bedrooms' => 'sometimes|required|numeric',
            'bathrooms' => 'sometimes|required|numeric',
            'area' => 'sometimes|required|numeric',
            'agency' => 'sometimes|required|string',
            'agent' => 'sometimes|required|string',
            'features' => 'nullable|string',
            'amount' => 'sometimes|required|numeric',
            'price_cut_date' => 'sometimes|required|date',
        ]);

        $property->update($validated);

        return response()->json($property);
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return response()->json(['message' => 'Property deleted']);
    }
}
