<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>TAMİRCİ</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen')}}">
    <!--[if lt IE 9]>
     <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
     <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
@include('layouts.header')
<!-- end header inner -->
<!-- end header -->
<!-- banner -->
<section class="banner_main">
    <div id="banner1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <h1>HOŞGELDİNİZ</h1>
                                    <span>Araç Bakım Servisi</span>
                                    <p>İletişime geçtikten sonra nerede olduğunuz fark etmeksizin konumunuza<br> göre
                                        aracınıza en uygun servise yönlendirilirsiniz. </p>
                                    <a href="#">DAHA FAZLA BİLGİ İÇİN </a> <a href="#">İLETİŞİM İÇİN</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{asset('images/car.png')}}" alt="#"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <h1>Welcome</h1>
                                    <span>car repair services</span>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                                    <a href="#">More Info </a> <a href="#">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{asset('images/car.png')}}" alt="#"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <h1>Welcome</h1>
                                    <span>car repair services</span>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                                    <a href="#">More Info </a> <a href="#">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="images/car.png" alt="#"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>
</section>
<!-- end banner -->
<!-- three_box -->
<div class="three_box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box_text">
                    <h3>ARAÇ</h3>
                    <i><img src="images/thr.png" alt="#"/></i>
                    <p>Aracınızın ihtiyaçları güvenle ve uzman kişiler tarafınca giderilir</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_text">
                    <h3>KULLANILAN ÜRÜNLER</h3>
                    <i><img src="images/thr1.png" alt="#"/></i>
                    <p>Aracınıza uygun en kaliteli ürün belirlenerek kullanılır </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_text">
                    <h3>TEST</h3>
                    <i><img src="images/thr2.png" alt="#"/></i>
                    <p>Aracınızda en son olarak test sürüşü ile herşeyin güvende olup olmadığı kontrol edilir</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- three_box -->
<!-- about -->
<div  class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Araç Servisimiz Hakkında </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="about_img">
                        <div class="about_box">
                            <h3>  </h3>
                            <p>
                                Acil Yol Yardım<br>
                                Nerede olursanız olun, 365 gün 24 saat yanınızdayız. Aracınızda herhangi bir sorun ile karşılaştığınızda tek yapmanız gereken  Müşteri İlgi Merkezini arayarak operatöre bulunduğunuz yeri bildirmek. <br>
                                Yedek araç<br>
                                Belirlenen Yetkili Servislerde, araçlarını aynı gün içinde teslim alamayan mekanik şahıs müşterilerimize ücretsiz yedek araç hizmeti!<br>
                                Hasar Destek Hizmeti<br>
                                Kaza yapmanız durumunda,  kaskonuz olsa da olmasa da, Müşteri İlgi Merkezini arayarak  uygun yetkili servislerinde  aracınızı ücretsiz olarak çektirebilir, kaza tespit tutanağı ve sigorta işlemleri ile ilgili izlemeniz gereken adımlar konusunda destek alabilirsiniz.
                                       </p>
                            <a class="read_more">DAHA FAZLASI İÇİN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
<!-- wedo  section -->
<div class="wedo ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Neler Yapılıyor</h2>
                    <p>                </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6 margin_bottom">
                        <div class="work">
                            <figure><img src="images/img1.png" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                            <h3><br><span class="blu">Lastik değişim ve tamiri</span></h3>
                        </div>
                    </div>
                    <div class="col-md-6 margin_bottom">
                        <div class="work">
                            <figure><img src="images/img2.png" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                            <h3><br><span class="blu">Yağ değişimi</span></h3>
                        </div>
                    </div>
                    <div class="col-md-6 margin_bottom">
                        <div class="work">
                            <figure><img src="images/img3.png" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                            <h3><br> <span class="blu">Mekanik parça onarım ve değişimi</span></h3>
                        </div>
                    </div>
                    <div class="col-md-6 margin_bottom">
                        <div class="work">
                            <figure><img src="images/img4.png" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                            <h3><br><span class="blu">Onarım garantisi</span></h3>
                        </div>
                    </div>
                </div>
                <a class="read_more" href="#">Daha fazla</a>
            </div>
        </div>
    </div>
</div>
<!-- end wedo  section -->
<!-- testimonial -->
<div class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Kullanıcı Yorumları</h2>
                    <p>En gerçekçi ve her bölgeden kullanıcı yorumları </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="row">
                                        <div class="col-md-6 margin_boot">
                                            <div class="test_box">
                                                <i><img src="images/tes.jpg" alt="#"/></i>
                                                <h4>AHMET</h4>
                                                <span>*****(5,0)</span>
                                                <p> Konumum fark etmeksizin nerede oduumu söyledikten sonra bana ve arabama en yakın ve en uygun servis hizmetine iletildim. Hizmetten oldukça memnun kaldım ihtiyaç halinde tekrardan kullanacağım. </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 margin_boot">
                                            <div class="test_box">
                                                <i><img src="images/tes1.jpg" alt="#"/></i>
                                                <h4>MEHMET</h4>
                                                <span>*****(5,0)</span>
                                                <p> Arabamın motoru arıza verdikten sonra iletişime geçtim ve en kısa sürede çekici ile arbam srvise götürüldü. Çok ekonomik bir şekilde sorunum çözüldü. Çok memnun kaldım. <br>                                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-6 margin_boot">
                                            <div class="test_box">
                                                <i><img src="images/tes.jpg" alt="#"/></i>
                                                <h4>MEHMET</h4>
                                                <span>*****(5,0)</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 margin_boot">
                                            <div class="test_box">
                                                <i><img src="images/tes1.jpg" alt="#"/></i>
                                                <h4>MEHMET</h4>
                                                <span>*****(5,0)</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-6 margin_boot">
                                            <div class="test_box">
                                                <i><img src="images/tes.jpg" alt="#"/></i>
                                                <h4>JCKOLO</h4>
                                                <span>*****(5,0)</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 margin_boot">
                                            <div class="test_box">
                                                <i><img src="images/tes1.jpg" alt="#"/></i>
                                                <h4>ROCOYO</h4>
                                                <span>(It is a long )</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end testimonial -->
</div>
<!--  footer -->
@include('layouts.footer')
<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}js/bootstrap.bundle.min.js"></script>
<script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
