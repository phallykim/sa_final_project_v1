@extends('layouts.layout2')


@section('content')

  <!-- tmp header area  -->
  <header class="header-solid header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-solid-main-wrapper">
                        <div class="logo-area-start">
                            <a class="logo" href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo/logo-01.png') }}" alt="Corporate_business_logo">
                            </a>
                        </div>

                        <div class="header-nav main-nav-one">
                            <x-menuList/>
                        </div>
                        <div class="actions-area">

                            <a href="#" class="tmp-btn btn-primary">Buy Now</a>
                            <!-- <div class="menu-button" id="search">
                            <i class="fa-light fa-grid-2"></i>
                            </div> -->
                            <div class="tmp-side-collups-area" id="side-collups">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#fff"></rect>
                                    <rect y="7" width="20" height="2" fill="#fff"></rect>
                                    <rect width="20" height="2" fill="#fff"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- tmp header area end -->
    <x-sidebar/>

    <!-- tmp banner area -->
    <section class="section-banner-area-start tmp-section-gapTop pt_sm--10 pb--40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-xl-1 order-md-2 order-sm-2 order-2 pl_md--30 pl_sm--30">
                    <div class="banner-company-area-main__wrapper">
                        <span class="pre-title">
                            Our Corporate Business Agency
                        </span>
                        <h1 class="title">Bizper Company.</h1>
                        <p>At Bizper Company, we understand the importance of efficient and streamlined processes in managing corporate requests. Our Request System Management is designed to simplify and optimize the way your business handles internal and external requests. Whether it's procurement, service inquiries, or support tickets, our system ensures that every request is tracked, managed, and resolved promptly.</p>
                        <div class="button-area-wrapper">
                            <a href="#" class="tmp-btn btn-primary">Purchase Now</a>
                            <a href="{{ route('contact') }}" class="tmp-btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-xl-2 order-md-1 order-sm-1 order-1 mb_md--30 mb_sm--30">
                    <div class="frame-image-about-company">
                        <img src="{{ asset('assets/images/about/about-3.png') }}" alt="Banner Images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tmp banner area end -->

    <div class="best-service-we-provide pt--60 tmp-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-6.svg') }}" alt="corporate_Business_Services_agency">
                        </div>
                        <div class="content">
                            <h2 class="title">Business Alignment</h2>
                            <p class="description">
                            Ensure the system supports business goals and user needs.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-1.svg') }}" alt="corporate_Business_Services_agency">

                        </div>
                        <div class="content">
                            <h2 class="title">User-Friendly Design</h2>
                            <p class="description">
                            Create an intuitive interface for submitting and tracking requests.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-2.svg') }}" alt="corporate_Business_Services_Agency">

                        </div>
                        <div class="content">
                            <h2 class="title">Data-Driven Decisions</h2>
                            <p class="description">
                            Use analytics to monitor request trends and improve efficiency.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                    <div class="service-inner financial-service-inner agency-service feature-service">
                        <div class="icon">
                            <img src="{{ asset('assets/images/services/agency-3.svg') }}" alt="corporate_Business_Services_agency">

                        </div>
                        <div class="content">
                            <h2 class="title">Cost Efficiency</h2>
                            <p class="description">
                            Invest in tools and resources that maximize ROI.
                            </p>
                            <div class="three--dot">
                                <div class="dot dot-one"></div>
                                <div class="dot dot-two"></div>
                                <div class="dot dot-two"></div>
                            </div>
                        </div>
                        <a href="{{ route('service-details') }}" class="over_link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- short discription about company area  -->
    <div class="short-discription-area tmp-section-gapBottom">
        <div class="container  plr_sm--15">
            <div class="row">
                <div class="col-lg-12">
                    <div class="short-discription-between-area">
                        <h2 class="title">
                            We are a dynamic creative digital agency dedicated to elevating our company's brands.
                        </h2>
                        <div class="discription-area">
                            <p class="disc">
                           </p>
                            <a href="#" class="btn-readmore d-flex">View More<i class="fa-light fa-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- short discription about company area end -->

    <!-- about company wrapper -->
    <section class="about-company-area tmp-section-gapBottom">
        <div class="row align-items-center  plr_sm--15 plr_md--15">
            <div class="col-lg-4 offset-lg-2 mb_md--50 mb_sm--30">
                <div class="split-inner">
                    <h2 class="title sal-animate mb--40" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        What is Bizper?</h2>
                    <p class="description sal-animate mb--25" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Bizper is a cutting-edge corporate business agency specializing in streamlining and optimizing request management processes for businesses of all sizes. Our Request System Management solution is designed to enhance efficiency,
                         improve communication, and ensure that every request is handled with precision and care.</p>
                    <p class="description sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300"></p>
                    <ul class="split-list sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="20">
                        <li>- Doug DeMarco, Design Prototyping Manager</li>
                        <li>- 108 million paying subscribers</li>
                        <li>- Over 1.7 billion hours of music played monthly</li>
                        <li>- 4,000+ employees working across 16 offices</li>
                    </ul>
                    <div class="view-more-button mt--35 sal-animate d-flex" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                        <a class="tmp-btn btn-primary" href="{{ route('contact') }}">Contact With Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="thumbnail image-right-content">
                    <img src="{{ asset('assets/images/about/about-large.jpg') }}" alt="split Images">
                </div>
            </div>
        </div>
    </section>
    <!-- about company wrapper end -->


    <!-- tmp counterup section area start -->
    <div class="tmp-section-gapBottom tmp-counterup-area">
        <div class="container">
            <div class="row g-5 counter_animation">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/05.svg') }}" alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">858</span>+</h2>
                                <p class="disc">Successful Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/08.svg') }}" alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">858</span>k+</h2>
                                <p class="disc">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/06.svg') }}" alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">758</span>+</h2>
                                <p class="disc">Media Active</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                    <div class="single-counterup-area-agency">
                        <div class="icon">
                            <img src="{{ asset('assets/images/counter/07.svg') }}" alt="agency-service">
                        </div>
                        <div class="information">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">258</span>+</h2>
                                <p class="disc">Skill Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp counterup section area end -->
  
    <!-- Start Footer Area  -->
    <footer class="footer-area footer-style-one-wrapper bg-color-footer bg-image-none tmp-section-gap">
        <div class="container">
            <div class="footer-main footer-style-one mt--0">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-wrapper border-right mr--20">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset('assets/images/logo/logo-02.svg') }}" alt="logo">
                                </a>
                            </div>

                            <p class="description">
                            A well-implemented Request Management System improves efficiency, reduces response time, and enhances customer and employee satisfaction.
                            </p>


                            <div class="day-time">
                                <div class="icon"><i class="fa-solid fa-alarm-clock"></i></div>
                                <div class="content">
                                    <div class="day">Sunday - Friday:</div>
                                    <div class="time">9:00 AM – 8:00 PM</div>
                                </div>
                            </div>

                            <ul class="social-icons solid-social-icons rounded-social-icons">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Services</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="{{ route('about') }}">About Company</a>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}">Meet Our Team</a>
                                </li>
                                <li>
                                    <a href="{{ route('service') }}">Our Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">News & Media</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('faq') }}">Support</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Solutions</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="#">Brand</a>
                                </li>
                                <li>
                                    <a href="#">Counter</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('faq') }}">Support</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Company</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="{{ route('pricing') }}">Pricing</a>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}">Our Team</a>
                                </li>
                                <li>
                                    <a href="{{ route('service') }}">Our Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">News & Media</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('faq') }}">Support</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Quick Link</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="{{ route('about') }}">Company</a>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}"> Our Team</a>
                                </li>
                                <li>
                                    <a href="{{ route('service') }}">Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}">News & Media</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('faq') }}">Support</a>
                                </li>

                            </ul>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area-one bg-colorsame">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-wrapper">
                        <p>© Copyright 2024. All Rights Reserved by <a href="#">Bizper</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->

@endsection