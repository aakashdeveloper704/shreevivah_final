@extends('layouts.auth')

@section('styles')
<style type="text/css">
    .auth-wrapper {
        background: url(https://wrappixel.com/demos/admin-templates/adminpro-bootstrap-latest/admin-pro/src/assets/images/background/login-register.jpg) no-repeat center center;
        background-size: cover;
    }
</style>
@endsection

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
    <div class="auth-box p-4 bg-white rounded">
        <div id="loginform">
            <div class="logo">
                <h3 class="box-title mb-3">Update Password</h3>
            </div>
            <!-- Form -->
            <div class="row">
                <div class="col-12">
                    <form method="POST" class="form-horizontal mt-3 form-material" action="{{route('auth.updatePassword')}}">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                            @error('username')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <div class="">
                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                            </div>
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group text-center mt-4 mb-3">
                            <div class="col-xs-12">
                                <button class="btn btn-info d-block w-100 waves-effect waves-light" type="submit">Save</button>
                            </div>
                        </div>
                        @if(Session::has('error'))
                            <span class="text-danger">{{Session::get('error')}}</span>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection