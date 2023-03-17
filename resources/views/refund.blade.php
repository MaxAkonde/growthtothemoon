@extends('layouts.user')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Refund Policy</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Refund Policy</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            {{-- <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Contact Us</p>
                <h1 class="display-5 mb-5">Need Our Expert Help? We're Here!</h1>
            </div> --}}
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="ft_com_div ft_com_box">
                        <ul data-listtype="order" class="ff_lg_ul" id="igrtg">
                            <li class="ft_lg_li"><span class="ft_li_inner">We do no Offer Refund Below $1500 service
                                    charge.</span></li>
                            <li class="ft_lg_li"><span class="ft_li_inner">If we fail to deliver Quality Leads or
                                    Appointments. We give you a Month for Absolutely Free.</span></li>
                            <li class="ft_lg_li"><span class="ft_li_inner">Refund Amount will be credited to your bank
                                    account within 10 Business Days.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
