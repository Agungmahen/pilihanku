@extends('welcome')
@section('title')
Register
@endsection
@section('content')
<style>
    .container {
			margin: 50px auto;
			width: 400px;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}

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

		input[type="text"], input[type="email"], input[type="password"] {
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
{{-- <div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-3">
            <div class="card-header">
                <strong> Form Register</strong>
            </div>
            <div class="card-body">

                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                @endif
                <form action="{{url('register')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type full name ...">
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Type email ...">
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input  type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Type confirmation password ...">
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                         <hr>
                        <a href="{{url('login')}}" class="nav-link" style=" color: blue;text-shadow: 1px 1px 1px rgb(62, 62, 62);">Login </a>
                    
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-box-arrow-in-right"></i> Register
                    </button>
                    <button type="reset" class="btn btn-light">
                        Reset
                    </button>
                </form>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <h1>Register</h1>
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
    <form action="{{url('register')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type full name ...">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">E-mail</label>
            <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Type email ...">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation">Password Confirmation</label>
            <input  type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Type confirmation password ...">
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
<div class="text-center">Sudah Memiliki Akun? <a href="{{url("login")}}"><b>Login</b></a></div>        
        </div>
        <button type="submit" class="btn btn-primary">
            Register
        </button>
        <button type="reset" class="btn btn-light">
            Reset
        </button>
    </form>
</div>
@endsection  
