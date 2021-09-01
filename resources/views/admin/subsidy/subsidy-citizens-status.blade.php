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

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Citizen ID</th>
                            <th>Fullname</th>
                            <th>Subsidy</th>
                            <th>Status</th>
                            <th>Recieve Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach ($subsidies as $data)

                            <tr>
                                <td>{{ $data->citizens->citizen_id }}</td>
                                <td>{{ $data->citizens->last_name }} {{ $data->citizens->first_name }}</td>
                                <td>{{ $data->subsidy->subsidy_type }}</td>
                                <td>{{ $data->status_receive }}</td>
                                <td>{{ date('j F Y', strtotime($data->date_receive)) }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">

                                        <form action="{{ route('admin/SubsidyStatus/AssignedRelease', $data->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf
                                            <input type="text" class="form-control rounded-1 btn-sm text-uppercase"
                                                id="status_receive" hidden name="status_receive" placeholder="2020-8238274"
                                                value="Claimed">

                                                <input type="text" class="form-control rounded-1 btn-sm text-uppercase"
                                                id="date_receive" hidden  name="date_receive"
                                                value="{{$todayDate}}">

                                            <div class="mr-1">
                                                <button type="submit" class="btn
                                                btn-info btn-sm"><i
                                                        class="fas fa-edit"></i></button>
                                            </div>

                                        </form>

                                        <div>
                                            <form action="" method="POST">
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
@endsection

@section('scripts')

    <script>
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;

        var today = year + "-" + month + "-" + day;

        document.getElementById("startdateId").value = today;
    </script>

@endsection
