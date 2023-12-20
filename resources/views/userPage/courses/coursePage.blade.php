@extends('navbar')
@section('content')
    <style>
        .container-fluid {
            padding: 0;
            margin: 0;
        }

        .container-content {
            min-height: 100vh;
        }

        .header {
            padding: 20px;
            height: 300px;
            background-color: #0057a8;
        }

        .search-wrapper {
            min-width: 300px;
            max-width: 30%;
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

        form:hover {
            transform: scale(110%);
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

        .card-body,
        .card-footer {
            background-color: #f1f1f1;
            color: black;
        }

        .header {
            background: url('https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-position: center center, center top;
            background-repeat: repeat, no-repeat;
        }
    </style>

<div class="container-content">
        <div class="header">
            <div class="title text-center text-white p-4 m-5">
                <h1 style="font-size: 50px; overflow: hidden; max-height: 120px;" class="text-shadow">Learn Many Things Here
                </h1>
                <div class="search-wrapper">
                    <form action={{ route('search') }}>
                        @csrf
                        <input type="text" name="search" placeholder="Search your favorit course here!"
                            class="form-control">
                        <button type="submit" class="search-button"><i
                                class="fa-solid fa-magnifying-glass fa-xl me-2"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="content pt-2" style="  margin: 0 20px">
            <div class="button-filter">
                <div class="btn-group ms-3">
                    <button type="button" class="btn btn-outline-primary dropdown-toggle me-2  rounded-1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href={{ route('courses') }}>All</a></li>
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('filter', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="group-course pt-3">
                <div class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-4">
                    @foreach ($courses as $item)
                        <div class="col">
                            <div class="card-wrapper" style="max-width: 90%; margin: 0 auto;">
                                @if ($item->stats)
                                    <div class="card item-card" style="width: 100%;">
                                        <img src="{{ asset($item['thumbnail']) }}" class="card-img-top" alt="...">
                                        <div class="card-body p-1">
                                            <h5 class="card-title" style="font-size: 18px;">{{ $item['title'] }}</h5>
                                            <p class="card-text" style="font-size: 14px;">{{ $item->category->name }}</p>
                                        </div>
                                        @if ($item->stats == 'Owned')
                                            <div class="card-footer ps-1 bg-success text-white">
                                                <p class="card-text">Owned</p>
                                            </div>
                                        @else
                                            <div class="card-footer ps-1 bg-primary text-white">
                                                <p class="card-text">On Cart</p>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <a href="{{ route('addItemToCart', ['id_course' => $item->id]) }}">
                                        <div class="card item-card" style="width: 100%;">
                                            <img src="{{ asset($item['thumbnail']) }}" class="card-img-top" alt="...">
                                            <div class="card-body p-1">
                                                <h5 class="card-title" style="font-size: 18px;">{{ $item['title'] }}</h5>
                                                <p class="card-text" style="font-size: 14px;">{{ $item->category->name }}
                                                </p>
                                            </div>
                                            <div class="card-footer ps-1 bg-white">
                                                <p class="card-text">Buy: {{ $item['price'] }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection
<!-- Include Bootstrap JS and jQuery -->
