@extends('navbar')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Technology News</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 100%;
            padding: 10px;
            background-color: #fff;
            margin: 0;
        }

        .profile-card{
            border: solid; 
            margin-top: 20px;
            padding: 20px;
        }

        .profile-image {
            border-radius: 50%; /* Membuat gambar profil menjadi lingkaran */
            border: 4px solid; /* Menambahkan border solid dengan warna biru dan tebal 4px */
            width: 300px; /* Menambahkan lebar gambar */
            height: 300px; /* Menambahkan tinggi gambar */
        }

        .profile-heading {
            background-color: #3498db; /* Warna latar belakang biru */
            color: #fff; /* Warna teks putih */
            padding: 10px; /* Ruang dalam teks */
            padding-top: 80px;
        }
    </style>
</head>
<body>
<div class="container">
    @forelse($isiProfile as $item)
    <div class="profile-heading">
        <h2>Your Profile</h2>
    </div>
    <div class="profile-card" >
        <div class="row">
            <div class="col-md-3">
                <img class="profile-image" src="{{$item['gProfile']}}" alt="Your Profile Picture">
            </div>
                <div class="col-md-9">
                <h4 class="profile-name" style="margin-top:5%;">Nama</h4>
                <p>{{$item['isiProfile1']}}</p>
                <h4 class="profile-email">Email</h4>
                <p>{{$item['isiProfile2']}}</p>
                <h4 class="profile-phone">Handphone</h4>
                <p>{{$item['isiProfile3']}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
</body>
</html>
@endsection
