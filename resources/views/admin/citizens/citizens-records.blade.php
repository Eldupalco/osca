@extends('components.admin-master')

@section('title')
    DashBoard
@endsection

@section('content')



    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-5">
        <div class="card-header border-0">
            <div class="d-sm-flex align-items-center justify-content-end">
                <a href="{{route('admin.applicationForm')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-plus fa-md text-white-50 mr-2"></i>Register Citizen</a>
            </div>
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
                                <td class="text-center">
                                     <div class="btn-success btn btn-sm w-100">
                                    {{$citizen->status}}
                                    </div>
                                </td>
                                <td>{{$citizen->created_at->diffForHumans()}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div class="mr-1">
                                            <a href="{{route('admin.edit',$citizen->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                                        </div>
                                        <div>
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
