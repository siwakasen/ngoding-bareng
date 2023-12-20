@extends('navbarAdmin')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container-all {
            min-height: 85vh;
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

        .submit-button {
            display: flex;
            justify-content: flex-end;
        }

        .create-course {
            max-width: 80%;
            margin: 0 auto;
            margin-top: 20px;
        }
    </style>
    <div class="container-all">

        <div class="create-course">
            @if ($edit)
                <h1>Edit Course</h1>
            @else
                <h1>Create Course</h1>
            @endif
            <hr>
            <form class="form-course" method="POST"
                action="{{ $edit ? route('updateCourse') : route('storeCourse') }}"
                enctype="multipart/form-data">
                @csrf
                @if ($edit)
                    @method('put')
                    <input type="hidden" name="id_course" value={{$course->id}}>
                @endif
                <div class="row g-3" style="margin-bottom: 15px;">
                    <div class="col-sm-2">
                        <label for="inputTitle" class="col-form-label">Title Course</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="title" id="inputTitle" class="form-control"
                            value="{{ $edit ? $course->title : '' }}" required>
                    </div>
                </div>

                <div class="row g-3" style="margin-bottom: 15px;">
                    <div class="col-sm-2">
                        <label for="inputPrice" class="col-form-label">Price</label>
                    </div>
                    <div class="col-10">
                        <input type="number" name="price" id="inputPrice" class="form-control"
                            value="{{ $edit ? $course->price : '' }}" required>
                    </div>
                </div>
                <div class="row g-3" style="margin-bottom: 15px;">
                    <div class="col-sm-2">
                        <label for="category" class="col-form-label">Category</label>
                    </div>
                    <div class="col-10">
                        <select class="form-select" id="category" name="id_category" required>
                            @if ($edit)
                                <option disabled>Choose...</option>
                            @else
                                <option>Choose...</option>
                            @endif
                            @foreach ($categories as $item)
                                @if ($edit)
                                    @if ($item->id == $course->id_category)
                                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endif
                                @else
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-3" style="margin-bottom: 15px;">
                    <div class="col-sm-2">
                        <label for="inputImage" class="col-form-label">Thumbnail</label>
                    </div>
                    <div class="col-10">
                        <div class="image-preview">
                            <img src="{{ $edit ? $course->thumbnail : '' }}" id="imagePreview" alt="Image Preview"
                                class="img-fluid">
                        </div>
                        @if ($edit)
                            <input type="hidden" name="thumbnail" value="{{ $course->thumbnail }}" id="inputThumbnail">
                        @else
                            <input type="file" name="thumbnail" id="inputThumbnail" onchange="previewImage(event)"
                                required>
                        @endif
                    </div>
                </div>
                <div class="row g-3" style="margin-bottom: 15px;">
                    <div class="col-12 submit-button">
                        <a href={{ route('manageCourse') }} class="btn btn-danger me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
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
