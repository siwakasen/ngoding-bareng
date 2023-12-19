@extends('navbar')
@section('content')
    <style>
        /* Add your custom styles here */

        .article-details {
            margin: 20px;
        }

        .article-details img {
            max-width: 100%;
            height: 100px;
        }

        .article-details h1 {
            font-size: 36px;
            font-weight: bold;
        }

        .article-details p {
            font-size: 18px;
            text-align: justify;
        }

        .article-details .waktu-jam {
            margin-top: 10px;
            color: #999;
        }

        /* Responsive styles for screens with a max width of 800px */
        @media screen and (max-width: 800px) {
            .article-details {
                margin: 10px;
            }

            .article-details h1 {
                font-size: 24px;
            }

            .article-details p {
                font-size: 16px;
            }
        }
    </style>

    <div class="article-details">
        <img src="{{ asset('/storage/thumbnail/' . $article->thumbnail) }}" alt="Article Thumbnail" class="img-fluid">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->main_sentence }}</p>
        <p>{{ $article->content }}</p>
        <div class="waktu-jam">
            <i class="far fa-calendar-alt"></i> {{ $article->date }}
        </div>
    </div>

@endsection
