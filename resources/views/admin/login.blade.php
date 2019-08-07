@extends('admin.layouts.master')



@section('login')



        <div class="login-register" style="background-image:url(/manage/assets/images/background/login-register.jpg);">        
            <div class="login-box card">
            <div class="card-body">
        <form method="POST" class="form-horizontal form-material" id="loginform" action="{{ route('admin.login.submit') }}">
    
                @csrf

                    <h3 class="box-title mb-3">ورود</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                   </div>
                    <div class="form-group">
                      <div class="col-xs-12">
                         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary float-left pt-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> مرا بخاطر بسپار</label>
                            </div> <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock mr-1"></i> فراموشی رمز عبور </a> </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">ورود</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-sm-12 text-center">
                            {{-- <p>Don't have an account? <a href="register.html" class="text-info ml-1"><b>Sign Up</b></a></p> --}}
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>

        @endsection