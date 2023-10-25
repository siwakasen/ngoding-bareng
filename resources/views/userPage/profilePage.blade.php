@extends('navbar')
@section('content')
    <style>
        .section-footer{
                position: absolute;
            }
        .container-fluid{
            padding: 0;
        }

        .profile-card{
            border: 1px solid #6b6f74; 
            margin: 20px;
            padding: 20px;
        }

        .profile-heading {
            background-color: #0057a8; 
            color: #fff;
            padding: 10px; 
        }
        .profile-title{
            font-weight: 500;
        }
        @media(max-width:1200px){
            .card{
            }
        }
    </style>

    <div class="profile-heading">
        <h2>Your Profile</h2>
    </div>
    @forelse($user as $user)
    <div class="profile-card">
        <div class="card mb-3 border-0">
            <div class="row g-0">
              <div class="col-auto">
                <img src="{{asset('images/kiwi.jpg')}}" class="img-fluid rounded-pill" alt="..." style="width:250px;">
              </div>
              <div class="col-auto">
                <div class="card-body my-2 mx-3">
                    <h4 class="profile-title" style="">Name</h4>
                    <p>{{$user['name']}}</p>
                    <h4 class="profile-title">Email</h4>
                    <p>{{$user['email']}}</p>
                    <h4 class="profile-title">Phone number</h4>
                    <p>{{$user['phoneNumber']}}</p>
                </div>
              </div>
            </div>
          </div>
    </div>
    @endforeach
@endsection
