@extends('navbarAdmin')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .image-preview {
            width: 100%;
            height: 300px;
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

        .submit-button {
            display: flex;
            justify-content: flex-end;
        }
        .create-course{
            max-width: 80%;
            margin: 0 auto;
            margin-top:20px;
        }
    </style>
    <div class="create-course">
        <h1>Create Course</h1>
        <hr>
        <form class="form-course">
            <div class="row g-3" style="margin-bottom: 15px;">
                <div class="col-sm-2">
                    <label for="inputTitle" class="col-form-label">Title Course</label>
                </div>
                <div class="col-10">
                    <input type="text" id="inputTitle" class="form-control">
                </div>
            </div>

            <div class="row g-3" style="margin-bottom: 15px;">
                <div class="col-sm-2">
                    <label for="inputCategory" class="col-form-label">Category</label>
                </div>
                <div class="col-10">
                    <input type="text" id="inputCategory" class="form-control">
                </div>
            </div>

            <div class="row g-3" style="margin-bottom: 15px;">
                <div class="col-sm-2">
                    <label for="inputPrice" class="col-form-label">Price</label>
                </div>
                <div class="col-10">
                    <input type="text" id="inputPrice" class="form-control">
                </div>
            </div>

            <div class="row g-3" style="margin-bottom: 15px;">
                <div class="col-sm-2">
                    <label for="inputImage" class="col-form-label">Thumbnail</label>
                </div>
                <div class="col-10">
                    @csrf
                    <div class="image-preview" id="imagePreview">
                        <a href=""><img src="" alt="Image Preview" width="100" height="100"></a>
                    </div>
                    <input type="file" name="image" id="imageInput" onchange="previewImage(event)">
                </div>
            </div>
            <div class="row g-3" style="margin-bottom: 15px;">
                <div class="col-12 submit-button">
                    <a href="{{asset('/createContent')}}">
                        <button type="button" class="btn btn-primary">Next</button>
                    </a>
                </div>
            </div>
    </form>
    </div>

    <script>
        function previewImage(event) {
            var image = document.getElementById('imagePreview');
            image.getElementsByTagName('img')[0].src = URL.createObjectURL(event.target.files[0]);
        }
    </script>

@endsection
