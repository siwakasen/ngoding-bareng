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
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        .content-text {
            text-align: left;
            padding-left: 15%; 
            padding-right: 15%; 
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

@endsection
