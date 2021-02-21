@extends('layout')

@section('content')
    {!! F::open(['action' =>['App\Http\Controllers\ContactController@update',$data->id], 'method' => 'PUT'])!!}

    
        <div class="col-md-6">

            <div class="form-group required">
				{!! F::label("Name En") !!}
				{!! F::text("name_en", $data->name_en ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Name Ar") !!}
				{!! F::text("name_ar", $data->name_ar ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			<div class="form-group required">
				{!! F::label("Email") !!}
				{!! F::text("email", $data->email ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			<div class="form-group required">
				{!! F::label("Phone") !!}
				{!! F::text("phone", $data->phone ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

			<div class="form-group required">
				{!! F::label("Academic Number") !!}
				{!! F::text("academic_number", $data->academic_number ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Job Title") !!}
				{!! F::text("job_title", $data->job_title ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Major") !!}
				{!! F::text("major", $data->major ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Speciality") !!}
				{!! F::text("speciality", $data->speciality ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Date Of Birth") !!}
				{!! F::text("dob", $data->dob ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Country") !!}
				{!! F::text("country", $data->country ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("City") !!}
				{!! F::text("city", $data->city ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Nationality") !!}
				{!! F::text("nationality", $data->nationality ,["class"=>"form-control","required"=>"required"]) !!}
			</div>
			<div class="form-group required">
				{!! F::label("Institution") !!}
				{!! F::text("institution", $data->institution ,["class"=>"form-control","required"=>"required"]) !!}
			</div>

            <div class="well well-sm clearfix">
                <button class="btn btn-success pull-right" title="Save" type="submit">Update</button>
            </div>
        </div>
        
    {!! Form::close() !!}
@endsection
