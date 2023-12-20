@extends('navbar')
@section('content')
    <style>
        .container-fluid {
            padding: 0;
        }

        .container {
            max-width: 100%;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .image-banner{
            background-image: url({{ $article->thumbnail }});
            background-size: cover;
            baground-repeat: no-repeat;
            background-position: center center;
            width: 100%;
            max-width: 100%;
            height: 450px;
        }

        .caption {
            font-size: 50px;
            font-weight: bold;
            margin-top: 20px;
        }

        .content-text {
            text-align: left;
            padding-left: 25%;
            padding-right: 25%;
            font-size: 25px
        }

        .box1 {
            text-align: center;
        }

        .container-gif {
            display: inline-block;
        }

        .bawah-judul {
            font-size: 15px;
            color: #999;
            padding-right: 5%;
        }

        .image-content{
            width: 100%;
            max-width: 100%;
            height: 450px;
            
        }

        .isi {
            font-size: 20px;
        }

        @media screen and (max-width: 800px) {

            .content-text {
                padding-left: 2%;
                padding-right: 2%;
            }
        }
    </style>
    <div class="container">
        <section class="content">
            <div class="image-banner">

            </div>
            <div class="content-text">
                <div class="caption">
                    <h1><b>{{ $article->title }}</b></h1>
                </div>
                <div class="bawah-judul" style="color: #999">
                    <p>{{ $article->main_sentence }}</p>
                    <div class="calender-waktu d-flex" style="color: #999">
                        <br>
                        <p style="margin-right: 15px;"><i class="fas fa-calendar"></i> {{ $article->date }}</p>
                    </div>
                </div>
                <br>
                <div class="isi" style="text-align: justify;">
                    <p>{!! nl2br($article->content) !!}</p>
                </div>
            </div>
        </section>
    </div>
@endsection
