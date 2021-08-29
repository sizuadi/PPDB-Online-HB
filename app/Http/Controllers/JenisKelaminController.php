<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Call Package
use RealRashid\SweetAlert\Facades\Alert; 

// Call Models
use App\Models\JenisKelamin; 

class JenisKelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = JenisKelamin::all();
        return view('pages.jenis_kelamin.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jenis_kelamin.create');
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
            'jenis_kelamin' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = New JenisKelamin();
        $Query->jenis_kelamin = $request->jenis_kelamin;

        $Query->save();


        Alert::success('Sukses', 'Simpan Data Sukses');
        return redirect()->route('jenis_kelamin.index');
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
        $data = JenisKelamin::find($id);

        return view('pages.jenis_kelamin.edit', compact('data'));
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
            'jenis_kelamin' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = JenisKelamin::find($id);
        $Query->jenis_kelamin = $request->jenis_kelamin;
        if($Query){

            $Query->update();
            Alert::success('Sukses', 'Edit Data Sukses');
            return redirect()->route('jenis_kelamin.index');            

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
        $Query = JenisKelamin::findOrFail($id);
        $Query->delete();
        Alert::success('Sukses', 'Hapus Data Sukses');
        return redirect()->route('jenis_kelamin.index');
    }
}
