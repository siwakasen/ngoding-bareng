@extends('navbarAdmin')
@section('content')
<title>Manage Article</title>
   <style>
        body {
            font-family: Arial, sans-serif;
        }

        .manage-article {
            text-align: left;
            padding: 20px;
        }

        .box-container {
            display: flex;
            margin: 20px 0;
        }

        .box {
            width: 110px;
            height: 45px;
            border: 1px solid #0057a8;
            padding: 10px;
            text-align: center;
            background-color: #ffffff;
            color: #0057a8;
            margin: 0 10px;
            border-radius: 5px;
        }


        .card-content::before {
            content: "";
            position: absolute;
            background-color: #ccc;
            margin-left: 160px;
            width: 0.5px;
            height: 100%;
            left: 0;
            top: 0;
        }

        .thumbnail img {
            width: 250px;
            margin-right: 55px;
            border: 4px solid #58411F;
        }

        .text-content {
            text-align: left;
            margin-top: 5px;
        }
        .card {
            width: 100%;
            border: none;
        }

        .card-title {
            margin-bottom: 10px;
            display: flex;
            align-items: left;
            justify-content: space-between;
        }
        .buttons{
            display: flex;
            height: 40px;
        }
    </style>
    <div class="manage-article">
        <h1>Manage Article</h1>
        <hr>
        
        <div class="container">
            <div class="button-container">
                <div class="box">
                    <p>25 Articles</p>
                </div>
            </div>
            @foreach($article as $artikel)
            <div class="card mt-5">
                <div class="card-body">
                    <div class="">
                        <div class="thumbnail">
                            <img src="{{ $artikel['thumbnail']}}" alt="thumbnail">
                        </div>

                        <div class="text-content">
                            <div class="card-title">
                                <h2>{{ $artikel['title'] }}</h2>
                                <div class="buttons">
                                    <button class="btn btn-primary me-1">Hide</button>
                                    <button class="btn btn-danger ">Delete</button>
                                </div>
                            </div>
                            <p>{{ $artikel['desc'] }}</p>
                        </div>
                    </div>
                    <hr style="margin-top: 30px;">
                </div>
            </div>
            @endforeach
        </div>

@endsection
