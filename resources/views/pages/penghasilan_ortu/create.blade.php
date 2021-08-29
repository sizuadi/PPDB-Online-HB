@extends('layouts.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Penghasilan Ortu</h1>
    <p class="mb-4">
        Tambah Data Penghasilan Ortu 
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Data Penghasilan Ortu</h6>
        </div>
        <div class="card-body">
            <a href="{{route('penghasilan_ortu.index')}}" class="btn btn-warning mb-2">Back</a>
 			<form action="{{route('penghasilan_ortu.store')}}" method="POST">
 				@csrf
 				<div class="form-group">
 					<label>Penghasilan Ortu</label>
 					<input type="number" class="form-control" name="penghasilan_ortu">	
 				</div>
 				<button type="submit" class="btn btn-primary">Save</button>
 			</form>
        </div>
    </div>

</div>
@endsection