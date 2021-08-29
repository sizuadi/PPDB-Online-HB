<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Call Package
use RealRashid\SweetAlert\Facades\Alert; 

// Call Models
use App\Models\PekerjaanOrangtua; 

class PekerjaanOrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PekerjaanOrangtua::all();
        return view('pages.pekerjaan_ortu.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pekerjaan_ortu.create');
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
            'nama_pekerjaan' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = New PekerjaanOrangtua();
        $Query->nama_pekerjaan = $request->nama_pekerjaan;

        $Query->save();


        Alert::success('Sukses', 'Simpan Data Sukses');
        return redirect()->route('pekerjaan_ortu.index');
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
        $data = PekerjaanOrangtua::find($id);

        return view('pages.pekerjaan_ortu.edit', compact('data'));
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
            'nama_pekerjaan_ortu' => 'required',
        ]);

      

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = PekerjaanOrangtua::find($id);
        $Query->nama_pekerjaan = $request->nama_pekerjaan_ortu;

        if($Query){

            $Query->update();
            Alert::success('Sukses', 'Edit Data Sukses');
            return redirect()->route('pekerjaan_ortu.index');            

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
        $Query = PekerjaanOrangtua::findOrFail($id);
        $Query->delete();
        Alert::success('Sukses', 'Hapus Data Sukses');
        return redirect()->route('pekerjaan_ortu.index');
    }
}
