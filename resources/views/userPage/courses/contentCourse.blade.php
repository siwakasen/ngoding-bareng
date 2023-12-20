@extends('navbar')
@section('content')
    <style>
        .container-all {
            min-height: 100vh;
        }

        .video iframe {
            width: 100%;
            height: 500px;
            border-radius: 10px;
        }

        .card {
            display: flex;
        }

        .aside-content .card:hover {
            background-color: #efefef;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #d3d1d1;
            border-radius: 0;
        }

        .form-control:focus {
            border: none;
            box-shadow: none;
            border-bottom: 1px solid #d3d1d1;
        }

        .question-head {
            margin-top: 20px;
        }

        .table-aside {
            margin-top: 20px;
        }

        @media(max-width:800px) {
            .video-content {
                width: 100%;
            }

            .desc {
                max-height: 100px;
                overflow-y: hidden;
            }

            .table-aside {
                position: absolute;
                width: 90%;
                margin-top: 730px;
                padding: 0 20px;
            }

            .question-head {
                position: relative;
                width: 100%;
                margin-top: 300px;
            }
        }
    </style>
    <div class="container-all">

        <div class="row ms-4">
            <div class="col-8 video-content">
                <div class="video objectfit-cover mt-4">
                    @if (str_contains($content->link, 'youtube'))
                        {!! $content['link'] !!}
                    @else
                        <div class="video-container img-fluid">
                            <video height="539"  frameborder="1"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen controls>
                                <source src="{{ $content->link }}" type="video/mp4">
                            </video>
                        </div>
                    @endif

                </div>
                <div class="detail border rounded p-3">
                    <div id="title">
                        <h4>{{ $content->name }}</h4>
                    </div>
                    <div class="desc" style="text-align: justify">
                        {{ $content->description }}
                    </div>
                </div>

                <div class="question-head row ps-2">
                    <h5 class="col-auto fw-bold m-0 my-auto">
                        <div class="">@php
                            echo count($questions);
                        @endphp Questions</div>
                    </h5>

                    <div class="question-users mt-2">
                        <form action={{ route('addQuestion', ['id_course' => $course->id, 'id_content' => $content->id]) }}
                            class="row" method="post">
                            @csrf
                            <div class="profile col-auto" style="">
                                @if ($user->id != null)
                                    <img src="{{ asset($user->image) }}" alt="" class="img-fluid rounded-pill"
                                        style="max-height: 45px; max-width: 45px;">
                                @else
                                    <img src="{{ asset('images/kiwi.jpg') }}" alt="" class="img-fluid rounded-pill"
                                        style="max-height: 45px; max-width: 45px;">
                                @endif
                            </div>
                            <p class="d-inline-flex gap-1 col p-0" style="width: 100%">
                                <input class="form-control" placeholder="Add a question..." type="text"
                                    name="questionInput" id="questionInput" data-bs-toggle="collapse"
                                    href="#collapseQuestion" aria-expanded="false" aria-controls="collapseQuestion">
                            </p>
                            <div class="collapse text-end" id="collapseQuestion">
                                <button type="button" data-bs-toggle="collapse" href="#collapseQuestion"
                                    aria-expanded="false" aria-controls="collapseQuestion"
                                    class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>

                        @foreach ($questions as $quest)
                            <div class="row my-4">
                                <div class="profile col-auto">
                                    @if ($quest->user->image == null)
                                        <img src="{{ asset('storage/images/kiwi.jpg') }}" alt=""
                                            class="img-fluid rounded-pill" style="max-height: 45px; max-width: 45px;">
                                    @else
                                        <img src="{{ asset($quest->user->image) }}" alt=""
                                            class="img-fluid rounded-pill" style="max-height: 45px; max-width: 45px;">
                                    @endif
                                </div>
                                <div class="col p-0">
                                    <div class="row align-text-bottom">
                                        <h6 class="col-auto m-0 pe-0">{{ $quest->user->name }}</h6> <span class="col ps-1 "
                                            style="font-size: 13px; color: #464646;">{{ $quest->date }}</span>
                                    </div>
                                    <div class="mt-1">
                                        {{ $quest->detail_question }}
                                    </div>
                                    <div class="">
                                        <form method="post"
                                            action={{ route('reply', ['id_course' => $course->id, 'id_content' => $content->id, 'id_parent' => $quest->id]) }}>
                                            @csrf
                                            <button type="button" class="btn btn-light" data-bs-toggle="collapse"
                                                href="#{{ asset($quest['id']) }}" aria-expanded="false">Reply</button>
                                            <div class="collapse text-end row" id="{{ asset($quest['id']) }}">
                                                <div class="profile col-auto pt-1" style="">
                                                    @if ($user->image != null)
                                                        <img src="{{ asset($user->image) }}" alt=""
                                                            class="img-fluid rounded-pill"
                                                            style="max-height: 35px; max-width: 35px;">
                                                    @else
                                                        <img src="{{ asset('/storage/images/kiwi.jpg') }}" alt=""
                                                            class="img-fluid rounded-pill"
                                                            style="max-height: 35px; max-width: 35px;">
                                                    @endif
                                                </div>
                                                <p class="d-inline-flex gap-1 col p-0" style="width: 100%">
                                                    <input class="form-control" placeholder="Add a reply..." type="text"
                                                        name="questionInput" id="questionInput">
                                                </p>
                                                <div>
                                                    <button type="button" data-bs-toggle="collapse"
                                                        href="#{{ asset($quest['id']) }}" aria-expanded="false"
                                                        aria-controls="{{ asset($quest['id']) }}"
                                                        class="btn btn-light">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Reply</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @foreach ($quest->replies as $reply)
                                        <div class="row my-4">
                                            <div class="profile col-auto">
                                                @if ($reply->user->image == null)
                                                    <img src="{{ asset('storage/images/kiwi.jpg') }}" alt=""
                                                        class="img-fluid rounded-pill"
                                                        style="max-height: 45px; max-width: 45px;">
                                                @else
                                                    <img src="{{ asset($reply->user->image) }}" alt=""
                                                        class="img-fluid rounded-pill"
                                                        style="max-height: 45px; max-width: 45px;">
                                                @endif
                                            </div>
                                            <div class="col p-0">
                                                <div class="row align-text-bottom">
                                                    <h6 class="col-auto m-0 pe-0">{{ $reply->user->name }}</h6> <span
                                                        class="col ps-1 "
                                                        style="font-size: 13px; color: #464646;">{{ $reply->date }}</span>
                                                </div>
                                                <div class="mt-1">
                                                    {{ $reply->detail_question }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-4 table-aside">
                <div class="border rounded shadow">
                    <div class="aside-tile p-1 pt-3 px-2">
                        <h5 class="m-0 fw-bold">Table of content - {{ $course->title }}</h5>
                    </div>
                    <hr class="m-0">
                    <div class="aside-content">
                        @for ($i = 0; $i < count($contents); $i++)
                            <div class="card rounded-2 pt-1 border-0">
                                <a href="{{ route('contentCourse', ['id_course' => $course->id, 'id_content' => $contents[$i]->id]) }}"
                                    class="text-black text-decoration-none">
                                    <div class="card-body border-0 p-1">
                                        <div class="row mb-1">
                                            @if ($contents[$i]->id == $content->id)
                                                <div class="col-auto my-auto"><i class="fa-solid fa-caret-right"></i>
                                                </div>
                                            @else
                                                <div class="col-auto" style="padding-right: 20px;"></div>
                                            @endif
                                            <div class="col-auto p-0">
                                                <img src="{{ asset($contents[$i]->thumbnail) }}"
                                                    style="width: auto; max-height: 50px;"
                                                    class="objectfit-cover rounded-2" alt="">
                                            </div>
                                            <div class="col my-auto">
                                                <h6 class="m-0" style="color: #464646; font-size: 14px">
                                                    {{ $contents[$i]->name }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function onDocumentReady() {
            setInterval(function doThisEveryTwoSeconds() {
                toastr.error("Hello World!");
            }, 2000);
        });
    </script>
@endsection
