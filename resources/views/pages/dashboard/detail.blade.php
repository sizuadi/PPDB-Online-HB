@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <a href="{{ route('home') }}" class="btn btn-danger mb-5">Back</a>
    <div class="card">
        <div class="card-body">
            <h4>Data Lengkap Peserta</h4>
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <td>Nama</td>
                        <td>{{ $item->peserta->nama }}</td>
                    </tr>
                    <tr>
                        <td>TTL</td>
                        <td>{{ $item->peserta->tempat_lahir }}, {{ $item->peserta->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>{{ $item->peserta->asal_sekolah }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $item->peserta->alamat }}</td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>{{ $item->peserta->no_telp }}</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>{{ $item->peserta->jurusan->jurusan }}</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>{{ $item->peserta->agama->nama_agama }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>{{ $item->peserta->jenkel->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td>{{ $item->peserta->orang_tua->nama_ayah }}</td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>{{ $item->peserta->orang_tua->nama_ibu }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td>{{ $item->peserta->orang_tua->pekerjaan_ayah->nama_pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td>
                        <td>{{ $item->peserta->orang_tua->pekerjaan_ibu->nama_pekerjaan }}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ayah</td>
                        <td>{{ $item->peserta->orang_tua->penghasilan_ayah->penghasilan_ortu }}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ibu</td>
                        <td>{{ $item->peserta->orang_tua->penghasilan_ibu->penghasilan_ortu }}</td>
                    </tr>
                    <tr>
                        <td>No Telepon Ortu</td>
                        <td>{{ $item->peserta->orang_tua->no_tlp }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                    <tr>
                        <td>Aksi</td>
                        <td>
                            @if ($item->status == 'MENUNGGU')
                                <form method="post" class="d-inline-block" action="{{ route('peserta-diterima', $item->id) }}">
                                    @method('PATCH')
                                    @csrf
                                    <button type="submit" class="btn btn-success mr-2">
                                        TERIMA
                                    </button>
                                </form>
                                <form method="post" class="d-inline-block" action="{{ route('peserta-ditolak', $item->id) }}">
                                    @method('PATCH')
                                    @csrf
                                    <button type="submit" class="btn btn-danger mr-2">
                                        TOLAK
                                    </button>
                                </form>                                
                            @else
                                <button class="btn btn-success mr-2" disabled>
                                    TERIMA
                                </button>
                                <button class="btn btn-danger mr-2" disabled>
                                    TOLAK
                                </button>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection