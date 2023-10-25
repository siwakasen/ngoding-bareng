@extends('navbar')
@section('content')
<style>

        .card-wrapper {
          padding: 10px 20px;
        }

        .card a {
            text-decoration: none;
            color: black;
        }

    /* All */
    .card{
        transition: 0.5s;
    }
    .card:hover{
        transform: scale(105%);
    }

    /* Course */
    .container-course .card{
        width: 46%;
        margin: 1% 2%;
    }
    /* profile container */
    .profile-container{
        margin-top: 80px;
    }
    .profile-image{
        padding-top:20px;
        align-self: center;
    }
    .profile-image img{
        max-height: 140px;
        max-width: 140px;
        object-fit: cover;
        border-radius: 50%;
    }

    @media(max-width:900px){
        .owned-course{
            position: relative;
            margin-top:270px;
            width: 100%;
        }
        .container-course .card{
            width: 95%;
        }
        .profile-container{
            position: absolute;
            margin-top: 20px;
            margin-left: 8%;
            width: 80%;
        }
    }
</style>
<div class="content-body row" style="margin: 0 auto; color: #464646;">
    <div class="owned-course pt-4 col-7">
        <h2>Your Course</h2>
        <div class="container-course row">
            @foreach ($course as $item)
            <div class="card shadow rounded-2 col-6 p-0">
                <a href="{{asset('/contentCourse')}}" class="text-decoration-none">
                    <div class="card-body p-1">
                        <div class="row mb-1">
                            <div class="col-auto pe-0">
                                <img src="{{asset($item['image'])}}" style="width: auto; max-height: 65px;" class="objectfit-cover rounded-2" alt="">
                            </div>
                            <div class="col my-auto">
                                <h6 class="m-0" style="color: #464646; font-size: 18px">{{$item['title']}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-1 bg-white">
                        <p style="color: #464646; font-size: 16px;" class="ms-2 mb-0">Continue</p>  
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="profile-container col-5">
        <div class="card shadow mx-auto" style=" width: 50%">
            <div class="profile-image px-3">
                <img src="{{asset('images/ryan-gosling.jpg')}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <p class="card-text fs-4 text-center">Ryan Gosling</p>
            </div>
            <button type="button" class="btn btn-outline-primary rounded-top-0">Detail Profile</button>
          </div>
    </div>
</div>
<div class="container-recommend py-5 px-3">
    <h3 style="width: 100%">Recommended For You</h3>
    <div class="owl-carousel owl-theme">
        @foreach ($course as $item)
        <div class="card-wrapper mb-2">
            <div class="card shadow" style="width: 100%;">
                <a href="{{asset('/contentCourse')}}">
                    <img src="{{ asset($item['image']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['category'] }}</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Buy: {{$item['price']}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
