@extends('front-office.layouts.app')
@section('content')
<section id="header" class="bg-zaha shadow">
    <nav class="navbar zaha-bg navbar-expand-lg navbar-dark fixed-top" aria-label="Eighth navbar example">
        <div class="container">
            <a class="navbar-brand" href="#">Zaha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav me-auto"></ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('all.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('all.places') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >{{ __('all.news') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >{{ __('all.login') }}</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</section>
<section id="caroussel">

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption ">
                        <h2>LOREM IPSUM</h2>
                        <span><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, nemo aliquam. Rem, odit nulla? Sint ea dolor corrupti alias amet itaque ut unde ad iusto. Quaerat expedita neque odit earum!</p></span>
                        <p><a class="btn btn-lg btn-danger" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h2>LOREM IPSUM</h2>
                        <span><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, nemo aliquam. Rem, odit nulla? Sint ea dolor corrupti alias amet itaque ut unde ad iusto. Quaerat expedita neque odit earum!</p></span>
                        
                        
                        <p><a class="btn btn-lg btn-danger" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h2>LOREM IPSUM</h2>
                        <span><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, nemo aliquam. Rem, odit nulla? Sint ea dolor corrupti alias amet itaque ut unde ad iusto. Quaerat expedita neque odit earum!</p></span>
                        <p><a class="btn btn-lg btn-danger" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden ">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section id="content" class="zaha-content">
    <div class="container">
        <div class="row">
            <div class="weekly-title">
                <h1 class="">{{ __('all.weekly-place') }}</h1>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="weekly-image">
                                <svg class="bd-placeholder-img" width="100%" height="250"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%"
                                        fill="#dee2e6" dy=".3em">Image</text>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">The famous</h3>
                                <p class="card-text ">This is a picture to show us the news everyday</p>
                                <p class="card-text "><small class="text-muted">Last updated  one day ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="weekly-title">
                <h1 class="">{{ __('all.news') }}</h1>
            </div>
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">The famous</h3>
                                <p class="card-text ">This is a picture to show us the news everyday</p>
                                <p class="card-text "><small class="text-muted">Last updated  one day ago</small></p>
                                <h3 class="card-title">The famous</h3>
                                <p class="card-text ">This is a picture to show us the news everyday</p>
                                <p class="card-text "><small class="text-muted">Last updated  one day ago</small></p>
                                <h3 class="card-title">The famous</h3>
                                <p class="card-text ">This is a picture to show us the news everyday</p>
                                <p class="card-text "><small class="text-muted">Last updated  one day ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="weekly-title">
                <h1 class="">{{ __('all.top-place') }}</h1>
            </div>
        </div>
        <div class="row images-rank">
            <div class="col-md-4">
                <div class="image-rank">
                    image
                </div>
                <div class="text-rank">
                    1111vues
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-rank">
                    image
                </div>
                <div class="text-rank">
                    1111vues
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-rank">
                    image
                </div>
                <div class="text-rank">
                    1111vues
                </div>
            </div>
        </div>
    </div>
</section>
<section id="footer" class="zaha-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="zaha-links">
                    <ul class="list">
                        <li> <a class="list-item" href="#">{{ trans('all.home') }}</a> </li>
                        <li> <a class="list-item" href="#">{{ __('all.news') }}</a> </li>
                        <li> <a class="list-item" href="#">{{ __('all.places') }}</a> </li>
                        <li> <a class="list-item" href="#">{{ __('all.about-us') }}</a> </li>
                        <li> <a class="list-item" href="#">{{ __('all.contact-us') }}</a> </li>
                    </ul>
                </div>
            </div>
            @php $locale = session()->get('locale'); @endphp
            
            <div class="col-lg-3 ">
                <div class="zaha-links">
                    <p class="lang-switcher">{{ __('all.languages') }}:</p>
                    <ul class="list">
                        <li> <a class="list-item @if($locale == 'mg') active @endif" href="lang/mg">Malagasy</a> </li>
                        <li> <a class="list-item @if($locale == 'fr') active @endif" href="lang/fr">Français</a> </li>
                        <li> <a class="list-item @if($locale == 'en') active @endif" href="lang/en">Anglais</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection