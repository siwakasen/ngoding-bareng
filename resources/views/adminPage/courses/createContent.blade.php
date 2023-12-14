@extends('navbarAdmin')
@section('content')
    <style>
        .form-content {
            margin: 20px;
            width: 100%;
        }

        .card {
            display: flex;
        }

        .aside-content .card:hover {
            background-color: #efefef;
        }

        .table-aside {
            max-width: 30%;
            margin: 0 auto;
            margin-top: 20px;
        }

        .btn-save-all {
            margin-top: 73%;
        }

        @media(max-width:900px) {
            .video-content {
                width: 95%;
            }

            div.row.g3 {
                width: 95%;
            }

            .table-aside {
                position: relative !important;
                top: 0;
                margin: 0 auto;
                padding: 0;
                width: 90%;

                max-width: 100% !important;
            }

            .btn-save-all {
                margin-top: 25%;
            }
        }
    </style>
    <div class="row">
        <div class="col-sm-8 video-content">
            <div class="form-content">
                <form>
                    @csrf
                    <div class="video-container">
                        <div class="video-preview" style="margin-bottom: 15px;">
                            <video id="videoPreview" width="100%" controls>
                                <source src="" type="video/mp4">
                            </video>
                        </div>
                        <input type="file" id="inputVideo" name="inputVideo" accept="video/*" class="form-control"
                            onchange="previewVideo(event)">
                    </div>

                    <div class="row g-3" style="margin-bottom: 15px; margin-top:15px">
                        <div class="col-2">
                            <label for="inputTitle" class="col-form-label">Title Content</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="inputTitle" name="inputTitle" class="form-control">
                        </div>
                    </div>

                    <div class="row g-3" style="margin-bottom: 15px;">
                        <div class="col-2">
                            <label for="inputDetail" class="col-form-label">Detail Content</label>
                        </div>
                        <div class="col-10">
                            <textarea class="form-control" id="detailInput" rows="5"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4 table-aside">
            <div class="border rounded shadow">
                <div class="aside-tile p-1 pt-3 px-2">
                    <h5 class="m-0 fw-bold">Table of content</h5>
                </div>
                <hr class="m-0">
                <div class="aside-content">
                    <div class="card rounded-2 pt-1 border-0">
                        <div class="card-body border-0 p-1">
                            <div class="row mb-1">
                                <div class="col-auto" style="padding-right: 20px;"></div>
                                <div class="col-auto p-0">
                                    <img src="{{ asset($course['thumbnail']) }}" style="width: auto; max-height: 50px;"
                                        class="objectfit-cover rounded-2" alt="">
                                </div>
                                <div class="col my-auto">
                                    <h6 class="m-0" style="color: #464646; font-size: 14px">{{ $course['title'] }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 pt-1 border-0">
                        <div class="card-body border-0 p-1">
                            <div class="row mb-1">
                                <div class="col-auto" style="padding-right: 20px;"></div>
                                <div class="col-auto p-0">
                                    <img src="{{ asset($course['thumbnail']) }}" style="width: auto; max-height: 50px;"
                                        class="objectfit-cover rounded-2" alt="">
                                </div>
                                <div class="col my-auto">
                                    <h6 class="m-0" style="color: #464646; font-size: 14px">{{ $course['title'] }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-2 pt-1 border-0">
                        <div class="card-body border-0 p-1">
                            <div class="row mb-1">
                                <div class="col-auto" style="padding-right: 20px;"></div>
                                <div class="col-auto p-0">
                                    <img src="{{ asset($course['thumbnail']) }}" style="width: auto; max-height: 50px;"
                                        class="objectfit-cover rounded-2" alt="">
                                </div>
                                <div class="col my-auto">
                                    <h6 class="m-0" style="color: #464646; font-size: 14px">{{ $course['title'] }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <a href="" class="text-decoration-none">
                            <button type="submit" class="btn btn-outline-primary" style="width: 95%; height: 50px">Add new
                                content</button>
                        </a>
                    </div>
                </div>
                <div class="text-center mb-3 btn-save-all">
                    <hr>
                    <a href="" class="text-decoration-none">
                        <button type="submit" class="btn btn-success" style="width: 70%">Save all</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewVideo(event) {
            const video = document.getElementById('videoPreview');
            const file = URL.createObjectURL(event.target.files[0]);
            video.src = file;
        }
    </script>
@endsection
