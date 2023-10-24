@extends('navbar')
@section('content')
<style>
    .container-fluid{
        margin-top:10px;
        width: 98%;
    }
    .card-float{
        position: relative;
        margin-top:20px;
    }
    .card-body{
        
    }
    .card:hover{
        transform: none;
    }
    .total-section{
        width: 80%;
        border-radius: 5px;
    }
    .btn-checkout{
        width: 100%;
        border-radius:0;
        height: 50px;
    }
</style>
    <div class="header">
        <h1>Shopping Cart</h1>
        <hr>
    </div>
    <div class="content pt-2 row">
        <div class="course-cart col-8">
            @foreach ($course as $item)
            <div class="card rounded-2 p-0">
                <a href="" class="text-decoration-none text-dark">
                <div class="card-body p-1">
                    <div class="row mb-1">
                        <div class="col-auto pe-0">
                            <img src="{{asset($item['image'])}}" style="width: 150px;" class="objectfit-cover rounded-2" alt="">
                        </div>
                        <div class="col ">
                            <h6 class="m-0">{{$item['title']}}</h6>
                            <p>{{$item['category']}}</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
                @endforeach
        </div>
        <div class="col-4">
            <div class="total-section p-3 ">
                <div class="total-wrapper">
                    <h4>Total:</h4>
                    <h3 class="m-0">$60.00</h3>
                </div>
                <hr>
                <div class="button-wrapper">
                    <button type="button" class="btn btn-primary btn-checkout">Checkout</button>
                </div>
            </div>
        </div>
    </div>
@endsection
