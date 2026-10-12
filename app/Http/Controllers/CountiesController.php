<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountyRequest;
use App\Models\County;
use Illuminate\Http\Request;

class CountiesController extends Controller
{
    public function index(Request $request)
    {
        $query = County::withCount('cities')->orderBy('name');
        $name = $request->input('name', $request->input('search'));

        if (filled($name)) {
            $query->where('name', 'like', '%'.$name.'%');
        }

        $counties = $query->get();

        return response()->json($counties);
    }

    public function store(CountyRequest $request)
    {
        $county = County::create($request->validated());

        return response()->json($county->loadCount('cities'), 201);
    }

    public function show(string $id)
    {
        return response()->json(County::with('cities')->findOrFail($id));
    }

    public function update(CountyRequest $request, $id)
    {
        $county = County::findOrFail($id);
        $county->update($request->validated());

        return response()->json($county->loadCount('cities'));
    }

    public function delete($id)
    {
        $county = County::findOrFail($id);
        $county->delete();

        return response()->json([
            'message' => 'County deleted successfully',
            'id' => $id,
        ]);
    }
}
