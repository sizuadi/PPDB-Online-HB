<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Call Package
use RealRashid\SweetAlert\Facades\Alert; 
use Illuminate\Support\Facades\Hash;

// Call Models
use App\Models\User; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::all();
        return view('pages.user.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.create');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = New User();
        $Query->name = $request->name;
        $Query->email = $request->email;
        $Query->password = Hash::make($request->password);

        $Query->save();


        Alert::success('Sukses', 'Simpan Data Sukses');
        return redirect()->route('user.index');
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
        $data = User::find($id);

        return view('pages.user.edit', compact('data'));
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Please Check Your Form');
            return back();
        }

        $Query = User::find($id);
        $Query->name = $request->name;
        $Query->email = $request->email;
        $Query->password = Hash::make($request->password);

        if($Query){

            $Query->update();
            Alert::success('Sukses', 'Edit Data Sukses');
            return redirect()->route('user.index');            

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
        $Query = User::findOrFail($id);
        $Query->delete();
        Alert::success('Sukses', 'Hapus Data Sukses');
        return redirect()->route('user.index');
    }
}
