@extends('layout') 
@section('content')

<div class="container mt-5">
	<div class="row mb-5">
		<a href="{{route('contacts.create')}}" class="btn btn-success">Create </a>
	</div>
	<div class="row">
	<div class="col-md-12">

	    <div class="table-responsive">
        	<table class="table table-bordered table-condensed table-striped">
            	<thead>

        	        <th>ID</th>
                	<th>NAME</th>
                	<th>EMAIL</th>
                	<th>PHONE</th>
                	<th>ACTION</th>
	         </thead>

            	<tbody>
                @foreach($data as $row)
                <tr>

                    <td>{{$row->id }}</td>
                    <td>{{$row->name }}</td>
                    <td>{{$row->email }}</td>
                    <td>{{$row->phone }}</td>

                    <td>
                        <a href="{{ route('contacts.edit', $row->id)}}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('contacts.destroy', $row->id)}}" method="post">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

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
