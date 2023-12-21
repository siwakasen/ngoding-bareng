@extends('navbarAdmin')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .dashboard {
            text-align: left;
            padding: 20px;
            min-height: 86vh;
        }

        .box-container {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .box-container a {
            width: 30%;
            height: 100px;
            border: 1px solid #0000002c;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            color: white;
            
            margin: 0 10px;
            border-radius: 7px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .users {
            text-align: left;
            margin-top: 20px;
        }

        tr td {
            max-width: 200px;
        }

        @media(min-width:1000px) {
            tr td {
                min-width: 150px;
            }
        }
    </style>
    <div class="dashboard">
        <div class="d-flex justify-content-between align-items-center">
            @if ($trans == 1)
                <h2 class="title">Brackets</h2>
            @else
                <h2 class="title">Detail Transaction</h2>
            @endif
            <a type="button" href="{{ route('dashboardAdmin') }}" class="btn btn-danger ml-auto">Back</a>
        </div>
        <hr>
        <div class="box-container">
            <a href="{{ route('bracketDetails') }}" class="box d-flex justify-content-center align-items-center" style="background-image: linear-gradient(to right, #037ae9, #0160b9);">
                <div  style="">
                    <h2 class="">Brackets Transaction</h2>
                </div>
            </a>
            <a href="{{ route('transactionDetails') }}" class="box d-flex justify-content-center align-items-center" style="background-image: linear-gradient(to right, #0160b9 , #003668);">
                <div>
                    <h2>Detail Transaction</h2>
                </div>
            </a>
        </div>
        <hr>

        @if ($trans == 1)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID User</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Snap Token</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brackets as $item)
                        <tr>
                            <td scope="col">{{ $item->id }}</td>
                            <td scope="col">{{ $item->id_user }}</td>
                            <td scope="col">{{ $item->total_price }}</td>
                            <td scope="col">{{ $item->status }}</td>
                            <td scope="col">{{ $item->snap_token }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID Course</th>
                        <th scope="col">ID Bracket</th>
                        <th scope="col">date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $item)
                        <tr>
                            <td scope="col">{{ $item->id }}</td>
                            <td scope="col">{{ $item->id_course }}</td>
                            <td scope="col">{{ $item->id_bracket }}</td>
                            <td scope="col">{{ $item->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
