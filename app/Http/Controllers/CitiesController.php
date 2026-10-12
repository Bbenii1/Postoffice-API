<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index(Request $request)
    {
        $query = City::with('county')->orderBy('name');

        $name = $request->input('name', $request->input('search'));

        if (filled($name)) {
            $query->where('name', 'like', '%'.$name.'%');
        }

        if ($request->filled('city_id')) {
            $query->where('id', $request->integer('city_id'));
        }

        $cities = $query->get();

        return response()->json($cities);
    }

    public function show(string $id)
    {
        return response()->json(City::with('county')->findOrFail($id));
    }

    public function store(CityRequest $request)
    {
        $data = $request->validated();
        $data['population'] ??= 0;
        $city = City::create($data);

        return response()->json($city->load('county'), 201);
    }

    public function update(CityRequest $request, $id)
    {
        $city = City::findOrFail($id);
        $data = $request->validated();
        $data['population'] ??= 0;
        $city->update($data);

        return response()->json($city->load('county'));
    }

    public function delete($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return response()->json([
            'message' => 'City deleted successfully',
            'id' => $id,
        ]);
    }
}
