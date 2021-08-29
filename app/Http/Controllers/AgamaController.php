<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Call Package
use RealRashid\SweetAlert\Facades\Alert; 

// Call Models
use App\Models\Agama; 

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Agama::all();
        return view('pages.agama.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.agama.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'nama_agama' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = New Agama();
        $Query->nama_agama = $request->nama_agama;

        $Query->save();


        Alert::success('Sukses', 'Simpan Data Sukses');
        return redirect()->route('agama.index');
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
        $data = Agama::find($id);

        return view('pages.agama.edit', compact('data'));
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
        $validator = \Validator::make($request->all(), [
            'nama_agama' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = Agama::find($id);
        $Query->nama_agama = $request->nama_agama;

        if($Query){

            $Query->update();
            Alert::success('Sukses', 'Edit Data Sukses');
            return redirect()->route('agama.index');            

        }
        Alert::error('Error', 'Please Check Your Form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Query = Agama::findOrFail($id);
        $Query->delete();
        Alert::success('Sukses', 'Hapus Data Sukses');
        return redirect()->route('agama.index');
    }
}
