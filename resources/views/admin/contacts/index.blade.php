@extends('layout') 
@section('content')

<div class="container-fluid mt-5">
	<div class="row">
        <div class="col-sm-12">
            <a href="{{route('contacts.create')}}" class="btn btn-success">Create </a>
        </div>
	</div>
	<div class="row mt-5">
	<div class="col-sm-12">

	    <div class="table-responsive">
        	<table class="table table-bordered table-condensed table-striped">
            	<thead>

        	        <th>ID</th>
                	<th>Name En</th>
                	<th>Name Ar</th>
                    <th>Email</th>
                	<th>Phone</th>
                    <th>academic_number</th>
                    <th>job_title</th>
                    <th>major</th>
                    <th>speciality</th>
                    <th>dob</th>
                    <th>country</th>
                    <th>city</th>
                    <th>nationality</th>
                    <th>institution</th>
                	<th>ACTION</th>
	         </thead>

            	<tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{$row->id }}</td>
                    <td>{{$row->name_en }}</td>
                    <td>{{$row->name_ar }}</td>
                    <td>{{$row->email }}</td>
                    <td>{{$row->phone }}</td>
                    <td>{{$row->academic_number }}</td>
                    <td>{{$row->job_title }}</td>
                    <td>{{$row->major }}</td>
                    <td>{{$row->speciality }}</td>
                    <td>{{$row->dob }}</td>
                    <td>{{$row->country }}</td>
                    <td>{{$row->city }}</td>
                    <td>{{$row->nationality }}</td>
                    <td>{{$row->institution }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('contacts.edit', $row->id)}}" class="btn btn-primary mx-1">Edit</a>

                            <form action="{{ route('contacts.destroy', $row->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                        

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
	</div>
    <div>
        <?php echo $data->render(); ?>
    </div>
</div>
</div>
@endsection
