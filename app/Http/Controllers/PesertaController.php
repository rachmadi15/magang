<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use Illuminate\Support\Facades\Session;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = Peserta::all();
        return response()->json([
            "success" => true,
            "message" => "List Peserta",
            "data" => $peserta
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $peserta = Peserta::where('name', $request->name)->get();
        return response()->json([
            "success" => true,
            "message" => "Hasil Pencarian Peserta",
            "data" => $peserta
        ], 200);
    }

    public function home()
    {
        $user_id = Session::get('user_id');
        $peserta = Peserta::where('user_id', $user_id)->first();
        
        return view('template/home')->with('name', $peserta->name);
    }

    public function peserta()
    {
        $peserta = Peserta::all();
        $user_id = Session::get('user_id');
        $name = Peserta::where('user_id', $user_id)->first();
        
        return view('template/peserta')->with('name', $name->name)->with('peserta', $peserta);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
