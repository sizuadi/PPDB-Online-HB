<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Call Package
use RealRashid\SweetAlert\Facades\Alert; 

// Call Models
use App\Models\Jurusan; 

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Jurusan::all();
        return view('pages.jurusan.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jurusan.create');
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
            'jurusan' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = New Jurusan();
        $Query->jurusan = $request->jurusan;

        $Query->save();


        Alert::success('Sukses', 'Simpan Data Sukses');
        return redirect()->route('jurusan.index');
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
        $data = Jurusan::find($id);

        return view('pages.jurusan.edit', compact('data'));
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
            'jurusan' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = Jurusan::find($id);
        $Query->jurusan = $request->jurusan;

        if($Query){

            $Query->update();
            Alert::success('Sukses', 'Edit Data Sukses');
            return redirect()->route('jurusan.index');            

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
        $Query = Jurusan::findOrFail($id);
        $Query->delete();
        Alert::success('Sukses', 'Hapus Data Sukses');
        return redirect()->route('jurusan.index');
    }
}
