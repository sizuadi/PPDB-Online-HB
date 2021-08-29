@extends('layouts.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User</h1>
    <p class="mb-4">
        Tambah Data User 
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Data User</h6>
        </div>
        <div class="card-body">
            <a href="{{route('user.index')}}" class="btn btn-warning mb-2">Back</a>
 			<form action="{{route('user.store')}}" method="POST">
 				@csrf
 				<div class="form-group">
 					<label>Nama User</label>
 					<input type="text" class="form-control" name="name">	
 				</div>
 				<div class="form-group">
 					<label>Email</label>
 					<input type="email" class="form-control" name="email">	
 				</div>
 				<div class="form-group">
 					<label>Password</label>
 					<input type="password" class="form-control" name="password">	
 				</div>
 				<div class="form-group">
 					<label>Password Confirmation</label>
 					<input type="password" class="form-control" name="password_confirmation">	
 				</div>
 				<button type="submit" class="btn btn-primary">Save</button>
 			</form>
        </div>
    </div>

</div>
@endsection