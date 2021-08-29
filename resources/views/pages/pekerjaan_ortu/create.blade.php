@extends('layouts.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pekerjaan Orangtua</h1>
    <p class="mb-4">
        Tambah Data Pekerjaan Orangtua 
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Data Pekerjaan Orangtua</h6>
        </div>
        <div class="card-body">
            <a href="{{route('pekerjaan_ortu.index')}}" class="btn btn-warning mb-2">Back</a>
 			<form action="{{route('pekerjaan_ortu.store')}}" method="POST">
 				@csrf
 				<div class="form-group">
 					<label>Nama Pekerjaan Orangtua</label>
 					<input type="text" class="form-control" name="nama_pekerjaan">	
 				</div>
 				<button type="submit" class="btn btn-primary">Save</button>
 			</form>
        </div>
    </div>

</div>
@endsection