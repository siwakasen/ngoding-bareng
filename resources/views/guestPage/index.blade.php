@extends('navbar')

@section('content')
<<<<<<< HEAD
    <style>
        .header {
            width: 92%;
            height: 250px;
            background-color: #0057a8;
            margin: 0 auto;
            margin-top: 20px;
            padding: 0 40px;
            border-radius: 20px;
        }

        .search-wrapper {
            width: 30%;
            min-width: 250px;
            margin: 0 auto;
            margin-top: 20px;
        }

        .search-button {
            outline: none;
            border: none;
            background-color: transparent;
            color: #cccccc;
        }

        form {
            border-radius: 10px;
            display: flex;
            background-color: white;
            transition: 0.8s;
        }

        .form-control {
            border: none;
            background-color: transparent;
            margin: inherit;
        }

        .form-control:focus {
            border: none;
            background-color: transparent;
            box-shadow: none;
        }

        form:hover {
            transform: scale(110%);
        }

        .content {
            background-color: white;
            width: 92%;
            margin: 0 auto;
        }

        .title {
            font-weight: bold;
            color: rgb(78, 77, 77);
            margin: 0;
            width: 100%;
        }

        /* Carousel */

        .card-wrapper {
            padding: 10px 20px;
        }

        .item-card {
            display: inline-block;
            transition: 0.5s;
        }

        .card a {
            text-decoration: none;
            color: black;
        }

        .card:hover {
            transform: scale(105%);
        }

        .card-title {
            margin: 0;
            font-size: 20px;
            font-weight: 500;
        }

        .card-text {
            font-size: 16px;
        }
    </style>

    <div class="header shadow text-center p-3" style="background-image: linear-gradient(to right, #0861b4 , #011d38);">
        <div class="sentence">
            <h1 class="text-light pt-4">Start your IT career here!</h1>
            <h5 class="text-light">Catch up many skills that you needed</h5>
        </div>
        <div class="search-wrapper">
            <form action="">
                <input type="text" placeholder="Search for anything" class="form-control">
                <button type="submit" class="search-button"><i
                        class="fa-solid fa-magnifying-glass fa-xl me-2"></i></button>
            </form>
        </div>
    </div>
    <div class="content mt-4">
        <h3 class="title ps-3">What to learn</h3>
        <div class="owl-carousel owl-theme">
            @foreach ($course as $item)
                <div class="card-wrapper">
                    <div class="card shadow item-card" style="width: 100%;">
                        <a href="">
                            <img src="{{ asset($item['image']) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['title'] }}</h5>
                                <p class="card-text">{{ $item['category'] }}</p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text">Buy: {{ $item['price'] }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <h3 class="title ps-3">Catch up the news</h3>
        <div class="owl-carousel owl-theme">
            @foreach ($article as $item)
                <div class="card-wrapper">
                    <div class="card item shadow" style="width: 100%;">
                        <a href="">
                            <img src="{{ asset($item['image']) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['title'] }}</h5>
                                <p class="card-text" style="text-align: justify">{{ $item['description'] }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexr</title>
    <style>
        .container {
            max-width: 100%;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .left img {
            width: 100%;
            max-width: 100%; 
            height: 350px; 
        }

        .caption {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        .content-text {
            text-align: left;
            padding-left: 5%; 
            padding-right: 5%; 
        }

        .box1 {
            text-align: center;
        }

        .container-gif {
            display: inline-block;
        }

        @media screen and (max-width: 768px) {
            
            .content-text {
                padding-left: 2%; 
                padding-right: 2%; 
            }
        }
    </style>
</head>
<body>
    <div class="container">
        @forelse($newsletter1 as $item)
        <section class="content">
            <div class="left">
                <img src="{{$item['gambar']}}" alt="gambar atas">
                <div class="caption"><h2>{{$item['judul']}}</h2></div>
            </div>
            <div class="content-text">
                <p>{{$item['isi']}}</p>
                <div class="box1">
                    <div class="container-gif">
                    <p><img src="{{$item['gambar2']}}" alt="gambar orang"></p>
                    </div>
                </div>
                <p>{{$item['isi2']}}</p>
                <p>{{$item['isi3']}}</p>
                <p>{{$item['isi4']}}</p>
            </div>
        </section>
        @endforeach
    </div>
</body>
</html>

>>>>>>> timeng-branch
@endsection
