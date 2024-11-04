<head>
    <meta charset="utf-8">
    <title>Paud Terpadu Tunas EduPal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Navbar Start -->
<!-- <div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 40px;">

            <img class="img-fluid rounded mb-5 mb-lg-0" src="img/logo.png" style="width:100px; height:auto;"></i>
            <span class="text-primary">Tunas EduPal</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="class.html" class="nav-item nav-link">Classes</a>
                <a href="gallery.html" class="nav-item nav-link">Gallery</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="single.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary px-4">Login</a>
        </div>
    </nav>
</div> -->
<!-- Navbar End -->


    <!-- Header Start -->

@extends('layouts.frontend.header',[
    'title' => 'Home',
])
@section('content')

    <!-- <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Our Classes</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Our Classes</p>
            </div>
        </div>
    </div> -->
    <!-- Header End -->


   <!-- Class Start -->
   <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Popular Classes</span></p>
            <h1 class="mb-4">Classes</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/class-1.jpg" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">Grow Class</h4>
                        <p class="card-text">Deskripsi Kegiatan</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                            <div class="col-6 py-1">0 - 3 Years</div>
                        </div>
                        <!-- <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                            <div class="col-6 py-1">40 Seats</div>
                        </div> -->
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                            <div class="col-6 py-1">07:00 - 09:00</div>
                        </div>
                    </div>
                    <!-- <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a> -->
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/class-2.jpg" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">Creative Class</h4>
                        <p class="card-text">Deskripsi Kegiatan</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                            <div class="col-6 py-1">3 - 6 Years</div>
                        </div>
                        <!-- <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                            <div class="col-6 py-1">40 Seats</div>
                        </div> -->
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                            <div class="col-6 py-1">07:00 - 09:30</div>
                        </div>
                    </div>
                    <!-- <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a> -->
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/class-3.jpg" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">Class Umum</h4>
                        <p class="card-text">Deskripsi Kegiatan</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                            <div class="col-6 py-1">0 - 6 Years</div>
                        </div>

                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                            <div class="col-6 py-1">08:00 - 10:00</div>
                        </div>
                    </div>
                    <!-- <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Class End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>