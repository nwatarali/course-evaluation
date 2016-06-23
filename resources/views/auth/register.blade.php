@extends('layouts.master')

@section('title', 'Register')

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
                        <form role="form" class="clearfix" method="POST" action="{{ url('register') }}">
                            {!! csrf_field() !!}
                            <div class="form-group {{ $errors->has('new_account_type') ? ' has-error' : '' }}">
                                <label for="new-account-type">*I am a:</label>
                                <label class="radio-inline">
                                  <input type="radio" id="new-account-student" name="new_account_type" value="student" @if( old('new_account_type') == 'student') checked="checked" @endif> Student
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" id="new-account-lecturer" name="new_account_type" value="lecturer" @if( old('new_account_type') == 'lecturer') checked="checked" @endif> Lecturer
                                </label>
                                @if ($errors->has('new_account_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_account_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="new-account-name">Full Name</label>
                                <div class="form-inline">
                                    <div class="form-group" style="width: 10%">
                                        <label class="sr-only" for="new-account-prefix">Title</label>
                                        <input type="text" maxlength="255" class="form-control" style="width: 100%" id="new-account-prefix" placeholder="Title" name="prefix" value="{{ old('prefix') }}">
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error' : '' }}" style="width: 26%">
                                        <label class="sr-only" for="new-account-first-name">*First Name</label>
                                        <input type="text" maxlength="255" class="form-control" style="width: 100%" id="new-account-first-name" placeholder="*First" name="first_name" value="{{ old('first_name') }}">
                                    </div>
                                    <div class="form-group" style="width: 26%">
                                        <label class="sr-only" for="new-account-middle-name">Middle Name</label>
                                        <input type="text" maxlength="255" class="form-control" style="width: 100%" id="new-account-middle-name" placeholder="Middle" name="middle_name" value="{{ old('middle_name') }}">
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('last_name') ? ' has-error' : '' }}" style="width: 26%">
                                        <label class="sr-only" for="new-account-last-name">*Last Name</label>
                                        <input type="text" maxlength="255" class="form-control" style="width: 100%" id="new-account-last-name" placeholder="*Last" name="last_name" value="{{ old('last_name') }}">
                                    </div>
                                    <div class="form-group" style="width: 9%">
                                        <label class="sr-only" for="new-account-suffix">Suffix</label>
                                        <input type="text" maxlength="255" class="form-control" style="width: 100%" id="new-account-suffix" placeholder="Suffix" name="suffix" value="{{ old('suffix') }}">
                                    </div>
                                </div>
                                @if ($errors->has('first_name') || $errors->has('last_name'))
                                    <div class="has-error">
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->has('first_name') ? $errors->first('first_name') : '' }}
                                                {{ $errors->has('last_name') ? $errors->first('last_name') : '' }}
                                            </strong>                                                
                                        </span>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('department_id') ? ' has-error' : '' }}">
                                <label for="new-account-department">*Department</label>
                                <select name="department_id" id="new-account-department"><option value="1">A</option></select>
                                 <!-- Form::select('department_id', $departments->pluck('name', 'id'), null, ['placeholder' => 'Department', 'value' => old('department_id'), 'id' => 'new-account-department']) -->
                                
                                @if ($errors->has('department_id'))
                                    <span class="fa fa-times form-control-feedback" aria-hidden="true"></span>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('registration_number') ? ' has-error' : '' }}">
                                <label for="new-account-registration-number">*Registration Number</label>
                                <div class="input-group">
                                  <span class="input-group-addon">GOU/</span>
                                  <input type="text" class="form-control" id="new-account-registration-number" placeholder="Reg. No." name="registration_number" value="{{ old('registration_number') }}" data-mask="00/0999">
                                </div>
                                @if ($errors->has('registration_number'))
                                    <span class="fa fa-times form-control-feedback" aria-hidden="true"></span>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('registration_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="new-account-email">*Email address</label>
                                <input type="email" maxlength="255" class="form-control" id="new-account-email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="fa fa-times form-control-feedback" aria-hidden="true"></span>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="new-account-password">*Password</label>
                                <input type="password" class="form-control" id="new-account-password" placeholder="Password" name="password" value="{{ old('password') }}">
                                @if ($errors->has('password'))
                                    <span class="fa fa-times form-control-feedback" aria-hidden="true"></span>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="new-account-repeat-password">*Repeat Password</label>
                                <input type="password" class="form-control" id="new-account-repeat-password" placeholder="Repeat Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                            </div>
                            <div class="{{ $errors->has('terms_and_conditions') ? 'has-error' : '' }}">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" {{ old('terms_and_conditions') ? 'checked="checked"' : '' }} name="terms_and_conditions">*I have read and understand the <a href="#">Terms &amp; Conditions</a>.
                                    </label>
                                </div>
                                @if ($errors->has('terms_and_conditions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('terms_and_conditions') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn pull-right">Create New Account</button>
                        </form>
                    </section><!-- /#account-block -->
                </div><!-- /.col-md-10 -->
            </div><!-- /#page-main -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection

@section('scripts')

    @parent

    <script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.form-validator.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var $department = $("#new-account-department").selectize({
                options: JSON.parse('{!! $departments->toJson() !!}'),
                labelField: 'name',
                valueField: 'id',
                searchField: ['name'],
                sortField: 'name',
            });
            var department = $department[0].selectize;
            department.addOption({
                id: 0,
                name: '- Select your department -'
            });
            department.refreshOptions(false);
            department.addItem(0);
        });
    </script>

@endsection