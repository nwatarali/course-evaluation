@extends('layouts.master')

@section('title', 'Dashboard')

@section('breadcrumb')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active"> <a href="{{ url('home') }}">Dashboard</a></li>
    </ol>
</div>
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
                <br>
                <form action="{{ url('evaluation/create') }}">
                <button type="submit" id="slider-submit" class="btn btn-framed pull-right">Start Evaluation</button>
                </form>
            </section>
        </div><!-- /#page-main -->
        <!-- end MAIN Content -->
    </div><!-- /.container -->
@endsection
