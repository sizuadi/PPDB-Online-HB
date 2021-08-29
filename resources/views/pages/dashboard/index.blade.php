@extends('layouts.index')
@push('style')
<link href="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{ route('download') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_user }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Menunggu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_menunggu_peserta }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Ditolak</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_ditolak_peserta }}</div>                            
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Diterima</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_diterima_peserta }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h1>Data Peserta PPDB</h1>
        </div>
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Asal Sekolah</th>
                                    <th>Jurusan</th>
                                    <th>Orang Tua</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Asal Sekolah</th>
                                    <th>Jurusan</th>
                                    <th>Orang Tua</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i=1 ?>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$item->peserta->nama}}</td>
                                    <td>{{$item->peserta->asal_sekolah}}</td>
                                    <td>{{$item->peserta->jurusan->jurusan}}</td>
                                    <td>{{$item->peserta->nama_ortu}}</td>
                                    <td>
                                        @if ($item->status == 'MENUNGGU')
                                            <div class="font-weight-bold text-warning">MENUNGGU</div>
                                        @endif
                                        @if ($item->status == 'DITOLAK')
                                            <div class="font-weight-bold text-danger">DITOLAK</div>
                                        @endif
                                        @if ($item->status == 'DITERIMA')
                                            <div class="font-weight-bold text-success">DITERIMA</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('detail-peserta', $item->id) }}" class="btn btn-primary">
                                            Detail
                                        </a>
                                    </td>
                                    
                                </tr>
                                <?php $i++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
    <!-- Page level plugins -->
    <script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
@endpush