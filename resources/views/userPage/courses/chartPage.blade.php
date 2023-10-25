@extends('navbar')
@section('content')
    <style>
        .card-text {
            font-size: 16px;
        }

        .container-fluid {
            margin-top: 10px;
            width: 98%;
        }

        .card-float {
            position: relative;
            margin-top: 20px;
        }

        .card:hover {
            transform: none;
        }

        .total-section {
            width: 80%;
            border-radius: 5px;
            padding: 20px;
        }

        .btn-checkout {
            width: 100%;
            border-radius: 0;
            height: 50px;
        }

        li {
            list-style-type: none;
            padding: 0;
        }

        li a {
            text-decoration: none;
            color: #0057a8;
        }

        li a:hover {
            color: #024788;
        }

        /* carousel */
        .card-wrapper {
            padding: 10px 20px;
        }

        .item-card {
            display: inline-block;
            transition: 0.5s;
        }

        .card-wrapper .card:hover {
            transform: scale(105%);
        }

        .owl-carousel a {
            text-decoration: none;
            color: black;
        }

        .card-title {
            margin: 0;
            font-size: 20px;
            font-weight: 500;
        }

        @media(max-width:800px) {
            .header {
                display: none;
            }

            .col-5 {
                width: 100%;
                position: absolute;
                margin-top: 0;
            }

            .col-7 {
                width: 100%;
                position: relative;
                margin-top: 160px;
            }

            .total-section {
                width: 100%;
                padding: 0;
            }
        }
    </style>
    <div class="header">
        <h1>Shopping Cart</h1>
    </div>
    <div class="content row">
        <div class="course-cart col-7 mb-2">
            <p class="m-0">@php
                echo count($course);
            @endphp Courses in Cart</p>
            <hr class="m-0">
            @foreach ($course as $item)
                <div class="card rounded-2 shadow mt-3 p-0">
                    <div class="card-body p-0">
                        <div class="row mb-0">
                            <div class="col-auto pe-0">
                                <img src="{{ asset($item['image']) }}" style="width: 170px; height: 100%;"
                                    class="objectfit-cover rounded-start-2" alt="">
                            </div>
                            <div class="col pe-0">
                                <h6 class="mt-2 fw-bold">{{ $item['title'] }}</h6>
                                <p style="font-size: 13px;">{{ $item['category'] }}</p>
                                <h6 class="fw-bold">IDR {{ number_format($item['price'], 0, ',', '.') }}</h6>
                            </div>
                            <div class="col text-end p-1 pe-4">
                                <ul>
                                    <li><a href="">Move to wishlist</a></li>
                                    <li><a href="">Remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-5">
            <div class="total-section">
                <div class="total-wrapper">
                    <h4>Total:</h4>
                    <h3 class="m-0 fs-1 fw-bold" style="width: 100%">IDR {{ number_format(205000, 0, ',') }}</h3>
                </div>
                <hr class="mt-2">
                <div class="button-wrapper">
                    <a href="{{ asset('/checkout') }}">
                        <button type="button" class="btn btn-primary btn-checkout">Checkout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <h3 class="fw-bold fs-4 mt-5" style="width: 100%;">You might also like</h3>
    <div class="owl-carousel owl-theme">
        @foreach ($course as $item)
            <div class="card-wrapper">
                <div class="card item-card shadow" style="width: 100%;" >
                    <img src="{{ asset($item['image']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['category'] }}</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Buy: {{ $item['price'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection
