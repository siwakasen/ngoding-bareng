@extends('navbar')
@section('content')
    <style>
        .container-fluid {
            padding: 0;
            margin: 0;
        }

        .header {
            padding: 20px;
            height: 300px;
            background-color: #0057a8;
        }

        .search-wrapper {
            min-width: 250px;
            margin: 0 auto;
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

        .card-wrapper {
            padding: 0;
            width: 100%;
        }

        .item-card {
            display: inline-block;
            transition: 0.5s;
        }

        .card a {
            text-decoration: none;
            color: black;
            border: none;
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
        .card-body,.card-footer{
            background-color:#f1f1f1;
            color: black;
        }
    </style>


    <div class="header">
        <div class="search-wrapper">
            <form action="">
                <input type="text" placeholder="Search your favorit course here!" class="form-control">
                <button type="submit" class="search-button"><i class="fa-solid fa-magnifying-glass fa-xl me-2"></i></button>
            </form>
        </div>
        <div class="title text-center text-white p-4 m-5">
            <h1 style="font-size: 50px">Learn Many Things Here</h1>
        </div>
    </div>

    <div class="content pt-2" style="  margin: 0 20px">
        <div class="button-filter">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary dropdown-toggle me-2  rounded-1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </button>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="#">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary dropdown-toggle rounded-1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Level
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Easy</a></li>
                    <li><a class="dropdown-item" href="#">Medium</a></li>
                    <li><a class="dropdown-item" href="#">Hard</a></li>
                </ul>
            </div>
        </div>
        <div class="group-course pt-3">
            <div class="row  row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4 mb-4">
                @foreach ($course as $item)
                    <div class="col">
                        <div class="card-wrapper" style="max-width: 90%; margin: 0 auto;">
                            <div class="card item-card" style="width: 100%;">
                                <a href="{{asset('/contentCourse')}}">
                                    <img src="{{ asset($item['image']) }}" class="card-img-top" alt="...">
                                    <div class="card-body p-1">
                                        <h5 class="card-title" style="font-size: 18px;">{{ $item['title'] }}</h5>
                                        <p class="card-text" style="font-size: 14px;">{{ $item['category'] }}</p>
                                    </div>
                                    <div class="card-footer ps-1">
                                        <p class="card-text">Buy: {{ $item['price'] }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
