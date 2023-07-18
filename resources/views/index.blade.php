<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="themepaa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Nairo - Portfolio Template">
    <meta name="description" content="Nairo - Portfolio Template">
    <!-- title -->
    <title>Nairo - Portfolio Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- plugin CSS -->
    <link href="{{ asset('plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/et-line/style.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/magnific/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/scroll/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <!-- theme css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style id="ggapp4x83u89www1ujvox">
        @keyframes blink-ggapp4x83u89www1ujvox {
          0% {opacity: 0}
          49% {opacity: 0}
          50% {opacity: 1}
        }

        [data-typeitid='ggapp4x83u89www1ujvox'] .ti-cursor {
          animation: blink-ggapp4x83u89www1ujvox 1s infinite;
        }
    </style>
</head>
<!-- Body Start -->

<body data-spy="scroll" data-target="#navbar-collapse-toggle" data-offset="70" class="theme-light">
    <!-- page loading -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    <!-- End -->
    <!-- Header Start -->
    <div class="mob-header">
        <div class="d-flex">
            <div class="navbar-brand">
                <a class="logo-text" href="{{route('home')}}">
                    Raquel
                </a>
            </div>
            <button class="toggler-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
    <!-- End Header -->
    <!-- nav bar -->
    <header class="header-left" id="navbar-collapse-toggle">
        <div class="scroll-bar">
            <div class="hl-top">
                <div class="hl-logo">
                    <a href="{{route('home')}}">
                        N
                    </a>
                </div>
            </div>
            <ul class="nav nav-menu">
                <li>
                    <a class="nav-link active" href="#home" data-toggle="tooltip" title="HOME">
                        <i class="fas fa-house-damage"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#about" data-toggle="tooltip" title="ABOUT">
                        <i class="far fa-address-card"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#resume" data-toggle="tooltip" title="RESUME">
                        <i class="far fa-file"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#work" data-toggle="tooltip" title="WORK">
                        <i class="fas fa-briefcase"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#blog" data-toggle="tooltip" title="BLOG">
                        <i class="fas fa-blog"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#contactus" data-toggle="tooltip" title="CONTACT">
                        <i class="fas fa-id-card-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- End nav bar -->
    <!-- Main Start -->
    <main class="main-left">
        <!-- Home -->
        <section id="home" class="home-banner">
            <div class="hb-top-fixed d-flex">
                <div class="hb-info">
                    <label>+88 01785904633</label>
                    <label>uchchwasdasdev@gmail.com</label>
                </div>
                <div class="hb-lang">
                    <ul class="nav">
                        <li class="active"><a href="#">EN</a></li>
                        <li><a href="#">FR</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row full-screen align-items-center">
                    <div class="col-lg-7">
                        <div class="type-box">
                            <h6>Hello, My name is</h6>
                            <h1 class="font-alt">Uchchwas</h1>
                            <h3>I'm a <span id="type-it" data-typeitid="ggapp4x83u89www1ujvox">
                                <span class="ti-container"></span>
                              <span style="undefined" class="ti-cursor">|</span></span>
                            </h3>
                            <p class="lead">Backend Developer</p>
                            <p class="desc">From Development to Deployment, I turn ideas into reality, crafting digital solutions that transcend lines of code. With a passion for innovation and a commitment to excellence, I create software experiences that leave a lasting impact on users and businesses alike. Embracing the challenges of the ever-changing tech landscape, I relish in continuous learning, empowering myself to build the future, one project at a time.</p>
                            <div class="btn-bar">
                                <a class="font-alt" href="{{url('doc/Uchchwas_Das_Software_Engineer.pdf')}}">Donwload CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hb-me" style="background-image: url({{url('img/uchchwas_das.jpg')}});"></div>
        </section>
        <!-- End Home -->
        <!-- about us -->
        <section id="about" class="section dark-bg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="about-me">
                            <div class="img">
                                <div class="img-in">
                                    <img src="{{asset('img/about-me.jpg')}}" title="" alt="">
                                </div>
                                <div class="nav social-icons justify-content-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </div>
                            </div>
                            <div class="info">
                                <p>Junior Software Engineer</p>
                                <h3>Uchchwas Das</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 ml-auto">
                        <div class="about-info">
                            <div class="title">
                                <h3>Biography</h3>
                            </div>
                            <div class="about-text">
                                <p> Over the last four years, I have been developing different projects for academic purposes and have one year plus job experience mentioned in my CV. The technologies that I use daily are PHP, MySQL, C, C++, Java, etc. And, I have done many online contests, also participate ACM ICPC Dhaka Regional Contest two times. And I have good knowledge of Data structures and Algorithms. </p>
                                <p> I aim to come to a point in my career where I hope to advance my already expansive developing and programming knowledge by learning new technologies and working on challenging projects. I am a quick learner, focused, and dedicated to what is expected of me. I enjoy learning new skills.</p>
                            </div>
                            <div class="info-list">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>
                                                <label>Name: </label>
                                                <span>Uchchwas Das</span>
                                            </li>
                                            <li>
                                                <label>Birthday: </label>
                                                <span>7th Nov 1996</span>
                                            </li>
                                            <li>
                                                <label>Age: </label>
                                                @php 
                                                    $calYear = date_diff(date_create('07-11-1996'), date_create(date('Y-m-d'))); 
                                                @endphp
                                                <span>{{$calYear->format("%y Years, %m Months, %d days");}}</span>
                                            </li>
                                            <li>
                                                <label>Address: </label>
                                                <span>Badda Link R/D, Dhaka</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>
                                                <label>Mobile: </label>
                                                <span>(+880) 1785904633</span>
                                            </li>
                                            <li>
                                                <label>Email: </label>
                                                <span>uchchwasdasdev@gmail.com</span>
                                            </li>
                                            {{-- <li>
                                                <label>Skype: </label>
                                                <span>nairob.40</span>
                                            </li> --}}
                                            <li>
                                                <label>Freelance: </label>
                                                <span>Available</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- separated -->
                <div class="separated"></div>
                <!-- End separated -->
                <div class="title">
                    <h3>What I do?</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 m-15px-tb">
                        <div class="feature-box-01">
                            <i class="icon theme-bg icon-mobile"></i>
                            <div class="feature-content">
                                <h5>Web Design</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 m-15px-tb">
                        <div class="feature-box-01">
                            <i class="icon theme-bg icon-desktop"></i>
                            <div class="feature-content">
                                <h5>Web Development</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 m-15px-tb">
                        <div class="feature-box-01">
                            <i class="icon theme-bg icon-target"></i>
                            <div class="feature-content">
                                <h5>Deployment</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- separated -->
                <div class="separated"></div>
                <!-- End separated -->
                <div class="title">
                    <h3>Awards.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 m-15px-tb">
                        <div class="feature-box-02 media align-items-center">
                            <div class="icon">
                                <img src="{{asset('img/a1.png')}}" title="" alt="">
                            </div>
                            <div class="media-body">
                                <h6>Honorable mension</h6>
                                <p>Site of the day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 m-15px-tb">
                        <div class="feature-box-02 media align-items-center">
                            <div class="icon">
                                <img src="{{asset('img/a2.png')}}" title="" alt="">
                            </div>
                            <div class="media-body">
                                <h6>Honorable mension</h6>
                                <p>Site of the day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 m-15px-tb">
                        <div class="feature-box-02 media align-items-center">
                            <div class="icon">
                                <img src="{{asset('img/a3.png')}}" title="" alt="">
                            </div>
                            <div class="media-body">
                                <h6>Honorable mension</h6>
                                <p>Site of the day</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- separated -->
                <div class="separated"></div>
                <!-- End separated -->
                <div class="title">
                    <h3>Testimonials.</h3>
                </div>
                <div class="owl-carousel" data-items="2" data-nav-dots="true" data-md-items="2" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="30" data-autoplay="true">
                    <div class="testimonial-01 media">
                        <div class="avatar">
                            <img src="{{asset('img/team-1.jpg')}}" title="" alt="">
                        </div>
                        <div class="media-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <h6>Jennifer Lutheran</h6>
                            <span>CEO at pxdraft</span>
                        </div>
                    </div>
                    <div class="testimonial-01 media">
                        <div class="avatar">
                            <img src="{{asset('img/team-2.jpg')}}" title="" alt="">
                        </div>
                        <div class="media-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <h6>Jennifer Lutheran</h6>
                            <span>CEO at pxdraft</span>
                        </div>
                    </div>
                    <div class="testimonial-01 media">
                        <div class="avatar">
                            <img src="{{asset('img/team-3.jpg')}}" title="" alt="">
                        </div>
                        <div class="media-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <h6>Jennifer Lutheran</h6>
                            <span>CEO at pxdraft</span>
                        </div>
                    </div>
                    <div class="testimonial-01 media">
                        <div class="avatar">
                            <img src="{{asset('img/team-1.jpg')}}" title="" alt="">
                        </div>
                        <div class="media-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <h6>Jennifer Lutheran</h6>
                            <span>CEO at pxdraft</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about us -->
        <!-- Resume -->
        <section id="resume" class="section">
            <div class="container">
                <div class="title">
                    <h3>Experience.</h3>
                </div>
                <div class="resume-box">
                    <div class="resume-row">
                        <div class="row">
                            <div class="col-md-4 col-xl-3">
                                <div class="rb-left">
                                    <h6>Jr. Software Engineer</h6>
                                    <label>Arena Phone BD Ltd.</label>
                                    <p>May, 2022 - Present</p>
                                    <div class="rb-time">Full Time</div>
                                </div>
                            </div>
                            <div class="col-md-8 col-xl-9">
                                <div class="rb-right">
                                    <h6>About Company</h6>
                                    <p>Working as a Junior Software Engineer in Arena Phone BD Ltd.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resume-row">
                        <div class="row">
                            <div class="col-md-4 col-xl-3">
                                <div class="rb-left">
                                    <h6>Trainee Software Engineer</h6>
                                    <label>IT Corner Bangladesh, Dhaka</label>
                                    <p>Feb, 2022 - Apr, 2022</p>
                                    <div class="rb-time">Full Time</div>
                                </div>
                            </div>
                            <div class="col-md-8 col-xl-9">
                                <div class="rb-right">
                                    <h6>About Company</h6>
                                    <p>Working as a Trainee Software Engineer in IT Corner Bangladesh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resume-row">
                        <div class="row">
                            <div class="col-md-4 col-xl-3">
                                <div class="rb-left">
                                    <h6>Online Internship</h6>
                                    <label>Business Automation Ltd, Dhaka</label>
                                    <p>Dec, 2021 - Feb, 2022</p>
                                    <div class="rb-time">Part Time</div>
                                </div>
                            </div>
                            <div class="col-md-8 col-xl-9">
                                <div class="rb-right">
                                    <h6>About Company</h6>
                                    <p>Worked as an Intern in Business Automation Ltd.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- separated -->
                <div class="separated"></div>
                <!-- End separated -->
                <div class="title">
                    <h3>Education & Skills</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 m-15px-tb">
                        <ul class="aducation-box">
                            <li>
                                <span>2010-2012</span>
                                <h6>Graphic Designer</h6>
                                <p>International Design Institute</p>
                            </li>
                            <li>
                                <span>2010-2012</span>
                                <h6>Graphic Designer</h6>
                                <p>International Design Institute</p>
                            </li>
                            <li>
                                <span>2010-2012</span>
                                <h6>Graphic Designer</h6>
                                <p>International Design Institute</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 ml-auto m-15px-tb">
                        <div class="skill-lt">
                            <h6>HTML5</h6>
                            <span>92%</span>
                            <div class="skill-bar">
                                <div class="skill-bar-in" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div><!-- /skill -->
                        <div class="skill-lt">
                            <h6>WordPress</h6>
                            <span>75%</span>
                            <div class="skill-bar">
                                <div class="skill-bar-in" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div><!-- /skill -->
                        <div class="skill-lt">
                            <h6>Magento</h6>
                            <span>86%</span>
                            <div class="skill-bar">
                                <div class="skill-bar-in" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div><!-- /skill -->
                        <div class="skill-lt">
                            <h6>UI/UX</h6>
                            <span>88%</span>
                            <div class="skill-bar">
                                <div class="skill-bar-in" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div><!-- /skill -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Resume End -->
        <!-- Portfolio -->
        <section id="work" class="section dark-bg">
            <div class="container">
                <div class="title">
                    <h3>My Portfolio.</h3>
                </div>
                <div class="portfolio-filter-01">
                    <ul class="filter nav">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".branding">Branding</li>
                        <li data-filter=".photoshop">Photoshop</li>
                        <li data-filter=".fashion">Fashion</li>
                        <li data-filter=".product">Product</li>
                    </ul>
                </div> <!-- Portfolio Filter -->
                <div class="portfolio-content grid-gutter-lg grid-col-3 lightbox-gallery">
                    <div class="grid-item product branding fashion">
                        <div class="portfolio-box-01">
                            <div class="portfolio-info">
                                <h5 class="white-color font-weight-bold">Momb ios App</h5>
                                <span>Broadcasting ios App</span>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('img/m-portfolio-1.jpg')}}" title="" alt="">
                                <div class="portfolio-icon">
                                    <a href="{{asset('img/m-portfolio-1.jpg')}}" class="gallery-link">
                                        <span class="ti-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item photoshop">
                        <div class="portfolio-box-01">
                            <div class="portfolio-info">
                                <h5 class="white-color font-weight-bold">Momb ios App</h5>
                                <span>Broadcasting ios App</span>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('img/m-portfolio-2.jpg')}}" title="" alt="">
                                <div class="portfolio-icon">
                                    <a href="{{asset('img/m-portfolio-2.jpg')}}" class="gallery-link">
                                        <span class="ti-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item product branding">
                        <div class="portfolio-box-01">
                            <div class="portfolio-info">
                                <h5 class="white-color font-weight-bold">Momb ios App</h5>
                                <span>Broadcasting ios App</span>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('img/m-portfolio-3.jpg')}}" title="" alt="">
                                <div class="portfolio-icon">
                                    <a href="{{asset('img/m-portfolio-3.jpg')}}" class="gallery-link">
                                        <span class="ti-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item product photoshop">
                        <div class="portfolio-box-01">
                            <div class="portfolio-info">
                                <h5 class="white-color font-weight-bold">Momb ios App</h5>
                                <span>Broadcasting ios App</span>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('img/m-portfolio-5.jpg')}}" title="" alt="">
                                <div class="portfolio-icon">
                                    <a href="{{asset('img/m-portfolio-5.jpg')}}" class="gallery-link">
                                        <span class="ti-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item branding">
                        <div class="portfolio-box-01">
                            <div class="portfolio-info">
                                <h5 class="white-color font-weight-bold">Momb ios App</h5>
                                <span>Broadcasting ios App</span>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('img/m-portfolio-4.jpg')}}" title="" alt="">
                                <div class="portfolio-icon">
                                    <a href="{{asset('img/m-portfolio-4.jpg')}}" class="gallery-link">
                                        <span class="ti-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item product photoshop">
                        <div class="portfolio-box-01">
                            <div class="portfolio-info">
                                <h5 class="white-color font-weight-bold">Momb ios App</h5>
                                <span>Broadcasting ios App</span>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('img/m-portfolio-6.jpg')}}" title="" alt="">
                                <div class="portfolio-icon">
                                    <a href="{{asset('img/m-portfolio-6.jpg')}}" class="gallery-link">
                                        <span class="ti-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item fashion">
                        <div class="portfolio-box-01">
                            <div class="portfolio-info">
                                <h5 class="white-color font-weight-bold">Momb ios App</h5>
                                <span>Broadcasting ios App</span>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('img/m-portfolio-7.jpg')}}" title="" alt="">
                                <div class="portfolio-icon">
                                    <a href="{{asset('img/m-portfolio-7.jpg')}}" class="gallery-link">
                                        <span class="ti-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item product branding">
                        <div class="portfolio-box-01">
                            <div class="portfolio-info">
                                <h5 class="white-color font-weight-bold">Momb ios App</h5>
                                <span>Broadcasting ios App</span>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('/img/m-portfolio-8.jpg')}}" title="" alt="">
                                <div class="portfolio-icon">
                                    <a href="{{asset('/img/m-portfolio-8.jpg')}}" class="gallery-link">
                                        <span class="ti-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- grid item -->
                    <div class="grid-item fashion">
                        <div class="portfolio-box-01">
                            <div class="portfolio-info">
                                <h5 class="white-color font-weight-bold">Momb ios App</h5>
                                <span>Broadcasting ios App</span>
                            </div>
                            <div class="portfolio-img">
                                <img src="{{asset('img/m-portfolio-9.jpg')}}" title="" alt="">
                                <div class="portfolio-icon">
                                    <a href="{{asset('img/m-portfolio-9.jpg')}}" class="gallery-link">
                                        <span class="ti-plus"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- grid item -->
                </div>
            </div>
        </section>
        <!-- End Portfolio -->
        <!-- Blog -->
        <section id="blog" class="section">
            <div class="container">
                <div class="title">
                    <h3>Latest Blog.</h3>
                </div>
                <div class="row">
                    <div class="col-md-6 m-15px-tb">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <a href="single-blog-light.html">
                                    <img src="{{asset('img/blog-1.jpg')}}" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <div class="meta">29/FEB/2020 - WEBSITE - 1 COMMENT</div>
                                <h6><a href="single-blog-light.html">Five Solid Evidences Attending Design Is Good For Your Career Development.</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 m-15px-tb">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <a href="single-blog-light.html">
                                    <img src="{{asset('img/blog-2.jpg')}}" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <div class="meta">29/FEB/2020 - WEBSITE - 1 COMMENT</div>
                                <h6><a href="single-blog-light.html">Ten Mind-Blowing Reasons Why Design Is Using This Technique For Exposure.</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 m-15px-tb">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <a href="single-blog-light.html">
                                    <img src="{{asset('img/blog-3.jpg')}}" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <div class="meta">29/FEB/2020 - WEBSITE - 1 COMMENT</div>
                                <h6><a href="single-blog-light.html">I Will Tell You The Truth About Design In The Next 60 Seconds.</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 m-15px-tb">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <a href="single-blog-light.html">
                                    <img src="{{asset('img/blog-4.jpg')}}" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <div class="meta">29/FEB/2020 - WEBSITE - 1 COMMENT</div>
                                <h6><a href="single-blog-light.html">What You Know About Design And What You Don't Know About Design.</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 read-more-blog text-center">
                        <a class="px-btn px-btn-white" href="light-blog.html">More Blogs</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog -->
        <!-- Contact us -->
        <section id="contactus" class="section dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4 m-15px-tb">
                        <div class="contact-info">
                            <h4>What’s your story? Get in touch</h4>
                            <p>Always available for freelancing if the right project comes along, Feel free to contact me.</p>
                            <ul>
                                <li class="media">
                                    <i class="ti-map"></i>
                                    <span class="media-body">Badda Link R/D, Dhaka</span>
                                </li>
                                <li class="media">
                                    <i class="ti-email"></i>
                                    <span class="media-body">uchchwasdasdev@gmail.com</span>
                                </li>
                                <li class="media">
                                    <i class="ti-mobile"></i>
                                    <span class="media-body">+880 1785904633</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 ml-auto m-15px-tb">
                        <div class="contact-form">
                            <h4>Say Something</h4>
                            <form id="contact-form" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input name="Subject" id="subject" placeholder="Subject *" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" placeholder="Your message *" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send">
                                            <button class="px-btn px-btn-white" onclick="send_mail()" type="button" value="Send"> send message</button>
                                        </div>
                                        <span id="suce_message" class="text-success" style="display: none">Message Sent Successfully</span>
                                        <span id="err_message" class="text-danger" style="display: none">Message Sending Failed</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="google-map">
                            <div class="embed-responsive embed-responsive-21by9">
                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0668238157846!2d90.42152835375963!3d23.78063464219629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7853d0881db%3A0x243f856bfe5481fc!2sDhaka%201212!5e0!3m2!1sen!2sbd!4v1689710638396!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact us -->
    </main>
    <!-- End Main -->
    <!-- Footer Start -->
    <footer class="footer white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 m-10px-tb">
                    <div class="nav justify-content-center justify-content-md-start">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-md-6 m-10px-tb text-center text-md-right">
                    <p>© 2023 copyright all right reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    {{-- <a href="" class="fixd-btn" style="position: fixed; bottom: 20px; right: 20px; background: #bc0609; padding: 9px 34px; display: inline-block; color: #fff; font-weight: 600; border-radius: 60px;">
        <span>Contact With Me</span>
    </a> --}}

    
    <!-- jquery -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
    <!-- end jquery -->
    <!-- appear -->
    <script src="{{asset('plugin/appear/jquery.appear.js')}}"></script>
    <!-- end appear -->
    <!--bootstrap-->
    <script src="{{asset('plugin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('plugin/bootstrap/js/bootstrap.js')}}"></script>
    <!--end bootstrap-->
    <!-- End -->
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/mail_send.js')}}"></script>
    <!-- end -->
</body>
<!-- Body End -->

</html>