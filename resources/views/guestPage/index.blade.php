@extends('navbar')

@section('content')
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
            padding-top: 30px;
            font-weight: bold;
            color: rgb(78, 77, 77);
            margin: 0;
            width: 100%;
        }

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

    <div class="header text-center p-3" style="background-image: linear-gradient(to right, #0861b4 , #011d38);">
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
    <div class="content">
        <h3 class="title">What to learn</h3>
        <div class="owl-carousel owl-theme">
            @foreach ($course as $item)
                <div class="card-wrapper">
                    <div class="card item-card" style="width: 100%;">
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
        <h3 class="title">Catch up the news</h3>
        <div class="owl-carousel owl-theme">
            @foreach ($article as $item)
                <div class="card-wrapper">
                    <div class="card item" style="width: 100%;">
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
@endsection
