@extends('welcome')
@section('title')
    Register
@endsection
@section('content')
<style>
    body {
        background: linear-gradient(to bottom, #f3d9df, rgb(138, 138, 243));
        height: 100%;
        margin: 0;
        font-family: 'Arial', sans-serif;
    }

    .container {
        width: 400px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin: 100px auto;
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

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        background-color: #f9f9f9;
        box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
    }

    input[type="submit"] {
        width: 100%;
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

    .text-center {
        text-align: center;
        margin-top: 20px;
    }

    .text-center a {
        color: #3498db;
        text-decoration: none;
    }

    .text-center a:hover {
        text-decoration: underline;
    }

    /* Added styles for the two-column layout */
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .col {
        flex: 1;
    }
</style>

<div class="container">
    <h1>Register</h1>
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
    <form action="{{url('register')}}" method="post">
        @csrf

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type full name ...">
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="email">E-mail</label>
                    <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Type email ...">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Type confirmation password ...">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <div class="text-center">Sudah Memiliki Akun? <a href="{{url("login")}}"><b>Login</b></a></div>
</div>
@endsection
