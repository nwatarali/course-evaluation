@extends('layouts.master')

@section('title', 'New Evaluation')
@section('breadcrumb')
<div class="container">
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}">Home</a></li>
		<li class="active"> <a href="{{ url('home') }}">New Evaluation</a></li>
	</ol>
</div>
@endsection
@section('content')

<center>
	
	<h2>Each Student is required to evaluate the Course by completing this form. The primary purpose of this assessment shall be to promote the professional development of the lecturer. Please use the following guide to rate the Lecturer's performance in each of the areas.</h2><br>
<h3>0 = Not applicable<br>
1 = Unacceptable<br>
2 = Needs Improvement<br>
3 = Satisfactory<br>
4 = Good/Accomplishes tasks diligently and well<br>
5 = Excellent/Accomplishes all tasks at a high level<br>

You can also add comments if necessary!</h3>
<br>
<br>

         <div class="row" style="font-size: 20px;">
         	<div class="col-md-8 col-md-offset-2">
         	{!! Form::open(array('route' => 'question1.store',))!!}
         	{{Form::select('lecturer', array('Prof GAM Ikekeonwu' => 'Prof GAM Ikekeonwu', 'Prof F.S Bakpo' => 'Prof F.S Bakpo'))}}


         	{{Form::select('course', array(
            'Prof GAM Ikekeonwu' => array('CSC 458' => 'CSC 458'),
            'Prof F.S Bakpo' => array('CSC 484' => 'CSC 484'),
            ))}}

            {{Form::checkbox('department', 'Computer Science', 'true')}}
            <br>
            <br>


            {{Form::label('grade','My Instructor has knowledge of subject matter')}}
            
            
            {{form::selectRange('grade', 0, 5,  array('class' => 'form-control'))}}
            <br>
            {{form::submit('Submit', array('class'=> 'btn btn-success'))}}
			{!! Form::close() !!}
         	
         	</div>
         </div>


@endsection
