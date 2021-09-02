@extends('components.citizen-master')

@section('title')
    DashBoard
@endsection

@section('content')



    <!-- DataTales Example -->
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card shadow mb-4 mt-5">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Subsidy</th>
                                    <th>Subsidy Description</th>
                                    <th>Status</th>
                                    <th>Date Release</th>
                                    <th>Date Receive</th>

                                </tr>
                            </thead>


                            <tbody>

                                @foreach ($subsidyStatus as $data)

                                    <tr>
                                        <td>{{$data->subsidy->subsidy_type}}</td>
                                        <td>{{$data->subsidy->subsidy_description}}</td>

                                        <td class="text-center">
                                             <div class="btn-success btn btn-sm w-100">
                                                {{$data->status_receive}}
                                            </div>
                                        </td>
                                        <td>{{$data->subsidy->subsidy_date}}</td>
                                        <td>{{$data->date_receive}}</td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')



@endsection
