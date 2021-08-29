@extends('layouts.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jenis Kelamin</h1>
    <p class="mb-4">
        Tambah Data Jenis Kelamin 
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Data Jenis Kelamin</h6>
        </div>
        <div class="card-body">
            <a href="{{route('jenis_kelamin.index')}}" class="btn btn-warning mb-2">Back</a>
 			<form action="{{route('jenis_kelamin.store')}}" method="POST">
 				@csrf
 				<div class="form-group">
 					<label>Nama Jenis Kelamin</label>
 					<input type="text" class="form-control" name="jenis_kelamin">	
 				</div>
 				<button type="submit" class="btn btn-primary">Save</button>
 			</form>
        </div>
    </div>

</div>
@endsection