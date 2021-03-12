<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Exception;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = State::paginate(5);
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
                'name' => 'required|unique:states|min:3|max:100',
                'abbreviation' => 'required|unique:states|min:0|max:3'
            ]);

            $data = State::create([
                'name' => $request->name,
                'abbreviation' => $request->abbreviation
            ]);

            return response()->json(['success' => true, 'data' => $data], 200);
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
            $data = State::findOrFail($id);
            return response()->json(['success' => true, 'data' => $data], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
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
                'name' => 'required|unique:states|min:3|max:100',
                'abbreviation' => 'required|unique:states|min:0|max:3'
            ]);

            $data = State::find($id);

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
            State::find($id)->delete();

            return response()->json(['success' => true, 'data' => 'deleted'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
