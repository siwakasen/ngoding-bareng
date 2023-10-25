@extends('navbar')
@section('content')
<!DOCTYPE html>
<html>

<head>
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
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
            background-color: blue;
            color: white;
            margin: 0 10px;
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

        .card-body table {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="manage-course">
        <h1>Manage Course</h1>
        <div class="line"></div>
        <div class="box-container">
            <div class="box">
                <h2>$3600</h2>
                <p>Total Revenue</p>
            </div>
            <div class="box">
                <h2>214</h2>
                <p>Course</p>
            </div>
        </div>
        <div class="line"></div>
        <div class="button-container">
            <button type="button" class="btn btn-primary">Catergory</button>
            <button type="button" class="btn btn-primary">Level</button>


            <a href="{{ url('createCourse') }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
                    <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z" />
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                </svg>  Add New Course</a>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4" style="overflow-y:hidden">
        @foreach ($course as $index => $kursus)
        <div class="col mb-4">
            <div class="card h-100" id="cardCourse">
                <img src="{{ $kursus['image'] }}" alt="">
                <div class="card-body">
                    <table>
                        <tr>
                            <th>{{ $kursus['title'] }}</th>
                            <td class="text" style="text-align: right;">{{ $kursus['price'] }}</td>
                        </tr>
                        <tr>
                            <td class="text">{{ $kursus['category'] }}</td>
                            <td class="text" style="text-align: right;">{{ $kursus['purchasedCount'] }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="text" style="text-align: right;">{{ $kursus['revenue'] }}</td>
                        </tr>
                    </table>
                    <div class="hide-button">
                        <button onclick="hideElement()" class="btn btn-danger">Hide</button>
                    </div>
                </div>
            </div>
        </div>
        @if (($index +1) % 3 == 0)
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4" style="overflow-y:hidden">
        @endif
        @endforeach
    </div>
</body>

<script>
    function hideElement() {
        var element = document.getElementById('cardCourse');
        if (element.style.display === 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
</script>

</html>

@endsection