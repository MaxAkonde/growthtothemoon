<!-- Topbar Start -->
<div class="container-fluid bg-primary text-white d-none d-lg-flex">
    <div class="container py-3">
        <div class="d-flex align-items-center">
            <a href="{{ route('index') }}">
                <h2 class="text-white fw-bold m-0">
                    <img src="{{ asset('user/img/growthtothemoon.png') }}" alt="" style="height: 38.39px;width: 353.63px">
                </h2>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>75 Shelton Str Covent Garden,
                    London</small>
                <small class="ms-4"><i class="fa fa-envelope me-3"></i>helena@growthtothemoon.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+ 44 7436843298</small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2"
                        href="https://instagram.com/growthtothemoonagency?igshid=YmMyMTA2M2Y="><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2"
                        href="https://twitter.com/growthtothemoo?s=21"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2"
                        href="https://www.tiktok.com/@growthtothemoon_agency?_t=8aVCZHJ411J&_r=1"><i
                            class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">
                    <img style="height: 37.76px;" src="{{ asset('user/img/growthtothemoon_black.png') }}" alt="">
                </h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('index') }}" class="nav-item nav-link {{ $active == 'index' ? 'active' : '' }}">Home</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link {{ $active == 'services' ? 'active' : '' }}">Our Services</a>
                    <a href="{{ route('blog') }}" class="nav-item nav-link {{ $active == 'blog' ? 'active' : '' }}">Blog</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ $active == 'contact' ? 'active' : '' }}">Contact</a>
                    <a href="{{ route('privacy') }}" class="nav-item nav-link {{ $active == 'privacy' ? 'active' : '' }}">Privacy</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="https://calendly.com/helenagrowth/1h" class="btn btn-primary rounded-pill py-2 px-3">Book a Discovery call</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
