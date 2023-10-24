@extends('navbar')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pendaftaran</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        .card {
            flex: 1; 
            max-width: 300px;
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

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #f5f5f5;
            flex-shrink: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <h2>Sign Up</h2>
                <form id="registrationForm" action="proses_pendaftaran.php" method="post">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <input type="password" name="retypePassword" id="retypePassword" placeholder="Re-type Password" required>

                    <div id="passwordError"></div>

                    <a href="{{url('loginPage')}}"><input type="submit" value="Sign up"></a>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="footer">
</div>

<style>

@media (max-width: 768px) {
    .card {
        max-width: 100%;
    }
}
</style>

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

</body>
</html>
@endsection
