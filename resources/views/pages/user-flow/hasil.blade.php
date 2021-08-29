@extends('pages.home.index')
@push('add-styles')
<link href="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="{{ route('landing-page') }}"><span>Harapan Bangsa</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="{{ route('landing-page') }}">Home</a></li>
            <li><a href="{{ route('hasil') }}">Hasil Pendaftaran</a></li>
            <li class="get-started"><a href="{{ route('daftar') }}">Daftar</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header>
<main id="main">    
    <div class="container" style="margin-top: 150px;">
        <div class="card">
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
                            @forelse ($items as $item)
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
                                    @if ($item->status == 'DITERIMA')                                        
                                        <form method="get" class="d-inline-block" action="{{ route('download-hasil') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-success mr-2">
                                                Download
                                            </button>
                                        </form>
                                    @else
                                        <button type="submit" class="btn btn-secondary mr-2" disabled>
                                            Download
                                        </button>
                                    @endif
                                </td>
                                
                            </tr>
                            <?php $i++; ?>
                            @empty
                                <tr class="text-center">
                                    <td colspan="8"> Tidak Ada Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End #main -->
@endsection
@push('add-scripts')
    <!-- Page level plugins -->
    <script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
@endpush