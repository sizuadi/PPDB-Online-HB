<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

// Load Models
use App\Models\Agama;
use App\Models\JenisKelamin;
use App\Models\PenghasilanOrangtua;
use App\Models\PekerjaanOrangtua;
use App\Models\Jurusan;
use App\Models\PesertaPPDB;
use App\Models\BiodataOrtu;
use App\Models\Hasil;

class DaftarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agama = Agama::all();
        $jenkel = JenisKelamin::all();
        $hasil_ortu = PenghasilanOrangtua::all();
        $pekerjaan_ortu = PekerjaanOrangtua::all();
        $jurusan = Jurusan::all();
        return view('pages.user-flow.pendaftaran', compact(
            'agama', 'jenkel', 'hasil_ortu', 'pekerjaan_ortu', 'jurusan' 
        ));
    }

    public function daftar(Request $request)
    {
        DB::beginTransaction();
        
        $validator = \Validator::make($request->all(), [
            'id_jenis_kelamin' => 'required|exists:tbl_jenis_kelamin,id',
            'id_agama' => 'required|exists:tbl_agama,id',
            'id_jurusan' => 'required|exists:tbl_jurusan,id',
            'nama' => 'required',
            'tanggal_lahir' => 'date|before:yesterday',
            'tempat_lahir' => 'required',
            'asal_sekolah' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'id_pekerjaan_ayah' => 'required|exists:tbl_pekerjaan_ortu,id',
            'id_pekerjaan_ibu' => 'required|exists:tbl_pekerjaan_ortu,id',
            'id_penghasilan_ayah' => 'required|exists:tbl_penghasilan_ortu,id',
            'id_penghasilan_ibu' => 'required|exists:tbl_penghasilan_ortu,id',
            'no_telp_ortu' => 'required'
            ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        
        $data = [
            'nama' => $request->nama,
            'id_jenis_kelamin' => $request->id_jenis_kelamin,
            'id_agama' => $request->id_agama,
            'id_jurusan' => $request->id_jurusan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'nama_ortu' => $request->nama_ayah,
            'id_pekerjaan_ortu' => $request->id_pekerjaan_ayah,
            'id_penghasilan_ortu' => $request->id_penghasilan_ayah,
        ];

        $daftar = PesertaPPDB::create($data);
        if(!$daftar){
            DB::rollBack();
            Alert::error('Error', 'Please check your form again!');
            return redirect()->back();
        }

        $data2 = [
            'id_peserta_ppdb' => $daftar->id,
            'id_pekerjaan_ayah' => $request->id_pekerjaan_ayah,
            'id_penghasilan_ayah' => $request->id_penghasilan_ayah,
            'id_pekerjaan_ibu' => $request->id_pekerjaan_ibu,
            'id_penghasilan_ibu' => $request->id_penghasilan_ibu,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'no_tlp' => $request->no_telp_ortu
        ];

        $ortu = BiodataOrtu::create($data2);
        if(!$ortu){
            DB::rollBack();
            Alert::error('Error', 'Please check your form again!');
            return redirect()->back();
        }

        $data3 = [
            'nis' => $daftar->id
        ];

        $hasil = Hasil::create($data3);
        if(!$hasil){
            DB::rollBack();
            Alert::error('Error', 'Please check your form again!');
            return redirect()->back();
        }

        DB::commit();
        Alert::success('Success', 'Thank you for register!');
        return redirect()->route('landing-page');
    }

    public function hasil()
    {
        $items = Hasil::with(['peserta.orang_tua'])->get();
        return view('pages.user-flow.hasil', compact('items'));
    }

    public function download()
    {
        $pdf = \PDF::loadView('pdf.lulus');
    return $pdf->download('lulus.pdf');
    }
}
