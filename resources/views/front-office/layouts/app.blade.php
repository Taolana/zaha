<!DOCTYPE html>
@php $locale = session()->get('locale'); @endphp
<html lang="{{ $locale }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaha</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.1.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom_front_office_css/app.css') }}">
</head>

<body>
    <main>
        <section id="header" class="bg-zaha">
            <nav class="navbar zaha-bg navbar-expand-lg navbar-dark fixed-top shadow" aria-label="Eighth navbar example">
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">{{ __('all.login') }}</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown07">
                                <li><a class="dropdown-item" href="/login/touriste">Touriste</a></li>
                                <li><a class="dropdown-item" href="/login/guide">Guide</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        @yield('content')
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
                    
                    
                    <div class="col-lg-3 ">
                        <div class="zaha-links">
                            <p class="lang-switcher">{{ __('all.languages') }}:</p>
                            <ul class="list">
                                <li> <a class="list-item @if($locale == 'mg') active @endif" href="{{ route('lang', 'mg') }}">Malagasy</a> </li>
                                <li> <a class="list-item @if($locale == 'fr') active @endif" href="{{ route('lang', 'fr') }}">Français</a> </li>
                                <li> <a class="list-item @if($locale == 'en') active @endif" href="{{ route('lang', 'en') }}">Anglais</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="{{ asset('bootstrap-5.1.1-dist/js/bootstrap.bundle.js') }}"></script>
</html>