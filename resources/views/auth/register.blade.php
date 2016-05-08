@extends('layouts.master')

@section('breadcrumb')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active"> <a href="{{ url('register') }}">Register</a></li>
    </ol>
</div>
@endsection

@section('content')
<div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div id="page-main">
                <div class="col-md-8 col-sm-10 col-sm-offset-1 col-md-offset-2">
                            <section id="account-register" class="account-block">
                                <header><h2>Create New Account</h2></header>
                                <form role="form" class="clearfix" method="POST" action="{{ url('/register') }}">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label for="new-account-name">Full Name</label>
                                        <input type="text" class="form-control" id="new-account-name" placeholder="Your Name" name="name" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-email">Email address</label>
                                        <input type="email" class="form-control" id="new-account-email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-password">Password</label>
                                        <input type="password" class="form-control" id="new-account-password" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="new-account-repeat-password">Repeat Password</label>
                                        <input type="password" class="form-control" id="new-account-repeat-password" placeholder="Repeat Password" name="password_confirmation">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">I Understand <a href="#">Terms & Conditions</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn pull-right">Create New Account</button>
                                </form>
                            </section><!-- /#account-block -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->

            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

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

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
</div>
@endsection
