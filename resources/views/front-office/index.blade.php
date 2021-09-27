@extends('front-office.layouts.app')
@section('content')

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
            <div class="grand-title">
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
            <div class="grand-title">
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
            <div class="grand-title">
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

@endsection