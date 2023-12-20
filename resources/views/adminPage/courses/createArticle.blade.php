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
            @php
                $mode = isset($mode) ? $mode : '';
            @endphp

            <form method="post" action="{{ $mode == 'edit' ? route('updateArticle', ['id' => $articles->id]) : route('storeArticle') }}" enctype="multipart/form-data">
                @csrf
                @if ($mode == 'edit')
                    @method('put')
                @endif

                <div class="row g-3" style="margin-bottom: 15px; margin-top:15px">
                    <div class="col-2">
                        <label for="inputTitle" class="col-form-label">Title Article</label>
                    </div>
                    <div class="col-10">
                        <input type="text" id="inputTitle" name="title" class="form-control" value="{{ $mode == 'edit' ? $articles->title : old('title') }}">
                    </div>
                </div>
                <div class="row g-3" style="margin-bottom: 15px;">
                    <div class="col-2">
                        <label for="inputThumbnail" class="col-form-label">Thumbnail</label>
                    </div>
                    <div class="col-10">
                    <input type="file" id="inputThumbnail" name="thumbnail" accept="image/*" class="form-control" onchange="previewThumbnail(event)">
@if($mode == 'edit' && !empty($articles->thumbnail))
    <img src="{{ asset('/storage/thumbnail/' . $articles->thumbnail) }}" alt="Thumbnail Preview" style="max-width: 150px; margin-top: 10px;">
@else
    <div id="imagePreview"><img src="" alt="Thumbnail Preview" style="max-width: 100px; margin-top: 10px;"></div>
@endif

                </div>

                <div class="row g-3" style="margin-bottom: 15px;">
                    <div class="col-2">
                        <label for="inputMainSentence" class="col-form-label">Main Sentence</label>
                    </div>
                    <div class="col-10">
                        <input type="text" id="inputMainSentence" name="main_sentence" class="form-control" value="{{ $mode == 'edit' ? $articles->main_sentence : old('main_sentence') }}">
                    </div>
                </div>

                <div class="row g-3" style="margin-bottom: 15px;">
                    <div class="col-2">
                        <label for="inputContent" class="col-form-label">Content</label>
                    </div>
                    <div class="col-10">
                        <input type="text" id="inputContent" name="content" class="form-control" value="{{ $mode == 'edit' ? $articles->content : old('content') }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
<script>
    function previewThumbnail(event) {
        var image = document.getElementById('imagePreview');
        image.getElementsByTagName('img')[0].src = URL.createObjectURL(event.target.files[0]);
    }
</script>
@endsection
