<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dosen1;
class Dosen1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdosen = dosen1::all();
        return view('dosen1.data_dosen',['dsn1' => $dtdosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen1.tambah_dosen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());
         dosen1::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ]);

        return redirect('data_dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtdosen = dosen1::find($id);
        return view('dosen1.edit_dosen',['dsn1' => $dtdosen]);
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
        $dtdosen = dosen1::find($id);
        $dtdosen -> update($request->all());
        return redirect('/data_dosen')->with('berhasil','data telah di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtdosen = dosen1::find($id);
        $dtdosen -> delete();
        return redirect('/data_dosen')->with('berhasil','data telah terhapus');
    }
}
