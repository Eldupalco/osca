@extends('components.admin-master')

@section('title')
    DashBoard
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Citizen ID</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($citizens as $citizen)

                            <tr>
                                <td>{{$citizen->citizen_id}}</td>
                                <td>{{$citizen->last_name}} {{$citizen->first_name}}</td>
                                <td>{{$citizen->email}}</td>
                                <td>{{Str::limit($citizen->address,'25','....')}}</td>
                                <td>{{$citizen->status}}</td>
                                <td>{{$citizen->created_at->diffForHumans()}}</td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                    <div>
                                        <a href="{{route('admin.edit',$citizen->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <form action="{{route('admin.destroy',$citizen->id)}}" method="POST">
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
