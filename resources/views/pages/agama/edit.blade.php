@extends('layouts.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Agama</h1>
    <p class="mb-4">
        Edit Data Agama 
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Data Agama</h6>
        </div>
        <div class="card-body">
            <a href="{{route('agama.index')}}" class="btn btn-warning mb-2">Back</a>
 			<form action="{{route('agama.update', $data->id)}}" method="POST">
                @method('PATCH')
 				@csrf
 				<div class="form-group">
 					<label>Nama Agama</label>
 					<input type="text" class="form-control" value="{{$data->nama_agama}}" name="nama_agama">	
 				</div>
 				<button type="submit" class="btn btn-primary">Save</button>
 			</form>
        </div>
    </div>

</div>
@endsection