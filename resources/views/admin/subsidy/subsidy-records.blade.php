@extends('components.admin-master')

@section('title')
    DashBoard
@endsection

@section('content')


    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="d-sm-flex align-items-center justify-content-end mb-3 mt-4">

                <a class="d-none d-sm-inline-block btn btn-sm btn-primary rounded-0 shadow-sm" data-toggle="modal"
                    data-target="#create-subsidy" href="{{ route('admin.subsidy.assignCitizenSubsidies') }}"><i
                        class="fas fa-plus-square fa-md text-white-50 mr-2"></i>Create
                    Subsidy</a>
            </div>

            <div class="card shadow mb-4">


                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Release Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($subsidy as $subsidies)

                                    <tr>
                                        <td>{{ $subsidies->id }}</td>
                                        <td >{{ $subsidies->subsidy_type }}</td>
                                        <td>{{ $subsidies->subsidy_description }}</td>
                                        <td>{{date('j F Y', strtotime($subsidies->subsidy_date))}}</td>
                                        {{-- <td>{{$subsidies->email}}</td>
                                <td>{{Str::limit($citizen->address,'25','....')}}</td> --}}

                                        <td style="width: 240px;">
                                            <div class="d-flex justify-content-center">
                                                <div class="">
                                                    <a href="{{ route('admin.subsidy.citizenSubsidiesStatus', $subsidies->id) }}"
                                                        class="btn btn-primary btn-sm rounded-0"><i class="fas fa-eye"></i>View</a>

                                                </div>
                                                <div class="">
                                                    <a href="" class="btn btn-success btn-sm rounded-0"><i
                                                            class="fas fa-edit"></i>Edit</a>

                                                </div>
                                                <div>
                                                    <form action="" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm rounded-0"><i
                                                                class="far fa-trash-alt"></i>Delete</button>
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
                    <h6 class="modal-title" id="exampleModalLabel">CREATE SUBSIDY</h6>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('admin.subsidy.assignedCitizenSubsidies') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        <label for="subsidy_type">Available for</label>
                        <div class="form-row">

                            <div class="form-group ml-3">

                                <div class="form-check-inline">

                                    <label class="form-check-label text-uppercase">
                                        <input type="checkbox" class="form-check-input text-uppercase" name="Supported"
                                            value="Supported">Supported
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label text-uppercase">
                                        <input type="checkbox" class="form-check-input text-uppercase" name="Indigent"
                                            value="Indigent">Indigent
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label text-uppercase">
                                        <input type="checkbox" class="form-check-input text-uppercase" name="Pensioner"
                                            value="Pensioner">Pensioner
                                    </label>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="subsidy_type">Subsidy Type</label>
                                <select class="custom-select text-uppercase " id="subsidy_type" name="subsidy_type"
                                    required>
                                    @foreach ($subsidyType as $data)
                                        <option value="{{ $data->type }}">{{ $data->type }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-md-12">
                                <label for="subsidy_date">Releasing Date</label>
                                <input type="date" class="form-control rounded-1 btn-sm text-uppercase" required
                                    id="subsidy_date" name="subsidy_date" placeholder="REYES" value="{{ old('date') }}">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="subsidy_description">Description</label>
                                <textarea class="form-control" placeholder="Leave a Description" id="subsidy_description"
                                    name="subsidy_description" style="height: 100px"></textarea>
                            </div>

                        </div>


                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
