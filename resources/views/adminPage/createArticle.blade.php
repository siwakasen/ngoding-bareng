@extends('navbarAdmin')
@section('content')
    <style>
        /* .container-all {
            min-height: 100vh;
        } */

        .container-fluid {
            padding: 0;
        }

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

        textarea {
            resize: none;
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
        <div class="row" style="width: 100%">
            <div class="col-sm-8 video-content">
                <div class="form-content">
                    @php
                        $mode = isset($mode) ? $mode : '';
                    @endphp

                    <form method="post"
                        action="{{ $mode == 'edit' ? route('updateArticle', ['id' => $articles->id]) : route('storeArticle') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @if ($mode == 'edit')
                            @method('put')
                        @endif

                        <div class="row g-3" style="margin-bottom: 15px; margin-top:15px;">
                            <div class="col-2">
                                <label for="inputTitle" class="col-form-label">Title Article</label>
                            </div>
                            <div class="col-10">
                                <input type="text" id="inputTitle" name="title" class="form-control"
                                    value="{{ $mode == 'edit' ? $articles->title : old('title') }}">
                            </div>
                        </div>
                        <div class="row g-3" style="margin-bottom: 15px;">
                            <div class="col-2">
                                <label for="inputThumbnail" class="col-form-label">Thumbnail</label>
                            </div>
                            <div class="col-10">
                                <input type="file" id="inputThumbnail" name="thumbnail" accept="image/*"
                                    class="form-control" onchange="previewImage(event)">
                                @if ($mode == 'edit' && !empty($articles->thumbnail))
                                    <img id="imagePreview" src="{{ asset($articles->thumbnail) }}" alt="Thumbnail Preview"
                                        style="max-height: 500px; margin-top: 10px;">
                                @else
                                    <div>
                                        <img id="imagePreview" src="" alt="Thumbnail Preview"
                                            style="max-height: 500px; margin-top: 10px;">
                                    </div>
                                @endif
                            </div>

                        </div>

                        <div class="row g-3" style="margin-bottom: 15px;">
                            <div class="col-2">
                                <label for="inputMainSentence" class="col-form-label">Main Sentence</label>
                            </div>
                            <div class="col-10">
                                <textarea id="inputMainSentence" name="main_sentence" class="form-control" cols="30" rows="5">{{ $mode == 'edit' ? $articles->main_sentence : old('main_sentence') }}</textarea>
                            </div>
                        </div>

                        <div class="row g-3" style="margin-bottom: 15px;">
                            <div class="col-2">
                                <label for="inputContent" class="col-form-label">Content</label>
                            </div>
                            <div class="col-10">
                                <textarea cols="18" rows="16" id="inputContent" name="content" class="form-control">{{ $mode == 'edit' ? $articles->content : old('content') }}</textarea>
                            </div>
                        </div>
                        <div class="text-end">
                            <a type="button" href={{ route('manageArticle') }} class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
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
