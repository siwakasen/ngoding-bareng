@extends('navbar')
@section('content')

<div class="container">

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="inputTitle" class="col-form-label">Title Course</label>
        </div>
        <div class="col-auto">
            <input type="text" id="inputTitle" class="form-control">
        </div>
    </div>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="inputCategory" class="col-form-label">Category</label>
        </div>
        <div class="col-auto">
            <input type="text" id="inputCategory" class="form-control">
        </div>
    </div>

    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="inputPrice" class="col-form-label">Price</label>
        </div>
        <div class="col-auto">
            <input type="text" id="inputPrice" class="form-control">
        </div>
    </div>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Image Preview</title>
        <script>
            function previewImage(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('preview');
                    output.src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
    </head>

    <body>
        <h2>Pratinjau Gambar</h2>
        <input type="file" accept="image/*" onchange="previewImage(event)">
        <br><br>
        <img id="preview" src="#" alt="Pratinjau Gambar" style="max-width: 300px; max-height: 300px;">
    </body>

    </html>


</div>
@endsection