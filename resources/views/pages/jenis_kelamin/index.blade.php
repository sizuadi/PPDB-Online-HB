@extends('layouts.index')
@push('style')
<link href="{{url('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jenis Kelamin</h1>
    <p class="mb-4">
        List data Jenis Kelamin 
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Jenis Kelamin</h6>
        </div>
        <div class="card-body">
            <a href="{{route('jenis_kelamin.create')}}" class="btn btn-primary mb-2">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i=1 ?>
                        @foreach($items as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>
                                <a href="{{route('jenis_kelamin.edit', $item->id)}}" class="btn btn-success mr-2">
                                    Edit
                                </a>
                                <form method="post" class="d-inline-block" action="{{route('jenis_kelamin.destroy', $item->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger mr-2">
                                        Delete
                                    </button>
                                </form>
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
@endsection
@push('script')
<!-- Page level plugins -->
<script src="{{url('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('sbadmin/js/demo/datatables-demo.js')}}"></script>
@endpush