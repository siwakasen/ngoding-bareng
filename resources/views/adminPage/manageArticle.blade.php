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
            justify-content: space-between;
            margin: 20px 0;
            align-items: center;
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

        .thumbnail {
            display: flex;
            /* Menetapkan container gambar sebagai flex container */
        }

        .thumbnail img {
            width: 250px;
            margin-right: 20px;
            /* Mengurangi margin-right agar judul dan main_sentence lebih dekat dengan gambar */
            border: 4px solid #58411F;
        }

        .text-content {
            text-align: left;
            margin-top: 5px;
            flex: 1;
            /* Membuat text-content mengisi sisa ruang yang tersisa di flex container */
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
            height: 40px;
        }

        .add-new-article {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
    </style>
    <div class="manage-article">
        <h1>Manage Article</h1>
        <hr>

        <div class="box-container">
            <div class="button-container">
                <div class="box">
                    <p>{{ count($article) }} Articles</p>
                </div>
            </div>
            <div class="add-new-article">
                <a href="{{ route('createArticle') }}" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>  Add New Article</a>
            </div>
        </div>

        @foreach ($article as $artikel)
            <div class="card mt-5">
                <div class="card-body">
                    <div class="thumbnail">
                        <img src="{{ asset($artikel->thumbnail) }}" alt="Thumbnail Preview"
                            style="max-width: 200px; max-height: 200px; margin-top: 10px;">
                        <div class="text-content">
                            <div class="card-title">
                                <h2>{{ $artikel['title'] }}</h2>
                                <div class="buttons">
                                    <form action="{{ route('toggleStatusArticle', ['id' => $artikel['id']]) }}"
                                        method="post">
                                        @csrf
                                        @method('put')
                                        @if ($artikel['status'] == 0)
                                            <button type="submit" class="btn btn-success me-1">Unhide</button>
                                        @else
                                            <button type="submit" class="btn btn-primary me-1">Hide</button>
                                        @endif
                                    </form>

                                    <a href="{{ route('editArticle', ['id' => $artikel['id']]) }}"
                                        class="btn btn-warning me-1">Edit</a>

                                    <form action="{{ route('destroyArticle', ['id' => $artikel['id']]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </div>
                            </div>
                            <p>{{ $artikel['main_sentence'] }}</p>
                        </div>
                    </div>
                    <hr style="margin-top: 30px;">
                </div>
            </div>
        @endforeach
    </div>
@endsection
