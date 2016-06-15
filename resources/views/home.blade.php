@extends('layouts.master')

@section('title', 'Dashboard')

@section('breadcrumb')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active"> <a href="{{ url('home') }}">Dashboard</a></li>
        <!-- <li class="active"> <a href="{{ url('evaluations/create') }}">New Evaluation</a></li> -->
    </ol>
</div>
@endsection

    @section('styles')
    <!-- Global Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/selectize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/vanillabox/vanillabox.css') }}" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

@endsection

@section('content')
    <div class="container">
        <!--MAIN Content-->
        <div id="page-main">
            <section id="right-sidebar">
                <header><h2>Dashboard</h2></header>
                <p>
                    You are logged in!
                    
                </p>
            </section>
        </div><!-- /#page-main -->
        <select class="selectpicker" style="width:300px;">
  <optgroup label="PROF. GAM IKEKEONWU">
    <option>CSC 458 - Queuing System</option>
  </optgroup>
  <optgroup label="PROF. F.S BAKPO">
    <option>CSC 484 - Artificial Intelligence</option>
  </optgroup>
</select>
<!-- Button -->
<form action="evaluations/create">
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</form>
        <!-- end MAIN Content -->
    </div><!-- /.container -->
@endsection
