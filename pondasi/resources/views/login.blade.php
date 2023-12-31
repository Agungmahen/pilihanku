@extends('welcome')
@section('title')
Login
@endsection
@section('content')

<style>
		h1 {
			text-align: center;
			margin-bottom: 30px;
			color: #333;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			font-size: 14px;
			font-weight: bold;
			margin-bottom: 5px;
			color: #333;
		}

		input[type="text"], input[type="password"] {
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			background-color: #f9f9f9;
			box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
		}

		input[type="submit"] {
			background-color: #3498db;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #2980b9;
		}
</style>
<center>
<img style="width: 20%;padding-top:50px;-webkit-filter: drop-shadow(-4px 4px 4px white )" src="assets/logo2.png" alt="">
	<div class="center">
		<h4 style="margin-top: 2cm;margin-bottom: 1cm"><b>Login Admin</b></h4>
		<div class="container-fluid">
			<form action="" method="post">
				@csrf
				<div class="mb-3">
					<label for="email">E-mail</label>
					<input value="" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Type email ...">
					@error('email')
					<div class="invalid-feedback">
					   
					</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
					@error('password')
					<div class="invalid-feedback">
					   
					</div>
					@enderror
				</div>
				<button type="submit" class="btn btn-primary" >
					</i> Login
				</button>
			</form>
		</div>
		{{-- <div class="text-center">Belum Punya Akun? <a href="{{url('register')}}">Daftar</a></div> --}}
	</div>
</center>


@endsection  