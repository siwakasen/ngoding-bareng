@extends('navbar')
@section('content')
    <style>
        .container-fluid {
            padding: 0;
        }

        .news-head {
            background-color: #0057a8;
            padding: 50px;
            padding-bottom: 10px;
            text-align: center;
            background: url('https://img.freepik.com/free-photo/low-angle-shot-mesmerizing-starry-sky_181624-27925.jpg?size=626&ext=jpg&ga=GA1.2.2022068520.1702984730&semt=sph');
            background-position: center center, center top;
            background-repeat: repeat, no-repeat;
        }

        .news-heading {
            text-align: left;
            margin: 0 300px;
            margin-top: 20px;
        }

        .news-heading h2 {
            font-weight: bold;
        }

        .news-heading p {
            max-width: 400px;
            text-align: justify;
            max-height: 200px;
        }

        /* content articles */
        .news-main {
            margin: 0 260px;
        }

        .divider {
            width: 100%;
            height: 20px;
            box-shadow: 0 5px 5px rgb(153, 152, 152) inset;
            background-color: #ddd;
        }

        .news-sort {
            height: 60px;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .option {
            text-decoration: none;
            color: #949292;
        }

        .active {
            color: #0057a8;
            border-bottom: 5px solid #0057a8;
        }

        .option:hover {
            background-color: #ddd;
        }

        .option:focus {
            color: #0057a8;
            border-bottom: 5px solid #0057a8;
        }

        .articles-container {
            padding: 20px;
            padding-left: 0;
        }

        .articles-container a {
            text-decoration: none;
            color: #333333;
        }

        .news-article .row:hover {
            color: #9c9898;
            filter: opacity(80%);
        }

        @media screen and (max-width: 1100px) {
            .news-head {
                max-width: 100%;
            }

            .news-heading {
                text-align: left;
                margin: 0 20px;
                margin-top: 20px;
            }

            .news-heading p {
                max-width: 100%;
                text-align: justify;
                max-height: 200px;
            }

            .news-main {
                max-width: 100%;
                margin: 0 20px;
            }
        }
    </style>
    <div class="news-head z-1">
        <div class="news-heading text-light">
            <h2>Read all news</h2>
            <h2>about technology</h2>
            <p class="overflow-y-hidden">Welcome to the forefront of technology and innovation, where every line of code
                shapes the future. In this ever-evolving world of programming, we explore the latest trends, breakthroughs,
                and fascinating developments that are shaping the digital landscape. From AI-driven code generators to
                revolutionary programming languages, stay informed with our curated technology news.</p>
        </div>
    </div>
    <div class="divider"></div>
    <div class="news-main">
        <div class="news-sort row g-0">
            @if ($activePop)
                <a href="{{ route('articles') }}" class="option px-4 col-auto py-2 pt-3 ">
                    <i class="fa-regular fa-envelope fa-lg d-inline align-middle"></i>
                    <div class="text d-inline align-middle">Latest</div>
                </a>
                <a href="{{ route('articlesPopular') }}" class="option px-4 col-auto py-2 pt-3 active">
                    <i class="fa-solid fa-fire fa-lg d-inline align-middle"></i>
                    <div class="text d-inline align-middle">Popular</div>
                </a>
            @else
                <a href="{{ route('articles') }}" class="option px-4 col-auto py-2 pt-3 active">
                    <i class="fa-regular fa-envelope fa-lg d-inline align-middle"></i>
                    <div class="text d-inline align-middle">Latest</div>
                </a>
                <a href="{{ route('articlesPopular') }}" class="option px-4 col-auto py-2 pt-3">
                    <i class="fa-solid fa-fire fa-lg d-inline align-middle"></i>
                    <div class="text d-inline align-middle">Popular</div>
                </a>
            @endif

        </div>
        @foreach ($articles as $item)
            <div class="articles-container">
                <div class="news-article">
                    <a href="{{ route('showArticleById', ['id' => $item['id']]) }}">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($item['thumbnail']) }}" alt="Image"
                                    class="img-fluid news-image object-fit-cover" style="height: 250px; width: 346px">
                            </div>
                            <div class="col-md-8">
                                <div class="news-title">
                                    <h4 style="font-weight: bold">{{ $item['jArticle'] }}</h4>
                                </div>
                                <div class="news-info">
                                    {{ $item['desArticle'] }}
                                </div>
                                <div class="title">
                                    <h2>{{ $item['title'] }}</h2>
                                </div>
                                <div class="main-sentence">
                                    <p>{{ $item['main_sentence'] }}</p>
                                </div>
                                <div class="waktu-jam">
                                    <i class="far fa-calendar-alt"></i> {{ $item['date'] }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
