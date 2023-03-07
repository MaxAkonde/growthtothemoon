@extends('layouts.user')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('user/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">IT’S NOW
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">GROWTH TO THE MOON</h1>
                                    <a href="#"
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('user/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to
                                        <strong>GROWTH TO THE MOON</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Your success is Yours, we’re ready to explode the records</h1>
                                    <a href="#"
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Dive in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('user/img/icon/icon-1.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">ROI & Data - Driven</h5>
                        <p class="mb-0">We help your business to shift to ROI & Data -Driven marketing to build awareness
                            and reach their revenue objective in today’s digital work.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('user/img/icon/icon-2.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Cognitive marketing expert</h5>
                        <p class="mb-0">Our deep understanding of consumer behavior, ability to analyze complex
                            data, creative problem-solving skills and continuous learning , keep us
                            confident in our breaking rules strategy to unlock your Growth by the power of
                            marketing.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('user/img/icon/icon-3.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Technology - Driven</h5>
                        <p class="mb-0">We are committed to using the best technology and staying on the top of the latest
                            innovations in digital marketing to give you unexpected results.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{ asset('user/img/icon/icon-4.png') }}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Spectacular & transparent communicators</h5>
                        <p class="mb-0">Trust is our relationship foundation. Weekly clear compelling reporting calls and
                            reports, shared dedicated slack channels and strong daily building partnership.
                            You’re always in the know.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-primary">About Us</p>
                        <h1 class="display-6 mb-4">Take your business to the next level with our expertise.</h1>
                        <p class="mb-4">We are growthtothemoon an innovative 360 digital agency, which will help you with
                            its skills to hack the growth of your project starting from the first and essential pillar:
                            your customer's brain. From this point, you have already unlocked the power of your
                            scaling and opened the doors to success.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="{{ asset('user/img/icon/icon-5.png') }}" alt="">
                                <h5 class="mb-3">Managed Services</h5>
                                <span>We advise you on your strategy, manage your ads, content,
                                    internal talent and share our knowledge with you.</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="{{ asset('user/img/icon/icon-2.png') }}" alt="">
                                <h5 class="mb-3">Dedicated Experts</h5>
                                <span>Our talented teams are personally involved in the intricacies of
                                    your case, with the goal of successfully surpassing your goal.
                                    We focus our energy on laser campaigns, automations that reveal the uniqueness of
                                    each partner we bring on board.</span>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Satisfy your curiosity for free now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="#" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Services</p>
                <h1 class="display-5 mb-5">WHAT WE DO TO EMPOWER YOUR SUCCESS</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('user/img/icon/icon-5.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Paid Advertisement</h4>
                                <p class="mb-0">We advise on the best platform to use and manage your budget for out performing
                                    campaign ( E-mail, B2B, content , social and sms marketing )</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('user/img/icon/icon-6.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">SEO , Branding & ORM</h4>
                                <p class="mb-0">We set up your ecosystem to be SEO friendly , branded and have a positive online
                                    reputation for the brand and mitigate any negative impact on its image.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('user/img/icon/icon-7.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Sales Funnels & CRO pipeline</h4>
                                <p class="mb-0">We optimize the sales funnels with less effort for the final customer, automate the
                                    conversion rate optimization with a proven working process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('user/img/icon/icon-8.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Ecosystem setting and Talents Management for mym & onlyfans</h4>
                                <p class="mb-0">We set up and let rise a model from zero to hero , by managing the strategy , the
                                    acquisition , the customer loyalty and more engagement. We manage the career long
                                    term opportunity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('user/img/icon/icon-9.png') }}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Creative Studio</h4>
                                <p class="mb-0">We set up a creative studio lab to innovate, brand, engage, to cost-effective
                                    solutions, to streamline your process and collaborate with our partner to understand
                                    their visions and goals, leading them to success and accomplishing the mission
                                    assigned to us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{ asset('user/img/icon/icon-10.pn') }}g" alt="Icon">
                            </div>
                            <h5 class="mb-3">Business Consultation</h4>
                                <p class="mb-0">We have partnership with experts in each customer sector , to challenge them ,
                                    analyze their strength, weaknesses. We help orient their vision and roadmap in the
                                    future to empower their activity to the next level , the success step.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our niches expertise</p>
                <h1 class="display-5 mb-5">We have mastered and are experts in the art of highly leveraged growth in the :</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-1.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-1.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">CBDs</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-2.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-2.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">E-commerce</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-3.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-3.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">Blockchain & Metavers</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-4.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-4.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">Real Estate</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-4.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-4.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">Financial Services</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-4.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-4.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">Gaming</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-4.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-4.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">Luxury</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-4.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-4.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">Management Onlyfans & Mym talents</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-4.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-4.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">Business Consultancy</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('user/img/project-4.jpg') }}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{ asset('user/img/project-4.jpg') }}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="#"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="#">SaaS Ads ( B2B )</a>
                        {{-- <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    {{-- <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Team</p>
                <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{ asset('user/img/team-1.jpg') }}" alt="">
                        <h5>Alex Robin</h5>
                        <span class="text-primary">Founder & CEO</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{ asset('user/img/team-2.jpg') }}" alt="">
                        <h5>Adam Crew</h5>
                        <span class="text-primary">Co Founder</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{ asset('user/img/team-3.jpg') }}" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-primary">Executive Manager</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{ asset('user/img/team-4.jpg') }}" alt="">
                        <h5>Robert Jordan</h5>
                        <span class="text-primary">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{ asset('user/img/testimonial-1.jpg') }}" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem
                        et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{ asset('user/img/testimonial-2.jpg') }}" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem
                        et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{ asset('user/img/testimonial-3.jpg') }}" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem
                        et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{ asset('user/img/testimonial-4.jpg') }}" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem
                        et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End --> --}}

    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-primary">Meet us and satisfy your curiosity</p>
                    <h1 class="display-5 mb-4">Need Our Expert Help? We're Here!</h1>
                    <p>To satisfy your curiosity , Just fill out our contact form, you will have the opportunity to tell us more about your
                        business and your specific needs. This will allow us to tailor our services to meet
                        your unique requirements and help you succeed.</p>
                    <p class="mb-4">Let's open the lock to success, thanks to our exponential growth !</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary"
                        href="#">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                        <span class="fs-5 fw-medium mx-4">+012 345 6789</span>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Get A Free Quote</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service">
                                    <option selected>Digital Marketing</option>
                                    <option value="">Social Marketing</option>
                                    <option value="">Content Marketing</option>
                                    <option value="">E-mail Marketing</option>
                                </select>
                                <label for="service">Choose A Service</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 130px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->
@endsection
