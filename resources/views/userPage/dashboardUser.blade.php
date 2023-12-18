@extends('navbar')
@section('content')
    <style>
        .container-all{
            min-height: 100vh;
        }
        .card-wrapper {
            padding: 10px 20px;
        }

        .card a {
            text-decoration: none;
            color: black;
        }

        /* All */
        .card {
            transition: 0.5s;
        }

        .card:hover {
            transform: scale(105%);
        }

        /* Course */
        .container-course .card {
            width: 46%;
            margin: 1% 2%;
        }

        /* profile container */
        .profile-container {
            margin-top: 80px;
        }

        .profile-image {
            padding-top: 20px;
            align-self: center;
        }

        .profile-image img {
            max-height: 140px;
            max-width: 140px;
            object-fit: cover;
            border-radius: 50%;
        }

        @media(max-width:900px) {
            .owned-course {
                position: relative;
                margin-top: 270px;
                width: 100%;
            }

            .container-course .card {
                width: 95%;
            }

            .profile-container {
                position: absolute;
                margin-top: 20px;
                margin-left: 8%;
                width: 80%;
            }
        }
    </style>
    <div class="container-all">

        <div class="content-body row" style="margin: 0 auto; color: #464646;">
            <div class="owned-course pt-4 col-7">
                <h2>Your Course</h2>
                <div class="container-course row">
                    @forelse($user_courses as $item)
                        <div class="card shadow rounded-2 col-6 p-0">
                            <a href="{{ route('show', ['id' => $item->id]) }}" class="text-decoration-none">
                                <div class="card-body p-1">
                                    <div class="row mb-1">
                                        <div class="col-auto pe-0">
                                            <img src="{{ asset($item['thumbnail']) }}"
                                                style="width: auto; max-height: 65px;" class="objectfit-cover rounded-2"
                                                alt="">
                                        </div>
                                        <div class="col my-auto">
                                            <h6 class="m-0" style="color: #464646; font-size: 18px">{{ $item['title'] }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-1 bg-white">
                                    <p style="color: #464646; font-size: 16px;" class="ms-2 mb-0">Continue</p>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="container-course">
                            <div class="alert alert-primary">
                                <h5>You don't have any course yet</h5>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="profile-container col-5">
                <div class="card shadow mx-auto" style=" width: 50%">
                    <div class="profile-image px-3">
                        @if ($user->image != null)
                            <img src="{{ asset('/storage/users/' . $user->image) }}" class="card-img-top" alt="...">
                        @else
                            <img src="{{ asset('/storage/images/kiwi.jpg') }}" class="card-img-top" alt="...">
                        @endif

                    </div>
                    <div class="card-body">
                        <p class="card-text fs-4 text-center">{{ $user->name }}</p>
                    </div>
                    <a href="{{ asset('/profile') }}" style="width: 100%">
                        <button type="button" class="btn btn-outline-primary rounded-top-0" style="width: 100%">Detail
                            Profile</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-recommend py-5 px-3">
            <h3 style="width: 100%">Recommended For You</h3>
            @include('carousel')
        </div>
    </div>
@endsection
