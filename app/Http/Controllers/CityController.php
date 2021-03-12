<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Exception;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = City::paginate(5);
            return response()->json(['success' => true, 'data' => $data], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'state_id' => 'required|numeric'
            ]);

            $data = City::create([
                'name' => $request->name,
                'state_id' => $request->state_id
            ]);

            return response()->json(['success' => true, 'data' => $data], 201);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        try {
            $data = City::with('state')->findOrFail($id);
            return response()->json(['success' => true, 'data' => $data], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required|min:3|max:100',
                'state_id' => 'required|numeric'
            ]);

            $data = City::find($id);

            $data->update($request->all());

            return response()->json(['success' => true, 'data' => $data], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            City::findOrFail($id)->delete();

        return response()->json(['success' => true, 'data' => 'deleted'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }
}
