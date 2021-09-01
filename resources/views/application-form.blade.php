<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>OSCA</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">
                    <img src="../assets/img/logos.png" height="35" class="d-inline-block align-top" alt="">
                </a>

            </div>
        </nav>

    </main>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">


            <div class="col-md-6">
                <h5 class="m-0 font-weight-bold text-primary mt-3 text-uppercase text-uppercase text-center">Application
                    Form</h5>

                <div class="card shadow mb-4 mt-4">

                    <div class="card-body">

                        <form>
                            <h6 class="m-0 font-weight-bold text-primary mt-3 mb-4 text-uppercase text-uppercase">
                                Personal
                                Information</h6>

                            <div class="form-row">


                                <div class="form-group required col-md-6">
                                    <label for="citizen_id">Citizens ID</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" required
                                        id="citizen_id" placeholder="2020-8238274" value="{{old('citizen_id')}}">
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" required
                                        id="lastname" placeholder="DELA CRUZ" value="{{old('lastname')}}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" required
                                        id="firstname" placeholder="JUAN" value="{{old('firstname')}}">
                                </div>

                            </div>
                            {{-- end --}}
                            <div class="form-row">


                                <div class="form-group col-md-6">
                                    <label for="middlename">Middle Name</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" required
                                        id="middlename" placeholder="REYES" value="{{old('middlename')}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="suffix">Suffix</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" id="suffix" required
                                        placeholder="E.G. JR., III" value="{{old('suffix')}}">
                                </div>

                            </div>

                            {{-- end --}}


                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="birth_date">Birth Date</label>
                                    <input type="date" class="form-control rounded-1 btn-sm text-uppercase" required
                                        id="birth_date" placeholder="REYES" value="{{old('birth_date')}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="birth_place">Birth Place</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" required
                                        id="birth_place" placeholder="PROVENCE" value="{{old('birth_place')}}">
                                </div>

                            </div>

                            {{-- end --}}


                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control rounded-1 btn-sm text-uppercase" required
                                        id="address" placeholder="(St,Brgy,City,Province,Zip Code)" value="{{old('address')}}">
                                </div>

                            </div>

                            {{-- end --}}


                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="sex">Sex</label>
                                    <select class="custom-select text-uppercase" id="sex" required>
                                        <option selected>--Select--</option>
                                        <option value="MALE">Male</option>
                                        <option value="FEMALE">Female</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="civil_status">Civil Status</label>
                                    <select class="custom-select text-uppercase " id="civil_status" required>
                                        <option selected>--Select--</option>
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
                                    <input type="email" class="form-control rounded-1 btn-sm text-uppercase" id="email" required
                                        placeholder="USERNAME@DOMAIN.COM" value="{{old('email')}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="number" class="form-control rounded-1 btn-sm text-uppercase" required
                                        id="contact_number" placeholder="09XXXXXXXXX" value="{{old('contact_number')}}">
                                </div>

                            </div>

                            {{-- end --}}



                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="ips">Are you a:</label>
                                    <select class="custom-select text-uppercase" id="ips" required>
                                        <option selected>--Select--</option>
                                        {{-- <option value="A+">A+</option>
                                        <option value="B+">B+</option>
                                        <option value="O+">O+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="A1+">A1+</option>
                                        <option value="A2+">A2+</option>
                                        <option value="A1B+">A1B+</option>
                                        <option value="A2B+">A2B+</option>
                                        <option value="A-">A-</option>
                                        <option value="B-">B-</option>
                                        <option value="O-">O-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="A1-">A1-</option>
                                        <option value="A2-">A2-</option>
                                        <option value="A1B">A1B-</option> --}}

                                        <option value="Pensioner">Pensioner</option>
                                        <option value="Supported">Supported</option>
                                        <option value="Indigent">Indigent</option>

                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="religion">Religion</label>
                                    <select class="custom-select text-uppercase " id="religion" required>
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
                                        <input type="text" class="form-control rounded-1 btn-sm text-uppercase"
                                            id="GSIS" value="{{old('GSIS')}}">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="SSS">SSS</label>
                                        <input type="text" class="form-control rounded-1 btn-sm text-uppercase"
                                            id="SSS" value="{{old('SSS')}}">
                                    </div>

                                    {{-- end --}}



                                    <div class="form-group col-md-12">
                                        <label for="TIN">TIN</label>
                                        <input type="text" class="form-control rounded-1 btn-sm text-uppercase"
                                            id="TIN" value="{{old('TIN')}}">
                                    </div>

                                    <div class="form-group col-md-12" small>
                                        <label for="PHILHEALTH">PHILHEALTH</label>
                                        <input type="text" class="form-control rounded-1 text-uppercase"
                                            id="PHILHEALTH" value="{{old('PHILHEALTH')}}">
                                    </div>

                                    {{-- end --}}
                                </div>


                                <div class="col-md-6">
                                    <h6 class="m-0 font-weight-bold text-primary mt-5 mb-5  text-uppercase">In Case Of
                                        Emergency Please
                                        Notify</h6>

                                    <div class="form-group col-md-12">
                                        <label for="emergency_person">Emergency Person</label>
                                        <input type="text" class="form-control rounded-1 btn-sm text-uppercase" required
                                            id="emergency_person"  value="{{old('emergency_person')}}">
                                    </div>

                                    <div class="form-group col-md-12" small>
                                        <label for="emergency_number">Emergency Number</label>
                                        <input type="number" class="form-control rounded-1 text-uppercase" required
                                            id="emergency_number" value="{{old('emergency_number')}}">
                                    </div>

                                    {{-- end --}}
                                </div>
                            </div>





                            <div class="form-group">

                                <p style="font-size: 10px;" class="mt-5">
                                    By submitting the data required in this Senior Citizen Online ID Application, You
                                    CONSENT to the collection, generation, use, processing, storage
                                    and retention of your personal information and sensitive personal information by the
                                    Office of the Senior Citizen's Affairs for the purpose(s)
                                    described in this document.
                                    <br>
                                    <br>
                                    PLEASE ensure that you have completely read and understood the Data Privacy Notice
                                    of this data processing system before submitting.
                                    You also authorized the Office to disclose your information to accredited or
                                    non-accredited parties.
                                </p>

                                <div class="form-check mt-5">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Agree
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer-->
    {{-- <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-center flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2021</div></div>

                </div>
            </div>
        </footer> --}}
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
