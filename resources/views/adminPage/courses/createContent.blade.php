@extends('navbar')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <style>
        .form-content {
            width: 65%;
            float: left;
        }

        .playlist-content {
            width: 30%;
            float: right;
            display: flex;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .btn {
            background-color: gray;
            color: #ffffff;
            width: 320px;
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            margin-top: 15px;
            margin-left: 43px;
            border-radius: 5px;
        }

        .btn-save {
            position: relative;
            top: 5px;
            left: 420px;
            width: 100px;
            height: 40px;
            background-color: blue;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            color: white;
        }

        .video-content {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="clearfix">
        <div class="create-content" style="margin-top: 15px; margin-button: 50px">
            <div class="line"></div>
            <div class="form-content" style="margin-left: 0">
                <form>
                    @csrf
                    <div class="video-container">
                        <div class="video-preview" style="margin-bottom: 15px;">
                            <video id="videoPreview" width="100%" controls>
                                <source src="" type="video/mp4">
                            </video>
                        </div>
                        <input type="file" id="inputVideo" name="inputVideo" accept="video/*" class="form-control" onchange="previewVideo(event)">
                    </div>

                    <div class="row g-3" style="margin-bottom: 15px; margin-top:15px">
                        <div class="col-sm-2">
                            <label for="inputTitle" class="col-form-label">Title Content</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="inputTitle" name="inputTitle" class="form-control">
                        </div>
                    </div>

                    <div class="row g-3" style="margin-bottom: 15px;">
                        <div class="col-sm-2">
                            <label for="inputDetail" class="col-form-label">Detail Content</label>
                        </div>
                        <div class="col-10">
                            <input type="text" id="inputDetail" name="inputDetail" class="form-control">
                        </div>
                    </div>
                </form>
            </div>

            <div class="playlist-content">
                <div class="video-content">
                    <div style="margin: 10px;">
                        <h2 style="color: #ffffff;"><strong>Playlist Content</strong></h2>
                        <div style="display: flex; justify-content: space-between; margin-top:10px; background-color: #1E1E1E">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                            <video width="320" height="240" controls>
                                <source src="https://youtu.be/pzN8XWK8gqw?si=qVnfSvoq-I3JTPzh" type="video/mp4">
                            </video>
                            <h5 style=" margin-left: 8px; margin-right: 10px; color:white"><strong>Para Robot Sebenarnya Udah di Sekitar Kita</strong></h5>
                        </div>

                        <a href="{{ url('createContent') }}" class="btn">Add Content</a>
                        <a href="{{ url('createCourse') }}" class="btn btn-save" style="margin-left: 10px;">Save</a>
                    </div>
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
</body>

</html>

@endsection