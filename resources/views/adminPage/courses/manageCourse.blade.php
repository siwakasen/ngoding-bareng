@extends('navbarAdmin')
@section('content')
    <title>Manage Course</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .manage-course {
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
            width: 30%;
            height: 100px;
            border: 1px solid #0000002c;
            padding: 10px;
            text-align: center;
            color: rgb(255, 255, 255);
            margin: 0 10px;
            border-radius: 7px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #004b92;
            border-color: #004b92;
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
        .card-title {
            margin: 0;
            font-size: 20px;
            font-weight: 500;
        }

        .card-text {
            font-size: 16px;
        }
        .card-body{
            background-color:#f1f1f1;
            color: black;
        }
        .table th, .table td{
            background-color:#f1f1f1;
        }
    </style>
    <div class="manage-course">
        <h1>Manage Course</h1>
        <hr>
        <div class="box-container">
            <div class="box" style="background-image: linear-gradient(to right, #036ccf , #004b92);">
                <h2>$3600</h2>
                <p>Total Revenue</p>
            </div>
            <div class="box" style="background-image: linear-gradient(to right, #004b92 , #001d38);">
                <h2>214</h2>
                <p>Course</p>
            </div>
        </div>
        <hr>
        <div class="button-container">
            <div class="button-filter">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary dropdown-toggle me-2  rounded-1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="#">{{ $category }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary dropdown-toggle rounded-1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Level
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Easy</a></li>
                        <li><a class="dropdown-item" href="#">Medium</a></li>
                        <li><a class="dropdown-item" href="#">Hard</a></li>
                    </ul>
                </div>
            </div>


            <a href="{{ url('createCourse') }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                    width="20" height="20" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
                    <path
                        d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z" />
                    <path
                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                </svg> Add New Course</a>
        </div>
    </div>
    <div class="group-course pt-3">
        <div class="row  row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
            @foreach ($course as $item)
                <div class="col">
                    <div class="card-wrapper" style="max-width: 90%; margin: 0 auto;">
                        <div class="card item-card" style="width: 100%;">
                            <a href="">
                                <img src="{{ asset($item['image']) }}" class="card-img-top" alt="..." style="max-height: 200px; object-fit: contain;">
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th>{{ $item['title'] }}</th>
                                            <td>Price:</td>
                                            <td class="text" style="text-align: right;"> {{ $item['price'] }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text">{{ $item['category'] }}</td>
                                            <td>Purchased count:</td>
                                            <td class="text" style="text-align: right;"> {{ $item['purchasedCount'] }}</td>
                                        </tr>
                                        <tr>
                                            <td><button  class="btn btn-danger">Hide</button></td>
                                            <td>Revenue:</td>
                                            <td colspan="2" class="text" style="text-align: right;"> {{ $item['revenue'] }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
