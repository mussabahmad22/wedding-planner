@extends('layouts.app')
@section('title', 'Registration')
@section('style')
    <style type="text/css">
        h3.text-center.txt-primary {
            color: #66adff;
        }
        .error div {
            color: red;
            text-align: left;
        }

    </style>
@endsection
@section('content')
    <section class="p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="text-center">
                                <img src="assets/images/logo.png" alt="logo.png">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up. It is fast and easy.</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row error m-b-20">
                                     @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="col-md-12">{{$error}}</div>
                                        @endforeach
                                     @endif
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                                     
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                                     
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your Email Address" name="email" required>
                                     
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Choose Password" name="password" required>
                                     
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required> 
                                     
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="" name="termsandconditions">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now.</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Already a member ?</p>
                                        <a class="text-inverse text-left" href="/"><p class="text-inverse text-left"><b>Login Here</b></p></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
@endsection