@extends('components.admin-master')
@section('title')

@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5 class="m-0 font-weight-bold text-primary mt-3 text-uppercase text-uppercase text-center">Application
                Form | Update</h5>

            <div class="card shadow mb-4 mt-5">

                <div class="card-body">

                    <form action="{{ route('admin.update', $citizens->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf

                        <h6 class="m-0 font-weight-bold text-primary mt-3 mb-4 text-uppercase text-uppercase">
                            Personal
                            Information</h6>




                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select class="custom-select text-uppercase " id="status" name="status">
                                    <option value="Active">Approve</option>
                                    <option value="Decease">Decease</option>
                                    <option value="Decline">Decline</option>


                                </select>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group   col-md-6">
                                <label for="citizen_id">Citizens ID</label>
                                <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="citizen_id"
                                    name="citizen_id" placeholder="2020-8238274" value="{{ $citizens->citizen_id }}">
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="last_name"
                                    name="last_name" placeholder="DELA CRUZ" value="{{ $citizens->last_name }}">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="first_name"
                                    name="first_name" placeholder="JUAN" value="{{ $citizens->first_name }}">
                            </div>

                        </div>
                        {{-- end --}}
                        <div class="form-row">


                            <div class="form-group col-md-6">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="middle_name"
                                    name="middle_name" placeholder="REYES" value="{{ $citizens->middle_name }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="suffix">Suffix</label>
                                <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="suffix"
                                    name="suffix" placeholder="E.G. JR., III" value="{{ $citizens->suffix }}">
                            </div>

                        </div>

                        {{-- end --}}


                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="birth_date">Birth Date</label>
                                <input type="date" class="form-control rounded-1 btn-sm text-uppercase" name="birth_date"
                                    id="birth_date" placeholder="REYES" value="{{ $citizens->birth_date }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="birth_place">Birth Place</label>
                                <input type="text" class="form-control rounded-1 btn-sm text-uppercase" name="birth_place"
                                    id="birth_place" placeholder="PROVENCE" value="{{ $citizens->birth_place }}">
                            </div>

                        </div>

                        {{-- end --}}


                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="address"
                                    name="address" placeholder="(St,Brgy,City,Province,Zip Code)"
                                    value="{{ $citizens->address }}">
                            </div>

                        </div>

                        {{-- end --}}


                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="sex">Sex</label>
                                <select class="custom-select text-uppercase" id="sex" name="sex">
                                    <option selected>{{ $citizens->sex }}</option>
                                    <option value="MALE">Male</option>
                                    <option value="FEMALE">Female</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="civil_status">Civil Status</label>
                                <select class="custom-select text-uppercase " id="civil_status" name="civil_status">
                                    <option selected>{{ $citizens->civil_status }}</option>
                                    <option value="SINGLE">SINGLE</option>
                                    <option value="MARRIED">MARRIED</option>
                                    <option value="SEPARATED">SEPARATED</option>
                                    <option value="ANNULLED">ANNULLED</option>
                                    <option value="WIDOW/WIDOWER">WIDOW/WIDOWER</option>
                                </select>
                            </div>

                        </div>
                        {{-- end --}}


                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control rounded-1 btn-sm text-uppercase" id="email"
                                    name="email" placeholder="USERNAME@DOMAIN.COM" value="{{ $citizens->email }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="contact_number">Contact Number</label>
                                <input type="number" class="form-control rounded-1 btn-sm text-uppercase"
                                    name="Contact Number" id="contact_number" placeholder="09XXXXXXXXX"
                                    value="{{ $citizens->contact_number }}">
                            </div>

                        </div>

                        {{-- end --}}



                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="ips">Are you a:</label>
                                <select class="custom-select text-uppercase" id="ips" name="ips">
                                    <option selected>{{ $citizens->ips }}</option>
                                    <option value="Pensioner">Pensioner</option>
                                    <option value="Supported">Supported</option>
                                    <option value="Indigent">Indigent</option>

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="religion">Religion</label>
                                <select class="custom-select text-uppercase " id="religion" name="religion">
                                    <option value="NONE"> {{ $citizens->religion }}</option>
                                    <option value="NONE">NO RELIGION</option>
                                    <option value="Ang Dating Daan">Ang Dating Daan</option>
                                    <option value="Atheists (did not identify religion)">Atheists (did not identify
                                        religion)</option>
                                    <option value="Buddhists">Buddhists</option>
                                    <option value="Church of Jesus Christ and the Latter Day Saints">Church of Jesus
                                        Christ and the Latter Day Saints</option>
                                    <option value="El Shaddai">El Shaddai</option>
                                    <option value="Iglesia ni Cristo (Church of Christ)">Iglesia ni Cristo (Church
                                        of Christ)</option>
                                    <option value="Jehovah's Witnesses">Jehovah's Witnesses</option>
                                    <option value="Muslim/Islamic">Muslim/Islamic</option>
                                    <option value="Protestants">Protestants</option>
                                    <option value="Roman Catholic">Roman Catholic</option>
                                    <option value="Seventh-Day Adventists">Seventh-Day Adventists</option>
                                    <option value="United Church of Christ in the Philippines">United Church of
                                        Christ in the Philippines</option>
                                </select>
                            </div>

                        </div>

                        {{-- end --}}

                        <div class="row">
                            <div class="col-md-6">

                                <h6 class="m-0 font-weight-bold text-primary mt-5 mb-5 text-uppercase">
                                    Identification
                                    Number</h6>


                                <div class="form-group col-md-12">
                                    <label for="GSIS">GSIS</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="GSIS"
                                        name="GSIS" value="{{ $citizens->GSIS }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="SSS">SSS</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="SSS"
                                        name="SSS" value="{{ $citizens->SSS }}">
                                </div>

                                {{-- end --}}



                                <div class="form-group col-md-12">
                                    <label for="TIN">TIN</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="TIN"
                                        name="TIN" value="{{ $citizens->TIN }}">
                                </div>

                                <div class="form-group col-md-12" small>
                                    <label for="PHILHEALTH">PHILHEALTH</label>
                                    <input type="text" class="form-control rounded-1 text-uppercase" id="PHILHEALTH"
                                        name="PHILHEALTH" value="{{ $citizens->PHILHEALTH }}">
                                </div>

                                {{-- end --}}
                            </div>


                            <div class="col-md-6">
                                <h6 class="m-0 font-weight-bold text-primary mt-5 mb-5  text-uppercase">In Case Of
                                    Emergency Please
                                    Notify</h6>

                                <div class="form-group col-md-12">
                                    <label for="emergency_person">Emergency Person</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase"
                                        name="emergency_person" id="emergency_person"
                                        value="{{ old('') ?? $citizens->emergency_person }}">
                                </div>

                                <div class="form-group col-md-12" small>
                                    <label for="emergency_number">Emergency Number</label>
                                    <input type="number" class="form-control rounded-1 text-uppercase"
                                        name="emergency_number" id="emergency_number"
                                        value="{{ old('') ?? $citizens->emergency_number }}">
                                </div>

                                {{-- end --}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('storage/' . $citizens->birth_certificate_image) }}" alt=""
                                    class="img-thumbnail">

                            </div>
                            <div class="col-md-12">
                                <img src="{{ asset('storage/' . $citizens->citizen_id_image) }}" alt=""
                                    class="img-thumbnail">

                            </div>
                        </div>

                        <div class="form-group mt-3 d-flex flex-column">
                            <label class="mr-2">Birth Certificate</label>
                            <input type="file" name="birth_certificate_image">
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-group mt-3 d-flex flex-column">
                            <label class="mr-2">Citizen ID</label>
                            <input type="file" name="citizen_id_image">
                            <div class="text-danger"></div>
                        </div>



                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-5">Approve</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
