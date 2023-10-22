@extends('navbar')
@section('content')

<style>
</style>


<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body px-4 py-5">
                            <form class="form" action="{{ url('dashboardAdmin') }}">
                                @csrf
                                <div>
                                    <h2 class="mb-3 text-center"><strong>Login</strong></h2>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
