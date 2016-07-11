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
    <div class="container">
        <!--MAIN Content-->
        <div id="page-main">
            <section id="right-sidebar">
                <header><h2>Evaluation Form</h2></header>
<form class="form-horizontal">

<select name="department_id" id="departments"></select>
<select name="lecturer_id" id="lecturers"></select>
 <!-- Form::select('department_id', $departments->pluck('name', 'id'), Auth::user()->person->department_id, ['id' => 'department'])
 
 Form::select('lecturer_id', array(), null, ['placeholder' => 'Select a department', 'id' => 'lecturers']) -->

<center>
	
	<h2>Each Student is required to evaluate the Course by completing this form. The primary purpose of this assessment shall be to promote the professional development of the lecturer. Please use the following guide to rate the Lecturer's performance in each of the areas.</h2><br>
	<h3>
		
0 = Not applicable<br>
1 = Unacceptable<br>
2 = Needs Improvement<br>
3 = Satisfactory<br>
4 = Good/Accomplishes tasks diligently and well<br>
5 = Excellent/Accomplishes all tasks at a high level<br>

You can also add comments if necessary!
	</h3>

</center>

<form action="{{ url('evaluations') }}">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 1">My Instructor has knowledge of subject matter</label>  
  <div class="col-md-4">
  <input id="Question 1" name="grade_received" type="text" placeholder="0 - 5" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 2">Shows relevance and appropriateness of course content</label>  
  <div class="col-md-4">
  <input id="Question 2" name="Question 2" type="text" placeholder="0 - 5" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 3">Provides or refers to appropriate source material</label>  
  <div class="col-md-4">
  <input id="Question 3" name="Question 3" type="text" placeholder="0 - 5" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 4">Is well prepared and presents lectures in a well organized manner</label>  
  <div class="col-md-4">
  <input id="Question 4" name="Question 4" type="text" placeholder="0 - 5" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 5">Expresses ideas clearly and audibly</label>  
  <div class="col-md-4">
  <input id="Question 5" name="Question 5" type="text" placeholder="0 - 5" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 6">Regular in lecture attendance</label>  
  <div class="col-md-4">
  <input id="Question 6" name="Question 6" type="text" placeholder="0 - 5" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 7">Encourages student's inquiry or class discussion</label>  
  <div class="col-md-4">
  <input id="Question 7" name="Question 7" type="text" placeholder="0 - 5" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 8">Open to suggestions from students</label>  
  <div class="col-md-4">
  <input id="Question 8" name="Question 8" type="text" placeholder="0 - 5" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 9">Puntual and does not shift classes</label>  
  <div class="col-md-4">
  <input id="Question 9" name="Question 9" type="text" placeholder="0 - 5" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Question 10">Exhibits enthusiasm and interest in student's academic progress </label>  
  <div class="col-md-4">
  <input id="Question 10" name="Question 10" type="text" placeholder="0 - 5" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comments">Comments</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="comments" name="comments" placeholder="Say something..."></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
            </section>
        </div><!-- /#page-main -->
        <!-- end MAIN Content -->
    </div><!-- /.container -->
@endsection

@section('scripts')
@parent

<script type="text/javascript">
	$(document).ready(function () {
		var xhr;
		var departments, $departments;
		var lecturers, $lecturers;

		$departments = $('#departments').selectize({
			options: JSON.parse('{!! $departments->toJson() !!}'),
            labelField: 'name',
            valueField: 'id',
            searchField: ['name'],
            sortField: 'name',
		    onChange: function(value) {
		        if (!value.length) return;
		        lecturers.disable();
		        lecturers.clearOptions();
		        lecturers.load(function(callback) {
		            xhr && xhr.abort();
		            xhr = $.ajax({
		                url: "{{ url('json/lecturers') }}",
				  		data: { department_id: value },
		                success: function(results) {
		                	if(results.length) {
			                    lecturers.enable();
			                    callback(results);
					            lecturers.addOption({
					                id: 0,
					                name: '- Select a lecturer -'
					            });
					            lecturers.refreshOptions(false);
					            lecturers.addItem(0);
					        }
		                }
		            })
		        });
		    }
		});

		$lecturers = $('#lecturers').selectize({
		    valueField: 'id',
		    labelField: 'name',
		    searchField: ['name']
		});

		lecturers  = $lecturers[0].selectize;
		departments = $departments[0].selectize;


        departments.addOption({
            id: 0,
            name: '- Select your department -'
        });
        departments.refreshOptions(false);
        departments.addItem(0);

		lecturers.disable();
	});
</script>
@endsection