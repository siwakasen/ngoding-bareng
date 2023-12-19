@extends('navbar')
@section('content')
    <style>
        .form-control {
            border: 1px solid black;
        }
        .col a{
            color: #0057a8;
        }
        .col a:hover{
            color: #003566;
        }
        .title{
            width: 100%;
            font-weight: bold;
        }
        .container{
            max-width: 80%;;
        }
        .section-footer{
            display: none;
        }
    </style>
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <h2 class="title">Checkout</h2>
            </div>
            <div class="col text-end pt-2"><a href="{{ route('cartPage') }}" class="text-decoration-none">Cancel</a></div>
        </div>
        <hr class="mt-0">
        <form action="{{ route('checkout') }}" method="post"  id="checkoutForm">
            @csrf
            <div class="payment row">
                <div class="col">
                    <h4 class="title my-4">Payment Method</h4>
                    <div class="accordion accordion-flush border" id="paymentMethod">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <span class="p-2 border rounded"><i class="fa-solid fa-credit-card fa-lg"></i></span>
                                    <span class="ps-2">Credit/Debit Card</span>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#paymentMethod">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label for="inputName" class="form-label">Name on card</label>
                                            <input type="text" class="form-control" id="inputName">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputNumber" class="form-label">Card number</label>
                                            <input type="number" class="form-control" id="inputNumber">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDate" class="form-label">Expiry date</label>
                                            <input type="month" class="form-control" id="inputDate">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCVC" class="form-label">CVC</label>
                                            <input type="number" max="999" min="0" class="form-control" id="inputCVC">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <img src="{{ asset('storage/images/mandiri.png') }}" alt="BRI"
                                        style="width: auto; height: 25px;" class="m-2">
                                    <span class="ps-1">Bank Transfer to Bank Mandiri</span>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#paymentMethod">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputFirstName" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="inputFirstName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="inputLastName">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputEmail" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="inputEmail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <img src="{{ asset('storage/images/bca.png') }}" alt="BCA"
                                        style="width: auto; height: 25px;" class="m-2">
                                    <span class="ps-1">Bank Transfer to Bank BCA</span>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#paymentMethod">
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputFirstName" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="inputFirstName">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLastName" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="inputLastName">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputEmail" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="inputEmail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    <img src="{{ asset('storage/images/paypal.png') }}" alt="BCA"
                                        style="width: auto; height: 30px;" class="m-2">
                                    <span class="ps-1">PayPal</span>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#paymentMethod">
                                <div class="accordion-body">
                                    In order to complete your transaction, we will transfer you over to PayPal's secure
                                    servers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <div class="summary border p-3"style="margin: 0 auto; width:300px;">
                        <h4 class="title mb-4">Summary</h4>
                        <hr>
                        <p class="fw-bold">Total Price: <span>IDR {{ number_format($bracket->total_price, 0, ',') }}</span></p>
                        <div class="">
                            <input type="hidden" name="id_bracket" value={{$bracket->id}}>
                            <p style="font-size: 12px; color: rgb(97, 97, 97)">By completing your purchase you agree to these Terms of Services</p>
                            <button type="button" class="btn btn-primary" style="width: 100%;">Complete Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
