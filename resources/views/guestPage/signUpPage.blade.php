@extends('navbar')
@section('content')
    <title>Halaman Pendaftaran</title>
    <style>
        .container{
            height: 100vh;
        }
        .card {
            flex: 1;
            max-width: 500px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: 10%;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        #passwordError {
            color: red;
            margin-top: 10px;
        }

        .card .btn {
            width: 70%;
        }

        @media (max-width: 800px) {
            .card {
                margin: 50px auto;
                max-width: 350px;
            }
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card container-fluid mb-1">
                    <div class="logo">
                        <h2 style="display: inline-block; text-align: left; color: #0057a8; font-weight: bold">ngoding-
                            <div>bareng</div>
                        </h2>
                    </div>
                    
                    @if (session('message'))
                        <div class="alert alert-success my-1">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <div>{{ $errors->first() }}</div>
                        </div>
                    @endif
                    <form id="registrationForm" method="post" action="{{ route('actionSignup') }}">
                        @csrf
                        <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}"
                            required>
                        <input type="text" name="username" id="username" placeholder="Username"
                            value="{{ old('username') }}" required>
                        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}"
                            required>
                        <input type="password" name="password" id="password" placeholder="Password"
                            value="{{ old('password') }}" required>
                        <input type="password" name="retypePassword" id="retypePassword" value="{{ old('retypePassword') }}"
                            placeholder="Re-type Password" required>
                        <button type="sumbit" class="btn btn-primary fs-4">Sign Up</button>
                    </form>

                </div>
                <p class="text-center">Already have an account? <a href="{{ asset('/login') }}">Log in</a></p>
            </div>
        </div>
    </div>
@endsection
