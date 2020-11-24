@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="well">
            <h2 class="text-center text-success"></h2>
            {{ Form::open([ 'method'=>'post', 'class'=>'form-horizontal']) }}
            <div class="form-group">
                <label for="" class="control-label col-md-3"> Student Name</label>
                <input type="text" name="student_name" class='col-md-9 form-control'>
                <span class="text-danger">{{ $errors->has('student_name') ? $errors->first('student_name') : ' '}}</span>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-md-3">Course Name</label>
                <input type="text" name="course_name" class='col-md-9 form-control'>
                <span class="text-danger">{{ $errors->has('course_name') ? $errors->first('course_name') : ' '}}</span>
            </div>
            
            <input type="submit" name="btn" class='btn btn-lg btn-info' value="add student info">
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection