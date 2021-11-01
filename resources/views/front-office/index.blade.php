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
                <img src="{{url('/images/andasibe.jpg')}}" alt="Image"/>
                <div class="container">
                    <div class="carousel-caption ">
                        <h2>Andasibe</h2>
                        <span><p>Faites un tour à l'Est ...</p></span>
                        <p><a class="btn btn-lg btn-danger" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('/images/bemaraha.jpg')}}" alt="Image"/>

                <div class="container">
                    <div class="carousel-caption">
                        <h2>Tsingy de Bemaraha</h2>
                        <span><p>Visitez le Tsingy ... </p></span>


                        <p><a class="btn btn-lg btn-danger" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('/images/Isalo.jpg')}}" alt="Image"/>

                <div class="container">
                    <div class="carousel-caption">
                        <h2>Isalo</h2>
                        <span><p>Beautiful place ...</p></span>
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
                                <img width="100%" height="250" src="{{url('/images/andasibe.jpg')}}" alt="Image"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">Andasibe</h3>
                                <p class="card-text ">Andasibe est une commune rurale malgache située dans le district de Moramanga de la partie sud-est de la région d'Alaotra-Mangoro.</p>
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
                                <h3 class="card-title">Alerte aux feux de brousse.</h3>
                                <p class="card-text ">Plus de 10 000 hectares de forêt, ravagés chaque année par le feu. ... Selon les chiffres de la Direction de la revalorisation des ressources forestières auprès du ministère malgache de l'Environnement, 10 000 hectares de forêt sont perdus chaque année à Madagascar à cause des feux de brousse.22 juil. 2021</p>
                                <p class="card-text "><small class="text-muted">Last updated  one day ago</small></p>
                                <h3 class="card-title">Parc National d'Ankarafantsika</h3>
                                <p class="card-text ">Le parc national d'Ankarafantsika est un parc national situé dans le nord-ouest de Madagascar, dans la région de Boeny. ... Ankarafantsika est connu pour ses lacs, derniers refuges d'espèces phares telles que le pygargue de Madagascar, le Propithèque de Coquerel et les microcèbes. L'ethnie dominante est le peuple Sakalava.</p>
                                <p class="card-text "><small class="text-muted">Last updated  one day ago</small></p>
                                <h3 class="card-title">Réserve Naturelle Intégrale de Lokobe</h3>
                                <p class="card-text ">Une visite en petit comité avec des guides de nature très compétent, capable de trouver le moindre petit lémurien . C'était vraiment passionnant.</p>
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
                    <img height="100%" width="100%"  src="{{url('/images/train.jpg')}}" alt="Image"/>
                </div>
                <div class="text-rank">
                    20 vues
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-rank">
                    <img height="100%" width="100%"  src="{{url('/images/isalo_2.jpg')}}" alt="Image"/>
                </div>
                <div class="text-rank">
                    1111vues
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-rank">
                    <img height="100%" width="100%"  src="{{url('/images/ankarafantsika-21.jpg')}}" alt="Image"/>
                </div>
                <div class="text-rank">
                    1111vues
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
