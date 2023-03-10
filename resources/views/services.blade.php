@extends('layouts.user')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Our Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Our Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid mt-0 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">How Internet Marketing Services Drive Business Growth</h1>
                        <p class="mb-4">Digital marketing services provide businesses of all sizes with an opportunity to
                            market their brand 24/7 at a low cost. From startups to medium-sized enterprises to
                            multiple-location companies, a digital marketing company helps you expand your niche market
                            reach to offer goods and services to your target customers, irrespective of time differences or
                            location.

                            Hiring an internet marketing agency is one of the best ways to reach your prospects while
                            maintaining a robust relationship with your existing clients. As long as your business has a
                            strong digital presence, your customers will always find you.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 pt-lg-5">
                    <div class="row g-5 p-5 mt-lg-4 text-center">
                        <div class="col-md-6">
                            <h1 class="display-6 mb-1 text-primary"><span class="counterUp">50</span>+</h1>
                            <h5 class="mb-3">Clients</h5>
                        </div>
                        <div class="col-md-6">
                            <h1 class="display-6 mb-1 text-primary">$<span class="counterUp">2</span>M+</h1>
                            <h5 class="mb-3">AD-SPEND MANAGED</h5>
                        </div>
                        <div class="col-md-6">
                            <h1 class="display-6 mb-1 text-primary"><span class="counterUp">500</span>%+</h1>
                            <h5 class="mb-3">SYSTEMS UP-TIME</h5>
                        </div>
                        <div class="col-md-6">
                            <h1 class="display-6 mb-1 text-primary"><span class="counterUp">08</span>+</h1>
                            <h5 class="mb-3">COMPANYS</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About Start -->
    <div class="container-fluid mt-1 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-lg-5">
                    <img src="{{ asset('user/img/5395108-1536x1536.jpg') }}" alt="" class="col-md-12"
                        style="width:100%;height:auto;">
                </div>
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">Generate High-Converting Leads and Increase Sales Exponentially</h1>
                        <p class="mb-4">Experiencing a dip in organic reach, audience engagement or conversions? Tackle
                            your social media marketing hurdles head-on and stay ahead of the curve with Growth Magnet
                            Studio Internet Marketing Agency’s growth-driven social media advertising services.

                            As your trusted social media advertising company, we leverage social media data to dissect your
                            audience demographics, identify customer preferences and pain points and craft a social media
                            advertising strategy that delivers unmatched results!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- About Start -->
    <div class="container-fluid mt-5 mb-0">
        <div class="container">
            <h1 class="text-center">THE SERVICES THAT WILL
                SKYROCKET YOUR BUSINESS</h1>
            <div class="row mb-3">
                <div class="col-md-4 pt-lg-5 mt-5">
                    <img src="{{ asset('user/img/pixlr-bg-result-2048x1331.png') }}" alt=""
                        class="col-md-12 col-sm-12 mt-1" style="width:100%;height:auto;">
                </div>
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">Facebook Ads</h1>
                        <p class="mb-4">With over 1 billion active users on Facebook, advertisements are the best way to
                            grab their attention. Implementing the right Facebook campaigns helps you catch the eye of
                            customers and build rapport with them. We have been known as one of the premier social media
                            advertising agencies for medium and enterprise level businesses.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">Google Ads</h1>
                        <p class="mb-4">Extend your ads to create a diverse online presence for your business and get the
                            most publicity. Creating multiples helps us track exactly what’s working for you. We brainstorm
                            to find the right keywords to target your business’s display, search, and video ads. We manage
                            your AdWords campaign to bring in new website visits and increase lead generation.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
                <div class="col-md-4 pt-lg-5 mt-5">
                    <img src="{{ asset('user/img/5031659-1536x1024.jpg') }}" alt="" class="col-md-12 col-sm-12 mt-1"
                        style="width:100%;height:auto;">
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-4 pt-lg-5 mt-5">
                    <img src="{{ asset('user/img/pixlr-bg-result-1-1536x999.png') }}" alt=""
                        class="col-md-12 col-sm-12 mt-1" style="width:100%;height:auto;">
                </div>
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">Youtube Ads</h1>
                        <p class="mb-4">Statistics show that more than 90 percent of online shoppers discover a brand
                            through YouTube marketing videos. Amp up your YouTube social media marketing strategy to capture
                            your customers’ attention and compel them to take action. Our YouTube marketing company is here
                            to help you learn more about your target audience, improve your video quality and make YouTube
                            marketing content that resonates with your ideal customers.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">Search Engine Optimization</h1>
                        <p class="mb-4">Coordinating dealings between consumer and company puts you in the background;
                            however, today could be your turn to step into the spotlight! Come out on top with fresh web
                            design and maintained SEO services.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
                <div class="col-md-4 pt-lg-5 mt-3">
                    <img src="{{ asset('user/img/pixlr-bg-result-2-1536x1536.png') }}" alt=""
                        class="col-md-12 col-sm-12" style="width:100%;height:auto;">
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-4 pt-lg-5 mt-3">
                    <img src="{{ asset('user/img/2001.i039.031_branding_isometric_concept_icons-14-1536x1536.jpg') }}"
                        alt="" class="col-md-12 col-sm-12" style="width:100%;height:auto;">
                </div>
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">Branding</h1>
                        <p class="mb-4">Our branding services are tried and tested, yet flexible enough to accommodate
                            your unique and optimum needs. By adopting a strong brand strategy and digital marketing plan,
                            we facilitate a strong connect between your consumers and your brand, ultimately leading to a
                            better brand experience and improved brand recall.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">ORM</h1>
                        <p class="mb-4">Your reviews and online reputation can make or break your success online. Improve
                            your reputation and reap the rewards with the help of our internet marketing agency. We partner
                            with Rize Reviews to improve your review generation, review monitoring and review response
                            publishing tactics. Our team utilizes state-of-the-art online reputation management software to
                            streamline your ORM practices and acquire more positive reviews.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
                <div class="col-md-4 pt-lg-5 mt-5">
                    <img src="{{ asset('user/img/2667824-1-1536x956.jpg') }}" alt=""
                        class="col-md-12 col-sm-12 mt-2" style="width:100%;height:auto;">
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-4 pt-lg-5 mt-5">
                    <img src="{{ asset('user/img/517381-PILIBT-271-e1641140778457-1536x1137.jpg') }}" alt=""
                        class="col-md-12 col-sm-12 mt-2" style="width:100%;height:auto;">
                </div>
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">Sales Funnel</h1>
                        <p class="mb-4">At GMS, we’re solely focused on helping you design and implement the best sales
                            funnel possible for your business. We work with you and your team to understand where the key
                            areas of opportunity are in your marketing and sales funnels, how we can implement better
                            systems, improve your efficiency with automation and convert more of your leads into high-value
                            sales and repeat customers.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">CRO</h1>
                        <p class="mb-4">Getting visitors to your site is only half the battle. Conversion optimization
                            ensures your site is primed to turn them into customers. Move more page visitors to the bottom
                            of the sales funnel and increase your conversion rate with GMS’s CRO services. Our digital
                            marketing company optimizes your website for mobile and voice search, creates clutter-free
                            landing pages, places verified payment systems and simplifies your site navigation to promote
                            better conversions.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
                <div class="col-md-4 pt-lg-5 mt-5">
                    <img src="{{ asset('user/img/1000_F_288707411_CYGfs7oXG1iuxM9FtDB16aaZ64gxzhn1-e1641203259602.jpg') }}"
                        alt="" class="col-md-12 col-sm-12 mt-2" style="width:100%;height:auto;">
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-6 pt-lg-5 mt-5">
                    <img src="{{ asset('user/img/2516-1536x683.jpg') }}" alt="" class="col-md-12 col-sm-12 mt-5"
                        style="width:100%;height:auto;">
                </div>
                <div class="col-md-4 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">Creative Studio</h1>
                        <p class="mb-4">Compelling content on the world’s
                            most active platforms.
                        <ol>
                            <li>Copywriting</li>
                            <li>User-Generated Content</li>
                            <li>Graphic Design & Illustration</li>
                            <li>Video Editing</li>
                            <li>Video Production</li>
                            <li>Brand Performance Videos</li>
                            <li>At-Home Creator Videos</li>
                        </ol>
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-4 pt-lg-5 mt-5">
                    <img src="{{ asset('user/img/3900328-1536x1536.jpg') }}" alt=""
                        class="col-md-12 col-sm-12 mt-2" style="width:100%;height:auto;">
                </div>
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">Appointment Setting</h1>
                        <p class="mb-4">Over the past decade, we’ve perfected the art of B2B lead generation using our
                            B2B appointment setting service. Through phone, email, social, and web, we’ve proven time and
                            again that we can plug any sale into our system and generate the desired outcome. Our
                            finely-tuned processes will consistently deliver qualified sales opportunities to your closers
                            so that they can stay laser-focused on interested prospects. Working with our team of experts,
                            you’ll meet with qualified B2B companies through our proven appointment-setting methods.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">BUSINESS CONSULTING</h1>
                        <p class="mb-4">Our Business Consulting Services are structured to address a company’s end-to-end
                            business needs. We provide comprehensive services to support your business by leveraging
                            strategy to drive people, process, information and technology considerations.

                            We can guide you to a Business Anywhere future — one where every interaction is smart and
                            seamless, every process is fully automated and paperless, and everyone is ready for whatever the
                            future holds.
                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Book a Strategy call</a>
                    </div>
                </div>
                <div class="col-md-4 pt-lg-5 mt-5">
                    <img src="{{ asset('user/img/20611-1536x1096.jpg') }}" alt=""
                        class="col-md-12 col-sm-12 mt-2" style="width:100%;height:auto;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
