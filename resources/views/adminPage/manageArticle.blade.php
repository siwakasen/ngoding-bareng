@extends('navbar')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Manage Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .manage-article {
            text-align: left;
            padding: 20px;
        }

        .line {
            border-top: 10px solid #000;
            margin: 20px 0;
        }

        .box-container {
            display: flex;
            margin: 20px 0;
        }

        .box {
            width: 110px;
            height: 45px;
            border: 1px solid #FFFFFF;
            padding: 10px;
            text-align: center;
            background-color: blue;
            color: white;
            margin: 0 10px;
            border-radius: 5px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .btn-primary:last-child {
            margin-left: auto;
            margin-right: 10px;
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

        .flex-container {
            display: flex;
            align-items: center;
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

        .buttons {
            display: flex;
            align-items: center;
        }

        .button {
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="manage-article">
        <h1>Manage Article</h1>
        <div class="line"></div>
        <div class="button-container">
            <div class="box">
                <p>25 Articles</p>
            </div>

            <a href="{{ url('createCourse') }}" class="btn btn-primary">Add New article</a>
        </div>

        <div class="container" style="overflow-y:scroll">
            @foreach($article as $artikel)
            <div class="card mt-5">
                <div class="card-body">
                    <div class="flex-container">
                        <div class="thumbnail">
                            <img src="{{ $artikel['thumbnail']}}" alt="thumbnail">
                        </div>

                        <div class="text-content">
                            <div class="card-title">
                                <h2>{{ $artikel['title'] }}</h2>
                                <div class="buttons">
                                    <button class="btn btn-primary" onclick="hideCard()">Hide</button>
                                    <button class="btn btn-danger" onclick="deleteCard()">Delete</button>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>

@endsection