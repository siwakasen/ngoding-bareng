@extends('navbarAdmin')
@section('content')
    <style>
        .form-content {
            margin: 20px;
            width: 100%;
        }

        .container-fluid {
            padding: 0;
        }

        .image-preview {
            height: 300px;
            max-height: 300px;
            border: 1px solid #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .image-preview img {
            max-width: 100%;
            max-height: 100%;
        }

        .card {
            display: flex;
        }

        .content-item .card:hover {
            background-color: #efefef;
        }

        .content-item {
            text-decoration: none;
            color: black;
        }

        .table-aside {
            max-width: 30%;
            margin: 0 auto;
            margin-top: 20px;
        }

        .btn-save-all {
            margin-top: 10%;
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
    <div class="container-all">
        <div class="text-start ps-4 pt-3">
            <h2>Contents of <strong>{{$course->title}}</strong> Course</h2>
            <hr>
            <div class="">
                <form method="POST"  action={{ route('deleteContent', ['id' => $content->id]) }}>
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Delete current content
                    </button>
                </form>
            </div>
        </div>
        <form enctype="multipart/form-data" id="myForm" method="post" onsubmit="return onSubmit()">
            <div class="row">
                <div class="col-sm-8 video-content">
                    <div class="form-content">
                        @csrf
                        <div class="video-container">
                            <div class="video-preview" style="margin-bottom: 15px;">
                                @if ($content->link == null)
                                    <video id="videoPreview" width="100%" controls>
                                        <source src="" type="video/mp4">
                                    </video>
                                @else
                                    <video id="videoPreview" width="100%" controls>
                                        <source src={{ $content->link }} type="video/mp4">
                                    </video>
                                @endif
                            </div>
                            @if ($content->link == null)
                                <input type="file" id="inputVideo" name="link" accept="video/*" class="form-control"
                                    onchange="previewVideo(event)" required>
                            @else
                                <input type="file" id="inputVideo" name="link" accept="video/*" class="form-control"
                                    onchange="previewVideo(event)">
                            @endif
                        </div>

                        <div class="row g-3" style="margin-bottom: 15px; margin-top:15px">
                            <div class="col-2">
                                <label for="inputTitle" class="col-form-label">Name Content</label>
                            </div>
                            <div class="col-10">
                                <input type="text" id="inputTitle" name="name" class="form-control" required
                                    value="{{ $content->name }}">
                            </div>
                        </div>

                        <div class="row g-3" style="margin-bottom: 15px;">
                            <div class="col-2">
                                <label for="inputDetail" class="col-form-label">Description</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" id="detailInput" name="description" rows="5" required>{{ $content->description }}</textarea>
                            </div>
                        </div>
                        <div class="row g-3" style="margin-bottom: 15px; margin-top:15px">
                            <div class="col-2">
                                <label for="inputTitle" class="col-form-label">Thumbnail</label>
                            </div>
                            <div class="col-10">
                                <div class="image-preview">
                                    @if ($content->thumbnail == null)
                                        <img src="" id="imagePreview" alt="Image Preview" class="img-fluid">
                                    @else
                                        <img src="{{ $content->thumbnail }}" id="imagePreview" alt="Image Preview"
                                            class="img-fluid">
                                    @endif
                                </div>
                                @if ($content->thumbnail == null)
                                    <input type="file" name="thumbnail" id="inputThumbnail"
                                        onchange="previewImage(event)" accept="image/jpeg, image/png, image/jpg" required>
                                @else
                                    <input type="file" name="thumbnail" id="inputThumbnail" accept="image/jpeg, image/png, image/jpg"
                                        onchange="previewImage(event)">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 table-aside">
                    <div class="border rounded shadow">
                        <div class="aside-tile p-1 pt-3 px-2">
                            <h5 class="m-0 fw-bold">Table of content</h5>
                        </div>
                        <hr class="m-0">
                        <div class="aside-content">
                            @for ($i = 0; $i < count($contents); $i++)
                                <a class="content-item"
                                    href={{ route('editContent', ['id_course' => $course->id, 'id_content' => $contents[$i]->id]) }}>
                                    <div class="card rounded-2 pt-1 border-0">
                                        <div class="card-body border-0 p-1">
                                            <div class="row mb-1">
                                                @if ($contents[$i]->id == $content->id)
                                                    <div class="col-auto my-auto"><i class="fa-solid fa-caret-right"></i>
                                                    </div>
                                                @else
                                                    <div class="col-auto" style="padding-right: 20px;"></div>
                                                @endif
                                                <div class="col-auto p-0">
                                                    @if ($contents[$i]->thumbnail == null)
                                                        <img src="{{ asset('/storage/images/no-thumbnail.jpg') }}"
                                                            style="width: auto; max-height: 50px;"
                                                            class="objectfit-cover rounded-2" alt="">
                                                    @else
                                                        <img src="{{ asset($contents[$i]['thumbnail']) }}"
                                                            style="width: auto; max-height: 50px;"
                                                            class="objectfit-cover rounded-2" alt="">
                                                    @endif
                                                </div>
                                                <div class="col my-auto">
                                                    <h6 class="m-0" style="color: #464646; font-size: 14px">
                                                        @if ($contents[$i]->name == null)
                                                            Untitled
                                                        @else
                                                            {{ $contents[$i]->name }}
                                                        @endif
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endfor
                                <hr>
                            <div class="text-center mt-2">
                                <input type="hidden" name="id_course" value="{{ $course->id }}">
                                <input type="hidden" name="isnewcontent" id="isnewcontent" value="">
                                <button type="submit" onclick="setIsNewContent(false)" class="btn btn-success d-inline shadow"
                                    style=" width:200px; height: 50px">Save</button>
                                <button type="submit" onclick="setIsNewContent(true)" class="btn btn-primary d-inline shadow"
                                    style=" width:200px; height: 50px">Create New</button>
                            </div>
                        </div>
                        <div class="text-center mb-3 btn-save-all">
                            <hr>
                            <input type="hidden" name="id_content" value="{{ $content->id }}">
                            <button type="submit" onclick="setIsDone(true)" class="btn btn-outline-secondary shadow"
                                style="width: 70%">Done</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>

    <script>
        var isNewContent = true; // Default value
        var isDone = false; // Default value

        function setIsDone(value) {
            document.getElementById('myForm').action = "{{ route('saveAllContent') }}";
        }
        function setIsNewContent(value) {
            isNewContent = value;
            document.getElementById('isnewcontent').value = isNewContent;
            document.getElementById('myForm').action = isNewContent ?
            "{{ route('createNewContent',['id_course'=>$course->id]) }}"  : "{{ route('storeContent', ['id_content' => $content->id]) }}";
        }

        function onSubmit() {
            document.getElementById('isnewcontent').value = isNewContent;
            return true;
        }

        function previewVideo(event) {
            const video = document.getElementById('videoPreview');
            const file = URL.createObjectURL(event.target.files[0]);
            video.src = file;
        }

        function previewImage(event) {
            var input = event.target;
            var preview = $('#imagePreview'); // Change this selector based on your HTML structure
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                // If no new file is selected and there is no existing image, display a default image
                preview.attr('src', '');
            }
        }

        // Optional: You can trigger the image preview when the file input changes
        $('#inputThumbnail').on('change', function(event) {
            previewImage(event);
        });
    </script>
@endsection
