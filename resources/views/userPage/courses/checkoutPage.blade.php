@extends('navbar')
@section('content')
    <style>
        .form-control {
            border: 1px solid black;
        }

        .col a {
            color: #0057a8;
        }

        .col a:hover {
            color: #003566;
        }

        .title {
            width: 100%;
            font-weight: bold;
        }

        .container {
            max-width: 80%;
            ;
        }

        .section-footer {
            display: none;
        }
    </style>
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <h2 class="title">Checkout</h2>
            </div>
            <div class="col text-end pt-2"><a href="{{ route('cancelCheckout') }}" class="text-decoration-none">Cancel</a>
            </div>
        </div>
        <hr class="mt-0">
        <div class="payment row">
            <div class="col-md">
                <h4 class="title my-4">Payment Method</h4>
                <div class="mb-2">
                    <button class="btn btn-success shadow d-inline" id="sim-btn">Open Payment Simulator</button>
                </div>
                <div id="snap-container" class=""></div>
            </div>
            <div class="col-md mt-4">
                <div class="summary border p-3"style="margin: 0 auto; max-width:900px;">
                    <h4 class="title mb-4">Summary</h4>
                    <hr>
                    @foreach ($transactions as $trans)
                        <div class="card rounded-2 shadow mt-3 p-0">
                            <div class="card-body p-0">
                                <div class="row mb-0">
                                    <div class="col-auto pe-0">
                                        <img src="{{ asset($trans->course->thumbnail) }}"
                                            style="width: 170px; height: 100%;" class="objectfit-cover rounded-start-2"
                                            alt="">
                                    </div>
                                    <div class="col pe-0">
                                        <h6 class="mt-2 fw-bold">{{ $trans->course->title }}</h6>
                                        <p style="font-size: 13px;">{{ $trans->course->category->name }}</p>
                                        <h6 class="fw-bold">IDR {{ number_format($trans->course->price, 0, ',', '.') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // Dynamically set the base URL
        var baseUrl = '{{ config('app.url') }}';

        function handleSnapPayment() {
            var transactionToken = '{{ $bracket->snap_token }}';
            var embedId = 'snap-container';

            window.snap.embed(transactionToken, {
                embedId: embedId,
                onSuccess: function(result) {
                    console.log('Payment Successful:', result);
                    // Dynamically set the redirect URL based on the base URL
                    window.location.href = baseUrl + "paymentSuccess";
                },
                onError: function(result) {
                    window.location.href = baseUrl + "cancelCheckout";
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            handleSnapPayment();
        });
        document.getElementById("sim-btn").addEventListener('click', function() {
            window.open("https://simulator.sandbox.midtrans.com/", '_blank');
            this.remove();
        });
    </script>
@endsection
