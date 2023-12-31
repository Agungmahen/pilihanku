@extends('welcome')
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

    input[type="text"],
    input[type="password"] {
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        background-color: #f9f9f9;
        box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
    }

    .password-container {
        position: relative;
    }

    .password-container input[type="password"] {
        padding-right: 30px;
    }

    .toggle-password {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
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

<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var toggleBtn = document.getElementById("toggleBtn");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleBtn.innerHTML = '<i class="far fa-eye"></i>'; // Open eye icon
        } else {
            passwordField.type = "password";
            toggleBtn.innerHTML = '<i class="far fa-eye-slash"></i>'; // Closed eye icon
        }
    }
</script>

<center>
    <div style="padding-top: 80px"></div>
    <div class="center">
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
                <div class="mb-3 password-container">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
                    <span class="toggle-password" id="toggleBtn" onclick="togglePassword()"><i class="far fa-eye"></i></span>
                    @error('password')
                    <div class="invalid-feedback">

                    </div>
                    @enderror
                </div>
                <center>
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </center>
            </form>
        </div>
        <div class="text-center">Belum Punya Akun? <a href="{{url('register')}}">Daftar</a></div>
    </div>
</center>

@endsection
