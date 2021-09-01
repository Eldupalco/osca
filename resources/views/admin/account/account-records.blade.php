@extends('components.admin-master')

@section('title')
    DashBoard
@endsection

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header border-0">
            <div class="d-sm-flex align-items-center justify-content-end">
                <a href="{{route('admin/user/form')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus fa-md text-white-50 mr-2"></i>Register Account</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>User Type</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach ($user as $data)

                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{Str::limit($data->address,'50','...')}}</td>
                                <td>{{$data->user_type}}</td>

                                <td>{{$data->created_at->diffForHumans()}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div class="mr-1">
                                            <a href="{{route('admin/user/info',$data->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div>
                                            <form action="{{route('admin/user/delete',$data->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')



@endsection
