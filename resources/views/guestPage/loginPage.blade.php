@extends('navbarGuest')
@section('content')

<style>
    .section-footer{
        position: absolute;
    }
</style>


<div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            
            <div class="col-md-4" style="width: 500px">
                <div class="card" >
                    <div class="card-body">
                        <div class="card-body px-4 py-2">
                            <form class="form" action="{{ url('/loginDivider') }}" method="post">
                                @csrf
                                <div class="logo text-center" >
                                    <h2 class="" style="display: inline-block; text-align: left; color: #0057a8; font-weight: bold">ngoding-
                                        <div>bareng</div></h2>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" required />
                                    <label for="floatingInput">Username</label>
                                </div>
                                <!-- Password -->
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required />
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <!-- Remember me -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="remember" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Remember Me
                                    </label>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" style="width: 100%;" class="btn btn-primary btn-block mb-2 mt-3">
                                    Login
                                </button>
                                <p class="text-center">Don't have an account? <a href="{{asset('/signUp')}}">Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
