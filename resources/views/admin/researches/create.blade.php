@extends('layout')

@section('content')
{!! F::open(['action' =>'App\Http\Controllers\ResearchController@store', 'method' => 'POST'])!!}
    
    <div class="col-md-6">
        
			<div class="form-group required">
				{!! F::label("Name En") !!}
				{!! F::text("name_en", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Name Ar") !!}
				{!! F::text("name_ar", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			<div class="form-group required">
				{!! F::label("Email") !!}
				{!! F::text("email", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			<div class="form-group required">
				{!! F::label("Phone") !!}
				{!! F::text("phone", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			<div class="form-group required">
				{!! F::label("Academic Number") !!}
				{!! F::text("academic_number", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Job Title") !!}
				{!! F::text("job_title", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Major") !!}
				{!! F::text("major", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Speciality") !!}
				{!! F::text("speciality", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Date Of Birth") !!}
				{!! F::text("dob", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Country") !!}
				{!! F::text("country", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("City") !!}
				{!! F::text("city", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Nationality") !!}
				{!! F::text("nationality", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Institution") !!}
				{!! F::text("institution", null ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
   
        <div class="well well-sm clearfix">
            <button class="btn btn-success pull-right" title="Save" type="submit">Create</button>
        </div>
    </div>
 
{!! Form::close() !!}
@endsection
