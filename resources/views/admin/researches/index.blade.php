@extends('layout') 
@section('content')

<div class="container-fluid mt-5">
	<div class="row mt-5">
	<div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                Researches
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 py-3">
                            <form action="{{route('researches.index')}}" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search_key_word" value="{{request()->search_key_word}}" placeholder="Search for researches" required>
                                    <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="d-flex flex-row-reverse">
                                <a href="{{route('researches.create')}}" class="btn btn-success mx-1">Create </a>
                                <a href="{{route('researches.index')}}" class="btn btn-primary mx-1">Refresh </a>
                            </div>
                        </div>
                    </div>
                </div>
                
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
                        <form action="{{route('researches.index')}}" method="get">
                            <tr>
                                <td><input type="text" class="form-control" name="research_id" placeholder="Enter data" value="{{request()->research_id}}"></td>
                                <td><input type="text" class="form-control" name="name_en" placeholder="Enter data" value="{{request()->name_en}}"></td>
                                <td><input type="text" class="form-control" name="name_ar" placeholder="Enter data" value="{{request()->name_ar}}"></td>
                                <td><input type="text" class="form-control" name="email" placeholder="Enter data" value="{{request()->email}}"></td>
                                <td><input type="text" class="form-control" name="phone" placeholder="Enter data" value="{{request()->phone}}"></td>
                                <td><input type="text" class="form-control" name="academic_number" placeholder="Enter data" value="{{request()->academic_number}}"></td>
                                <td><input type="text" class="form-control" name="job_title" placeholder="Enter data" value="{{request()->job_title}}"></td>
                                <td><input type="text" class="form-control" name="major" placeholder="Enter data" value="{{request()->major}}"></td>
                                <td><input type="text" class="form-control" name="speciality" placeholder="Enter data" value="{{request()->speciality}}"></td>
                                <td><input type="text" class="form-control" name="dob" placeholder="Enter data" value="{{request()->dob}}"></td>
                                <td><input type="text" class="form-control" name="country" placeholder="Enter data" value="{{request()->country}}"></td>
                                <td><input type="text" class="form-control" name="city" placeholder="Enter data" value="{{request()->city}}"></td>
                                <td><input type="text" class="form-control" name="nationality" placeholder="Enter data" value="{{request()->nationality}}"></td>
                                <td><input type="text" class="form-control" name="institution" placeholder="Enter data" value="{{request()->institution}}"></td>
                                <td><button type="submit" class="btn btn-outline-primary btn-block">Filter</button></td>
                            </tr>
                        </form>
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
                                    <a href="{{ route('researches.edit', $row->id)}}" class="btn btn-primary mx-1">Edit</a>
        
                                    <form action="{{ route('researches.destroy', $row->id)}}" method="post">
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
	    
    </div>
	</div>
    <div>
    </div>
</div>
</div>
@endsection
