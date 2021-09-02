@extends('components.admin-master')
@section('title')

@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h5 class="m-0 font-weight-bold text-primary mt-3 text-uppercase text-uppercase text-center">UPDATE Account
                </h5>

            <div class="card shadow mb-4 mt-4">

                <div class="card-body">

                    <form action="{{route('admin/user/info/update',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <h6 class="m-0 font-weight-bold text-primary mt-3 mb-4 text-uppercase text-uppercase">
                            User Information</h6>

                        <div class="form-row">
                            <label for="name">{{ __('Name') }}</label>

                            <input id="name" type="text"
                                class="form-control rounded-1 btn-sm text-uppercase @error('name') is-invalid @enderror"
                                name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>


                        <div class="form-row">
                            <label for="email">{{ __('E-Mail Address') }}</label>


                            <input id="email" type="email"
                                class="form-control rounded-1 btn-sm @error('email') is-invalid @enderror" name="email"
                                value="{{ $user->email}}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>


                        {{-- end --}}


                        <div class="form-row">


                            <label for="birth_date">Birth Date</label>
                            <input type="date" class="form-control rounded-1 btn-sm text-uppercase" name="birth_date"
                                id="birth_date" placeholder="REYES" value="{{$user->birth_date}}">



                        </div>

                        <div class="form-row ">

                            <label for="birth_place">Birth Place</label>
                            <input type="text" class="form-control rounded-1 btn-sm text-uppercase" name="birth_place"
                                id="birth_place" placeholder="PROVENCE" value="{{$user->birth_place}}">

                        </div>
                        {{-- end --}}


                        <div class="form-row">


                            <label for="address">Address</label>
                            <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="address"
                                name="address" placeholder="(St,Brgy,City,Province,Zip Code)" value="{{$user->address}}">


                        </div>

                        {{-- end --}}


                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="sex">Sex</label>
                                <select class="custom-select text-uppercase" id="sex" name="sex">
                                    <option selected>{{$user->sex}}</option>
                                    <option value="MALE">Male</option>
                                    <option value="FEMALE">Female</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="civil_status">Civil Status</label>
                                <select class="custom-select text-uppercase " id="civil_status" name="civil_status">
                                    <option selected>{{$user->civil_status}}</option>
                                    <option value="SINGLE">SINGLE</option>
                                    <option value="MARRIED">MARRIED</option>
                                    <option value="SEPARATED">SEPARATED</option>
                                    <option value="ANNULLED">ANNULLED</option>
                                    <option value="WIDOW/WIDOWER">WIDOW/WIDOWER</option>
                                </select>
                            </div>

                        </div>


                        <div class="form-row">
                            <label for="user_type">{{ __('User Type') }}</label>


                            <select class="custom-select text-uppercase btn-sm" id="user_type" name="user_type">
                                <option selected>{{$user->user_type}}</option>
                                <option value="Admin">Admin</option>
                                <option value="Officer">Officer</option>

                            </select>

                        </div>



                        <div class="form-row">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control rounded-1 btn-sm  @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>


                        <div class="form-row">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-control rounded-1 btn-sm"
                                name="password_confirmation" required autocomplete="new-password">

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
