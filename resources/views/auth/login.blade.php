@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-between align-items-center">
        <div class="col-12">


            <form action="{{route('login')}}" method="POST" class="row row-eq-height lockscreen  mt-5 mb-5">@csrf
                <div class="lock-image col-12 col-sm-5"></div>
                <div class="login-form col-12 col-sm-7">
                    @foreach ($errors->all() as $err)
                    <p class="text-danger-text-center">{{$err}}</p>
                    @endforeach
                    <div class="form-group mb-3">
                        <label for="emailaddress">Email address</label>
                        <input class="form-control" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" required=""  name="password" id="password" placeholder="Enter your password">
                    </div>

                    <div class="form-group mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <button class="btn btn-primary" type="submit"> Log In </button>
                    </div>
                    <p class="my-2 text-muted">--- Or connect with ---</p>
                    <a class="btn btn-social btn-dropbox text-white mb-2">
                        <i class="icon-social-dropbox align-middle"></i>
                    </a>
                    <a class="btn btn-social btn-facebook text-white mb-2">
                        <i class="icon-social-facebook align-middle"></i>
                    </a>
                    <a class="btn btn-social btn-github text-white mb-2">
                        <i class="icon-social-github align-middle"></i>
                    </a>
                    <a class="btn btn-social btn-google text-white mb-2">
                        <i class="icon-social-google align-middle"></i>
                    </a>
                    <div class="mt-2">Don't have an account? <a href="page-register.html">Create an Account</a></div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
