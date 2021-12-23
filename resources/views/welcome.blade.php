<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RedPlanet &mdash; A Onepage Hotel HTML Bootstrap Website Template by Colorlib </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="../user/css/bootstrap.min.css">
    <link rel="stylesheet" href="../user/css/animate.css">
    <link rel="stylesheet" href="../user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../user/css/aos.css">
    <link rel="stylesheet" href="../user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../user/css/jquery.timepicker.css">
    <link rel="stylesheet" href="../user/css/fancybox.min.css">

    <link rel="stylesheet" href="../user/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../user/fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="../user/css/style.css">
</head>

<body data-spy="scroll" data-target="#templateux-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="templateux-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><span class="text-danger">Red</span>Planet</a>
            <div class="site-menu-toggle js-site-menu-toggle  ml-auto" data-aos="fade" data-toggle="collapse"
                data-target="#templateux-navbar-nav" aria-controls="templateux-navbar-nav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="collapse navbar-collapse" id="templateux-navbar-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="site-hero overlay" style="background-image: url(../user/images/hero_5.jpg)"
        data-stellar-background-ratio="0.5" id="section-home">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade-up">
                    <h1 class="heading">Pemakaman Umum Singosari</h1>
                </div>
            </div>
        </div>

        <a class="mouse smoothscroll" href="#next">
            <div class="mouse-icon">
                <span class="mouse-wheel"></span>
            </div>
        </a>
    </section>
    <!-- END section -->

    <section class="section bg-light pb-0">
        <div class="container">
            <div class="row check-availabilty" id="next">
                <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

                    <form class="form" method="GET" action="{{ url('/search') }}">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0 col-lg-9">
                                <div class="row">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label for="adults" class="font-weight-bold text-black">Cari TPU</label>
                                        <div class="field-icon-wrap">
                                            <input type="text" class="form-control" name="cari"
                                                placeholder="Cari Kode Makam .." value="{{ old('cari') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2 align-self-end">
                                <button type="submit" value="name"
                                    class="btn btn-primary btn-block text-white">Cek</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="section contact-section" id="section-contact">
        <div class="container">
            <div class="row">
                @foreach ($slot as $s)
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TPU {{ $s->tpu }}</h5>
                            <p class="card-text">{{ $s->kodemakam }}</p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#Ketersediaan-{{ $s->id }}">Cek</a>
                            <a href="https://www.google.com/maps/place/{{ $s->s }}+{{ $s->e }}/'@'{{ $s->longitude }},{{ $s->latitude }}"
                                class="btn btn-info">Lokasi</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                    <center> {{ $slot->links() }}</center>
        </div>

    </section>

    <footer class="section footer-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3 mb-5">
                    <ul class="list-unstyled link">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Rooms</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5">
                    <ul class="list-unstyled link">
                        <li><a href="#">The Rooms &amp; Suites</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Restaurant</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5 pr-md-5 contact-info">
                    <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
                    <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span>
                        <span> 198 West 21th Street, <br> Suite 721 New York NY 10016</span></p>
                    <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span>
                        <span> (+1) 435 3533</span></p>
                    <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span>
                        <span> info@yourdomain.com</span></p>
                </div>
                <div class="col-md-3 mb-5">
                    <p>Sign up for our newsletter</p>
                    <form action="#" class="footer-newsletter">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email...">
                            <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5">
                <p class="col-md-8 text-left">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | This template is made with <i class="fa fa-heart text-primary"
                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib</a>.Downloaded from <a href="https://themeslab.org/"
                        target="_blank">Themeslab</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>

                <p class="col-md-4 text-right social">
                    <a href="#"><span class="fa fa-tripadvisor"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-vimeo"></span></a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Modal Update Slot -->
@foreach ($ketersediaan as $ks)
<div class="modal fade" id="Ketersediaan-{{ $ks->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ambil Slot TPU {{ $ks->tpu }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('dashboard.konfirmasi.tambah') }}" >
                    {{ csrf_field() }}
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" id="nik" name="nik" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Kelahiran</label>
                        <input type="date" id="ttl" name="ttl" class="form-control">
                    </div>
                    <input type="hidden" class="form-control" name="tpu" id="tpu" value="{{ $ks->tpu }}">
                    <input type="hidden" class="form-control" name="kodemakam" id="kodemakam" value="{{ $ks->kodemakam }}">
                    <input type="hidden" class="form-control" name="s" id="s" value="{{ $ks->s }}">
                    <input type="hidden" class="form-control" name="e" id="e" value="{{ $ks->e }}">
                    <input type="hidden" class="form-control" name="longitude" id="longitude" value="{{ $ks->longitude }}">
                    <input type="hidden" class="form-control" name="latitude" id="latitude" value="{{ $ks->latitude }}">
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Pilih</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endforeach

    <!-- Modal -->
    <div class="modal fade " id="reservation-form" tabindex="-1" role="dialog" aria-labelledby="reservationFormTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">

                            <form action="index.html" method="post" class="bg-white p-4">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h2>Reservation</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="text-black font-weight-bold" for="name">Name</label>
                                        <input type="text" id="name" class="form-control ">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="text-black font-weight-bold" for="phone">Phone</label>
                                        <input type="text" id="phone" class="form-control ">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="text-black font-weight-bold" for="email">Email</label>
                                        <input type="email" id="email" class="form-control ">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="text-black font-weight-bold" for="checkin_date">Date Check
                                            In</label>
                                        <input type="text" id="checkin_date" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="text-black font-weight-bold" for="checkout_date">Date Check
                                            Out</label>
                                        <input type="text" id="checkout_date" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="adults" class="font-weight-bold text-black">Adults</label>
                                        <div class="field-icon-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="adults" class="form-control">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="children" class="font-weight-bold text-black">Children</label>
                                        <div class="field-icon-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="children" class="form-control">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12 form-group">
                                        <label class="text-black font-weight-bold" for="message">Notes</label>
                                        <textarea name="message" id="message" class="form-control " cols="30"
                                            rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="submit" value="Reserve Now"
                                            class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="../user/js/jquery-3.3.1.min.js"></script>
    <script src="../user/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../user/js/popper.min.js"></script>
    <script src="../user/js/bootstrap.min.js"></script>
    <script src="../user/js/owl.carousel.min.js"></script>
    <script src="../user/js/jquery.stellar.min.js"></script>
    <script src="../user/js/jquery.fancybox.min.js"></script>
    <script src="../user/js/jquery.easing.1.3.js"></script>



    <script src="../user/js/aos.js"></script>

    <script src="../user/js/bootstrap-datepicker.js"></script>
    <script src="../user/js/jquery.timepicker.min.js"></script>

    <script src="../user/js/main.js"></script>
</body>

</html>
