@extends('components.admin-master')

@section('title')
    DashBoard
@endsection

@section('content')


    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-header border-0">
                    <div class="d-sm-flex align-items-center justify-content-end">
                        <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
                            data-target="#create-subsidy"><i class="fas fa-plus fa-md text-white-50 mr-2"></i>ADD SUBSIDY TYPE</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($subsidyType as $data)

                                    <tr>
                                        <td style="width:75px;">{{ $data->id }}</td>
                                        <td>{{ $data->type }}</td>

                                        <td style="width:95px;">
                                            <div class="d-flex justify-content-center">

                                                <div>
                                                    <form action="{{route('admin/subsidyType/delete',$data->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="far fa-trash-alt"></i></button>
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
        </div>
    </div>




    <!-- Logout Modal-->
    <div class="modal fade" id="create-subsidy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title" id="exampleModalLabel">ADD SUBSIDY TYPE</label>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('admin/subsidyType/register')}}" method="POST" enctype="multipart/form-data">

                        @csrf


                        <div class="form-row">


                            <div class="form-group col-md-12">
                                <label for="type">Subsidy Type</label>
                                <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="type"
                                    name="type" placeholder="">
                            </div>

                        </div>

                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
