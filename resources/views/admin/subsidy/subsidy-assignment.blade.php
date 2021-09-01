@extends('components.admin-master')

@section('title')
    DashBoard
@endsection

@section('content')


    <form action="{{route('admin.subsidy.assignedCitizenSubsidies')}}" method="POST" enctype="multipart/form-data" class="mb-4">
        @csrf

        <div class="row justify-content-center">

            <div class="col-md-4">

                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="form-row">

                            <div class="m-3">
                                <div class="form-check-inline">

                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" name="supported" value="Supported">Supported
                                    </label>
                                  </div>
                                  <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" value="Indigent">Indigent
                                    </label>
                                  </div>
                                  <div class="form-check-inline">
                                    <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" value="Pensioner">Pensioner
                                    </label>
                                  </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="subsidy_type">Subsidy Type</label>
                                <select class="custom-select text-uppercase " id="subsidy_type" name="subsidy_type" required>
                                    @foreach ($subsidyType as $data)
                                        <option value="{{ $data->type }}">{{ $data->type }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-md-12">
                                <label for="subsidy_date">Date to be Implemented</label>
                                <input type="date" class="form-control rounded-1 btn-sm text-uppercase" required
                                    id="subsidy_date" name="subsidy_date" placeholder="REYES" value="{{ old('date') }}">
                            </div>



                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="subsidy_description">Description</label>
                                <textarea class="form-control" placeholder="Leave a Description" id="subsidy_description" name="subsidy_description"
                                    style="height: 100px"></textarea>

                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Citizen ID</th>
                                        <th>Fullname</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    @foreach ($citizens as $citizen)

                                        <tr>

                                            <td>{{ $citizen->citizen_id }}</td>
                                            <td>{{ $citizen->last_name }} {{ $citizen->first_name }}</td>

                                            <td>{{ $citizen->ips }}</td>


                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <div class="mr-1">
                                                        <a href="{{ route('admin.edit', $citizen->id) }}"
                                                            class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                                                    </div>
                                                    <div>
                                                        <form action="{{ route('admin.destroy', $citizen->id) }}"
                                                            method="POST">
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
        <div class="form-group d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>

    </form>






@endsection

@section('scripts')

@endsection
