@extends('navbar')
@section('content')
        <title>Halaman Pendaftaran</title>
        <style>
            .section-footer{
                position: absolute;
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
            .btn{
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
                    <div class="card container-fluid">
                        <div class="logo" >
                            <h2 style="display: inline-block; text-align: left; color: #0057a8; font-weight: bold">ngoding-
                                <div>bareng</div></h2>
                        </div>
                        <form id="registrationForm" action="{{ url('/loginPage') }}" method="post">
                            <input type="text" name="name" id="name" placeholder="Name" required>
                            <input type="text" name="username" id="username" placeholder="Username" required>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                            <input type="password" name="retypePassword" id="retypePassword" placeholder="Re-type Password"
                                required>

                            <div id="passwordError"></div>
                            <button type="sumbit" class="btn btn-primary fs-4">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById("registrationForm").addEventListener("submit", function(event) {
                const password = document.getElementById("password").value;
                const retypePassword = document.getElementById("retypePassword").value;
                const passwordError = document.getElementById("passwordError");

                if (password !== retypePassword) {
                    passwordError.textContent = "Kata sandi tidak cocok.";
                    event.preventDefault();
                } else {
                    passwordError.textContent = "";
                }
            });

            document.getElementById("password").addEventListener("input", function() {
                const passwordError = document.getElementById("passwordError");
                passwordError.textContent = "";
            });

            document.getElementById("retypePassword").addEventListener("input", function() {
                const passwordError = document.getElementById("passwordError");
                passwordError.textContent = "";
            });
        </script>
@endsection
