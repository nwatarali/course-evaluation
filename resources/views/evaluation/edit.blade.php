@extends('layouts.master')

@section('title','New Evaluation')
@section('breadcrumb')
<div class="container">
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}">Home</a></li>
		<li class="active"> <a href="{{ url('home') }}">New Evaluation</a></li>
	</ol>
</div>
@endsection


@section('content')
{{ $student_id }}
@endsection