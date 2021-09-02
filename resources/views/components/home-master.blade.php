<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>OSCA</title>

    <!-- Custom fonts for this temSplate -->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <div class="container px-5">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="../assets/img/logos.png" height="35" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-md-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Admission</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="{{route('citizen/application')}}">Register</a></li>
                                <li><a class="dropdown-item" href="/application">Registration Status</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link btn btn-sm btn-danger text-white" data-toggle="modal" data-target="#exampleModal" href="#">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header>
            <div class="container">
                @yield('content')
            </div>
        </header>
    </main>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title" id="exampleModalLabel">LOG IN</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('citizen/login') }}">
                    @csrf
                <div class="form-group">
                  <label for="citizen_id" class="col-form-label">Citizen ID</label>
                  <input type="text" class="form-control" id="citizen_id" name="citizen_id">
                </div>

                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn btn-secondary btn-sm">LOG IN</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    {{-- <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script> --}}

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>

    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>
