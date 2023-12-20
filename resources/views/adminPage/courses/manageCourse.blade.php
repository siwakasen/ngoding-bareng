@extends('navbarAdmin')
@section('content')
    <title>Manage Course</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container-all {
            min-height: 90vh;
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

        .card-body {
            background-color: #f1f1f1;
            color: black;
        }

        .table th,
        .table td {
            background-color: #f1f1f1;
        }
    </style>
    <div class="container-all">

        <div class="manage-course">
            <h1>Manage Course</h1>
            <hr>
            <div class="box-container">
                <div class="box" style="background-image: linear-gradient(to right, #036ccf , #004b92);">
                    <h2>{{ $total_revenue }}</h2>
                    <p>Total Revenue</p>
                </div>
                <div class="box" style="background-image: linear-gradient(to right, #004b92 , #001d38);">
                    <h2>{{ $count_course }}</h2>
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
                            <li><a class="dropdown-item" href={{ route('manageCourse') }}>All</a></li>
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item"
                                        href={{ route('filterAdmin', ['id' => $category->id]) }}>{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                <a href="{{ route('createCourse') }}" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i> Add
                    New
                    Course</a>
            </div>
        </div>
        <div class="group-course pt-3">
            <div class="row  row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
                @foreach ($courses as $item)
                    <div class="col">
                        <div class="card-wrapper" style="max-width: 100%; margin: 0 auto;">
                            <div class="card item-card" style="width: 100%;">
                                <a href="{{route('editCourse',['id'=>$item->id])}}">
                                    <div class="card-body">
                                        <img src="{{ asset($item['thumbnail']) }}" class="card-img-top" alt="..."
                                            style="max-height: 200px; object-fit: contain;">
                                        <table class="table">
                                            <tr>
                                                <th>{{ $item['title'] }}</th>
                                                <td>Price:</td>
                                                <td class="text" style="text-align: right;"> {{ $item['price'] }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text">{{ $item->category->name }}</td>
                                                <td>Purchased count:</td>
                                                <td class="text" style="text-align: right;"> {{ $item['count'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <form class="d-inline" action="{{ route('toggleStatusCourse', ['id' => $item['id']]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('put')
                                                        @if ($item['status'] == 0)
                                                            <button type="submit"
                                                                class="btn btn-success me-1">Unhide</button>
                                                        @else
                                                            <button type="submit" class="btn btn-warning me-1">Hide</button>
                                                        @endif
                                                    </form>
                                                    <form class="d-inline" method="post" action="{{route('deleteCourse',['id'=>$item->id])}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                                <td>Revenue:</td>
                                                <td colspan="2" class="text" style="text-align: right;">
                                                    {{ $item['revenue'] }}</td>
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
    </div>
@endsection
