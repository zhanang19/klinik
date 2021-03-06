<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.html">

    <title>Klinik dr. M. Suherman</title>

    <link href="{{asset('bootstrap3/css/bootstrap.css')}}" rel="stylesheet">

    <!-- main css -->
    <link href="{{asset('css/master.css')}}" rel="stylesheet">

    <!-- mobile css -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- FontAwesome Support -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/font-awesome.min.css')}}"/>
    <!-- FontAwesome Support -->

    <!-- Superfish menu -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/superfish/superfish.css')}}"/>
    <!-- Superfish menu -->

    <!-- Theme Color selector -->
    <link href="{{asset('js/theme-color-selector/theme-color-selector.css')}}" type="text/css" rel="stylesheet">
    <!-- Theme Color selector -->

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/owl-carousel/owl.carousel.css')}}"/>
    <!-- Owl Carousel -->

    <!-- Typicons -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/typicons/typicons.min.css')}}"/>
    <!-- Typicons -->

    <!-- WOW animations -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/wow/css/libs/animate.css')}}"/>
    <!-- WOW animations -->

    <!-- Pulse Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/pulse/pm-slider.css')}}"/>
    <!-- Pulse Slider -->

    <!-- MeanMenu (mobile) -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/meanmenu/meanmenu.css')}}"/>
    <!-- MeanMenu (mobile) -->

    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/flexslider/flexslider-post.css')}}"/>
    <!-- Flexslider -->

    <!-- PrettyPhoto -->
    <link rel="stylesheet" type="text/css" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}"/>
    <!-- PrettyPhoto -->

    <!-- jQuery UI -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui/jquery-ui.css')}}"/>
    <!-- jQuery UI -->

    <!-- Development Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic%7COpen+Sans+Condensed:300,300italic,700%7CRaleway:400,200,300,100,600,500,700,800,900%7COswald:400,300,700%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic%7CRoboto+Condensed:400,300,300italic,400italic,700,700italic%7CRoboto+Slab:400,100,300,700%7CLato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!-- Development Google Fonts -->

</head>

<body>

<div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->

    <!-- Sub-Menu -->
    <div class="pm-sub-menu-container">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">

                    <div class="pm-sub-menu-info">

                        <ul class="pm-micro-navigation">
                        </ul>

                    </div>

                </div>


                <div class="col-lg-6 col-md-6 col-sm-12">

                    <ul class="pm-social-navigation">
                        <li class="pm_tip_static_bottom" title="Twitter"><a href="#" class="fa fa-twitter"></a></li>
                        <li class="pm_tip_static_bottom" title="Facebook"><a href="#" class="fa fa-facebook"></a></li>
                        <li class="pm_tip_static_bottom" title="Google Plus"><a href="#" class="fa fa-google-plus"></a>
                        </li>
                        <li class="pm_tip_static_bottom" title="Linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                        <li class="pm_tip_static_bottom" title="YouTube"><a href="#" class="fa fa-youtube"></a></li>
                        <li class="pm_tip_static_bottom" title="Reddit"><a href="#" class="fa fa-reddit"></a></li>
                    </ul>

                </div>

            </div>

        </div>

    </div>
    <!-- /Sub-header -->

    <!-- Request appointment form -->
    <div class="pm-request-appointment-form" id="pm-appointment-form">

        <div class="container">
            <div class="row">

                <form action="login" method="post">
                    {{csrf_field()}}
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input name="username" type="text" class="pm-request-appointment-form-textfield"
                               placeholder="Username" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input name="password" type="password" class="pm-request-appointment-form-textfield"
                               placeholder="Password" required>
                    </div>
                    <div class="col-lg-12 pm-clear-element" style="padding-top:20px;">
                        <input type="submit" value="Login" class="pm-square-btn appointment-form"/>
                        <p class="pm-appointment-form-notice">Silahkan Login</p>                            <a href="#"
                                                                                                               class="pm-appointment-form-close"
                                                                                                               id="pm-close-appointment-form"><i
                                    class="fa fa-close"></i> Close</a>
                    </div>

                </form>

            </div>
        </div>

    </div>
    <!-- Request appointment form end -->

    <!-- Header area -->
    <header>

        <div class="container">

            <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-12 pm-header-logo-container">

                        <img src="{{asset('images/LOGO.jpg')}}" class="img-responsive pm-header-logo" alt="Medical-Link Template" width="50%" height="50%">

                    </div>

                <div class="col-lg-4 col-md-4 col-sm-12">

                    <ul class="pm-header-info">
                        <span style="font-size:26px"><strong>Klinik Rawat Inap dr. M. Suherman</strong></span><br>

                        <li><p><i class="fa fa-mobile-phone"></i> 0331-326091 /085233003383</p></li><br>
                        <li><p><i class="fa fa-inbox"></i> &nbsp;Jln. Karimata No. 49, Kab Jember, Jawa Timur</p></li>
                    </ul>

                </div>

            </div>

        </div>

    </header>
    <!-- /Header area end -->

    <!-- Navigation area -->
    <div class="pm-nav-container">

        <div class="container">

            <div class="row">

                <div class="col-lg-10 col-md-10 col-sm-12">

                    <nav class="navbar-collapse collapse" id="pm-main-navigation">

                        <ul class="sf-menu pm-nav">

                            <li><a href="/" class="fa fa-home" id="pm-home-btn"></a></li>
                            <li>
                                <a href="#">Profil</a>
                                <ul>
                                    <li><a href="sejarah">Sejarah</a></li>
                                    <li><a href="strukturorganisasi">Struktur Organisasi</a></li>
                                    <li><a href="tenagakesehatan">Tenaga Kesehatan</a></li>
                                    <li><a href="unitpelayanan">UnitPelayanan</a></li>
                                    <li><a href="jadwaldokter">Jadwal Dokter</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Prolanis Hipertensi</a>
                                <ul>
                                    <li><a href="senamprolanis">Senam Prolanis</a></li>
                                    <li><a href="edukasiklub">Edukasi Klub</a></li>
                                    <li><a href="homevisite">Home Visite</a></li>
                                </ul>
                            </li>
                            <li>
                            <li>
                                <a href="#">Bahaya Hipertensi</a>
                                <ul>
                                    <li><a href="apaituhipertensi">Apa itu Hipertensi?</a></li>
                                    <li><a href="crmhipertensi">Komplikasi Hipertensi</a></li>
                                    <li><a href="pentingnyacrmhipertensi">Upaya Pemeliharaan CRM Hipertensi</a></li>
                                </ul>
                            </li>
                            <li>

                                <a href="#">Terapi Hipertensi</a>
                                <ul>
                                    <li><a href="aktifitasfisik">Aktifitas fisik</a></li>
                                    <li><a href="polamakandash">Pola makan DASH</a></li>
                                    <li><a href="beratbadansehat">Berat Badan Sehat</a></li>
                                    <li><a href="dietsodium">Diet Sodium</a></li>
                                    <li><a href="dietalkohol">Diet Alkohol</a></li>
                                </ul>
                            </li>
                            <li><a href="login" class="pm-rounded-btn no-border">Baca Anjuran Dokter </a></li>
                        </ul>

                    </nav>

                </div>

            </div>

        </div>

    </div>
    <!-- Navigation area end -->

    <!-- SLIDER AREA -->

    <div class="pm-pulse-container" id="pm-pulse-container">

        <div id="pm-pulse-loader">
            <img src="js/pulse/img/ajax-loader.gif" alt="Slider Loading"/>
        </div>

        <div id="pm-slider" class="pm-slider">

            <div id="pm-slider-progress-bar"></div>

            <ul class="pm-slides-container" id="pm_slides_container">

                <!-- FULL WIDTH slides -->
                <li data-thumb="img/home/slide1a.jpg" class="pmslide_0"><img src="img/home/slide1.jpg" alt="img01"/>


                    <div class="pm-holder">
                        <div class="pm-caption">
                            <h1>Keep Your Blood Pressure</h1>
                            <span class="pm-caption-decription">
                                Terapkan gaya hidup sehat dengan perilaku <b>cerdik</b> dan <b>patuh</b>
                            </span>
                        </div>
                    </div>


                </li>

                <li data-thumb="img/home/slide2a.jpg" class="pmslide_1"><img src="img/home/slide2.jpg" alt="img02"/>


                    <div class="pm-holder">
                        <div class="pm-caption">
                            <h1>Stop Hypertension</h1>
                            <span class="pm-caption-decription">
                                Let's follow me to save hypertension
                            </span>
                        </div>
                    </div>


                </li>

                <li data-thumb="img/home/slide3a.jpg" class="pmslide_2"><img src="img/home/slide3.jpg" alt="img02"/>


                    <div class="pm-holder">
                        <div class="pm-caption">
                            <h1>Hipertensi</h1>
                            <span class="pm-caption-decription">
                                Kenali gejala dan cegah mulai sekarang
                            </span>
                        </div>
                    </div>


                </li>

            </ul>

        </div>

    </div>

    <!-- SLIDER AREA end -->

    <!-- BODY CONTENT starts here -->

    <!-- PANEL 1 -->
    <div class="container pm-containerPadding-top-110 pm-containerPadding-bottom-100">

        <div class="row">
            <div class="col-lg-12">

                <!-- Post info -->
                <div class="pm-single-post-article">

                    <p><span style="color:#000000"><strong>Upaya Pemeliharaan Kesehatan Pasien Hipertensi berbasis <em>Customer Relationship Management</em> (CRM) Klinik Rawat Inap dr. M. Suherman</strong></span>
                    </p>

                    <p><span style="color:#000000">Pemeliharaan kesehatan bagi pasien hipertensi merupakan hal yang sangat penting dilakukan untuk mengendalikan tekanan darah penderita hipertensi dan menghindari terjadinya komplikasi akibat penyakit hipertensi. Klinik Rawat Inap dr. M. Suherman menyediakan beberapa program kegiatan dan pelayanan bagi pasien hipertensi, diantaranya :</span>
                    </p>

                    <ol>
                        <li><span style="color:#000000">Pemantauan Kesehatan secara berkala melalui:</span></li>
                    </ol>

                    <ul>
                        <li><span style="color:#000000"><em>Reminder Follow up</em></span></li>
                        <li><span style="color:#000000">Konsultasi via SMS</span></li>
                        <li><span style="color:#000000">SMS modifikasi gaya hidup pasien hipertensi</span></li>
                    </ul>

                    <ol start="2">
                        <li><span style="color:#000000">Pemeriksaan tekanan darah gratis</span></li>
                        <li><span style="color:#000000">Pemeriksaan Laboratorium</span></li>
                        <li><span style="color:#000000">Informasi Terapi non-farmakologi bagi pasien hipertensi</span>
                        </li>
                        <li><span style="color:#000000">Program Pengelolaan Penyakit Kronis bagi pasien BPJS dengan hipertensi :</span>
                        </li>
                    </ol>

                    <ul>
                        <li><span style="color:#000000">Edukasi Pendidikan Pasien dan Keluarga</span></li>
                        <li><span style="color:#000000">Senam Setiap Sabtu (3S)</span></li>
                        <li><span style="color:#000000"><em>Home visite</em></span></li>
                    </ul>

                    <p><span style="color:#000000">Upaya pemeliharaan kesehatan pasien hipertensi berbasis CRM diimplementasikan melalui <em>website</em> dan SMS <em>gateway</em>. Fasilitas pelayanan ini diberikan secara <em>full access</em> bagi pasien hipertensi yang telah berkunjung/berobat ke Klinik Rawat Inap dr. M. Suherman.</span>
                    </p>

                    <p><span style="color:#000000">Pasien yang telah berobat di Klinik Rawat Inap dr. M. Suherman dan terdiagnosa hipertensi akan mendapatkan SMS <em>list done today.</em> SMS <em>list done today </em>berisi pesan anjuran dokter untuk mengontrol tekanan darah. Apabila isi SMS <em>list done today</em> berisi perincian yang detail, pasien dapat melihat anjuran dokter melalui <em>website </em>dengan cara klik menu baca anjuran dokter. Pasien dapat melakukan <em>login</em> pada <em>website</em> dengan username dan password sesuai dengan SMS <em>list done today </em>yang telah diterima.</span>
                    </p>

                    <p><span style="color:#000000">Pasien dapat melakukan konsultasi dan mengirimkan testimoni kepada Klinik Rawat Inap dr. M. Suherman dengan format pengiriman SMS sebagai berikut :</span>
                    </p>

                    <ol>
                        <li>
                            <span style="color:#000000">Konsultasi : ketik &ldquo;KS (spasi) isi konsultasi&rdquo;</span>
                        </li>
                        <li><span style="color:#000000">Testimoni : ketik &ldquo;TS (spasi) isi testimoni&rdquo;</span>
                        </li>
                    </ol>

                    <p><span style="color:#000000">Kirim SMS ke 085336133692</span></p>

                    <p><span style="color:#000000">Selain itu, pasien yang membutuhkan/harus kontrol ulang ke Klinik Rawat Inap dr. M. Suherman secara otomatis akan mendapat SMS <em>reminder follow up</em>. SMS <em>reminder follow up </em>akan dikirim 1 hari sebelum waktu kontrol ulang.</span>
                    </p>

                    <blockquote>
                        <p style="text-align:center"><span style="color:#000000"><strong><span
                                            style="font-size:12pt"><span
                                                style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">MARI BERGABUNG BERSAMA KAMI dalam UPAYA PEMELIHARAAN KESEHATAN PASIEN HIPERTENSI</span></span></strong></span>
                        </p>
                    </blockquote>

                </div>

                <!-- Post info end -->


            </div>
        </div>

    </div>
    <!-- PANEL 1 end -->

    <footer>
        <!-- BODY CONTENT end -->

        <div class="pm-fat-footer pm-parallax-panel" data-stellar-background-ratio="0.5">

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 pm-widget-footer">

                        <h6 class="pm-fat-footer-title"><span>Vivi. Rekam Medik - Politeknik Negeri Jember</span></h6>

                    </div>

                </div>

            </div>
        </div>

    </footer>


</div><!-- /pm_layout-wrapper -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('js/jquery.viewport.mini.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('bootstrap3/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/modernizr.custom.js')}}"></script>
<script src="{{asset('js/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.tooltip.js')}}"></script>
<script src="{{asset('js/superfish/superfish.js')}}"></script>
<script src="{{asset('js/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('js/stellar/jquery.stellar.js')}}"></script>
<script src="{{asset('js/theme-color-selector/theme-color-selector.js')}}"></script>
<script src="{{asset('js/pulse/jquery.PMSlider.js')}}"></script>
<script src="{{asset('js/meanmenu/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('js/flexslider/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/jquery.testimonials.js')}}"></script>
<script src="{{asset('js/wow/wow.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.js')}}"></script>
<script src="{{asset('js/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/tinynav.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>

<p id="back-top" class="visible-lg visible-md visible-sm"></p>

</body>
</html>
