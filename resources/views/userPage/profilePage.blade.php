@extends('navbar')
@section('content')
    <style>
        .section-footer {
            position: absolute;
        }

        .container-fluid {
            padding: 0;
        }

        .profile-card {
            border: 1px solid #6b6f74;
            margin: 20px;
            padding: 20px;
        }

        .profile-heading {
            background-color: #0057a8;
            color: #fff;
            padding: 10px;
        }

        .card-body {
            margin: 32px 48px;
        }

        .profile-title {
            font-weight: 500;
        }

        #edit-btn {
            margin: 0;
        }

        @media(width<800px) {
            .card {
                justify-content: center;
                align-items: center;
            }

            .card-body {
                margin-bottom: 0;
                padding-bottom: 0;
            }

            #last-child {
                margin-top: 0;
                padding-top: 0;
            }

            .section-footer {
                position: static;
            }

            #edit-btn {}
        }
    </style>

    <div class="profile-heading">
        <h2>Your Profile</h2>
    </div>
    <div class="profile-card">
        <div class="card mb-3 border-0">
            <div class="row g-0 flex-md-row flex-column">
                <div class="col-md-auto d-flex align-items-center">
                    @if ($user->image != null)
                        <img src="{{ asset('storage/users/' . $user->image) }}" class="img-fluid rounded-pill mx-auto d-block"
                            alt="..." style="width:250px; ">
                    @else
                        <img src="{{ asset('storage/images/kiwi.jpg') }}" class="img-fluid rounded-pill mx-auto d-block"
                            alt="..." style="width:250px;">
                    @endif
                </div>
                <div class="col-md-auto">
                    <div class="card-body">
                        <div class="container-field">
                            <h4 class="profile-title" style="">Name</h4>
                            <p>{{ $user->name }}</p>
                        </div>
                        <div class="container-field">
                            <h4 class="profile-title">Email</h4>
                            <p>{{ $user->email }}</p>
                        </div>
                        <div class="container-field">

                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="card-body" id="last-child">
                        <h4 class="profile-title" style="">Username</h4>
                        <p>{{ $user->username }}</p>
                        @if ($user->phone_number == null)
                            <h4 class="profile-title">Phone number</h4>
                            <p>Not set yet</p>
                        @else
                            <h4 class="profile-title">Phone number</h4>
                            <p>{{ $user->phone_number }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-auto d-flex align-items-end mx-auto text-center">
                    <div class="card-body" id="edit-btn">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit
                            Profile</button>
                    </div>
                </div>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Profile</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <form method="POST" enctype="multipart/form-data" action={{ route('edit_profile') }}>
                                @csrf
                                <div class="modal-body">
                                    <div class="image-preview">
                                        @if ($user->image != null)
                                            <img src="{{ asset('storage/users/' . $user->image) }}" id="image-preview"
                                                class="img-fluid rounded-pill mx-auto d-block" alt="..."
                                                style="max-height: 180px">
                                        @else
                                            <img src="{{ asset('storage/images/kiwi.jpg') }}" id="image-preview"
                                                alt="Image Preview" class="img-fluid rounded-pill mx-auto d-block"
                                                style="height: 180px; width:180px; ">
                                        @endif
                                    </div>
                                    <input type="file" name="image" id="imageInput" class="form-control mt-2"
                                        placeholder="Input your image here" accept="*.jpg,*.png, *.jpeg"
                                        onchange="previewImage(event)">
                                    <input class="form-control mt-2" type="text" name="name" id="name"
                                        placeholder="Name" required value='{{ $user->name }}'>
                                    <input class="form-control mt-2" type="text" name="username" id="username"
                                        placeholder="Username" value={{ $user->username }} required>
                                    <input class="form-control mt-2" type="text" name="phone_number" id="phone_number"
                                        placeholder="Phone Number" value={{ $user->phone_number ?? '' }}>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success my-1">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <div>{{ $errors->first() }}</div>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            <div>{{ session('error') }}</div>
        </div>
    @endif

    <script>

        function previewImage(event) {
            var input = event.target;
            var preview = $('#image-preview'); // Change this selector based on your HTML structure
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
        $('#imageInput').on('change', function(event) {
            previewImage(event);
        });
    </script>
@endsection
