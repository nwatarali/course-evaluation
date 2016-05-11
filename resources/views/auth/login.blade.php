@extends('layouts.master')

@section('breadcrumb')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active"> <a href="{{ url('login') }}">Log In</a></li>
    </ol>
</div>
@endsection

@section('content')
<div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div id="page-main">
                <div class="col-md-8 col-sm-10 col-sm-offset-1 col-md-offset-2">
                            <section id="account-sign-in" class="account-block">
                                <header><h2>Log In</h2></header>
                                <form role="form" class="clearfix" method="POST" action="{{ url('/login') }}">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">Remember Me
                                        </label>
                                    </div>
                                    <button type="submit" class="btn">Log In</button>
                                </form>
                                <hr>

                                <a class="btn btn-small pull-right" href="{{ url('/register') }}" style="margin-left: 5px;">Create New Account</a>
                                <a class="btn btn-color-primary btn-small pull-right" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </section><!-- /#account-block -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->

            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->



                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

@endsection
