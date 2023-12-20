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
        display: flex; /* Menetapkan container gambar sebagai flex container */
    }

    .thumbnail img {
        width: 250px;
        margin-right: 20px; /* Mengurangi margin-right agar judul dan main_sentence lebih dekat dengan gambar */
        border: 4px solid #58411F;
    }

    .text-content {
        text-align: left;
        margin-top: 5px;
        flex: 1; /* Membuat text-content mengisi sisa ruang yang tersisa di flex container */
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
                <p>{{ count($articles) }} Articles</p>
            </div>
        </div>
    </div>

    @foreach($articles as $article)
    @if($article['status'] == 0)
    <div class="card mt-5">
        <div class="card-body">
            <div class="thumbnail">
                <img src="{{ asset('thumbnail/' . $article['thumbnail']) }}" alt="thumbnail">
                <div class="text-content">
                    <div class="card-title">
                        <h2>{{ $article['title'] }}</h2>
                        <div class="buttons">
                            <!-- Tambahkan tombol untuk melihat detail artikel jika dibutuhkan -->
                        </div>
                    </div>
                    <p>{{ $article['main_sentence'] }}</p>
                </div>
            </div>
            <hr style="margin-top: 30px;">
        </div>
    </div>
    @endif
    @endforeach
</div>

@endsection
