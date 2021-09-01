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
                <a class="navbar-brand" href="index.html">
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
                                <li><a class="dropdown-item" href="/application">Register</a></li>
                                <li><a class="dropdown-item" href="/application">Registration Status</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link btn btn-sm btn-danger text-white" href="#">Log In</a></li>
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

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>
