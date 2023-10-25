@extends('navbar')
@section('content')
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

        .bawah-judul{
            font-size: 15px;
            color: #999;
            padding-right: 5%;
        }

        .isi{
            font-size: 20px;
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
            </div>
            <div class="content-text">
            <div class="caption"><h1><b>{{$item['judul']}}</b></h1></div>
                <div class="bawah-judul" style="color: #999">
                    <p>{{$item['deskripsi']}}</p>
                    <div class="calender-waktu d-flex" style="color: #999">
                    <br>
                        <p style="margin-right: 15px;"><i class="fas fa-calendar"></i> {{$item['calender']}}</p>
                        <p><i class="fas fa-clock"></i> {{$item['waktu']}}</p>
                    </div>
                </div>
                <br>
                <div class="isi"><p>{{$item['isi']}}</p>
                <div class="box1">
                    <div class="container-gif">
                    <p><img src="{{$item['gambar2']}}" alt="gambar orang"></p>
                    </div>
                </div>
                <p>{{$item['isi2']}}</p>
                <br>
                <p>{{$item['isi3']}}</p>
                <br>
                <p>{{$item['isi4']}}</p></div>
            </div>
        </section>
        @endforeach
    </div>
</body>
</html>

@endsection
