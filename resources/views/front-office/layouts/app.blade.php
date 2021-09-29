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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar"
                        aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navBar">
                        <ul class="navbar-nav me-auto"></ul>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                @guest
                                    <a class="nav-link" href="/">{{ __('all.home') }}</a>
                                @else
                                    @isset(Auth::guard('guide')->user()->pseudo)
                                        <a class="nav-link" href="/guide">{{ __('all.home') }}</a>
                                    @else
                                        <a class="nav-link" href="/touriste">{{ __('all.home') }}</a>
                                    @endisset
                                @endguest
                            </li>
                            <li class="nav-item">
                                @guest
                                    <a class="nav-link"
                                        href="{{ route('guest.places.list') }}">{{ __('all.places') }}</a>
                                @else
                                    @isset(Auth::guard('guide')->user()->pseudo)
                                        <a class="nav-link"
                                            href="{{ route('guide.places.list', 'index') }}">{{ __('all.places') }}</a>
                                    @else
                                        <a class="nav-link"
                                            href="{{ route('touriste.places.list') }}">{{ __('all.places') }}</a>
                                    @endisset
                                @endguest
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('all.news') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown"
                                    aria-expanded="false">

                                    @guest
                                        {{ __('all.login') }}
                                    @endguest
                                    @isset(Auth::guard('touriste')->user()->pseudo)
                                        {{ Auth::guard('touriste')->user()->pseudo }}
                                    @endisset
                                    @isset(Auth::guard('guide')->user()->pseudo)
                                        {{ Auth::guard('guide')->user()->pseudo }}
                                    @endisset

                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown07">
                                    @guest
                                        <li><a class="dropdown-item" href="/login/touriste">Touriste</a></li>
                                        <li><a class="dropdown-item" href="/login/guide">Guide</a></li>
                                    @else
                                        <li>
                                            <h6 class="dropdown-header">You are connected as
                                                @isset(Auth::guard('guide')->user()->pseudo)
                                                    <strong>Guide</strong>
                                                @else
                                                    <strong>Touriste</strong>
                                                @endisset
                                        </li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    @endguest
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
                                <li> <a class="list-item @if ($locale == 'mg') active @endif"
                                        href="{{ route('lang', 'mg') }}">Malagasy</a> </li>
                                <li> <a class="list-item @if ($locale == 'fr') active @endif"
                                        href="{{ route('lang', 'fr') }}">Français</a> </li>
                                <li> <a class="list-item @if ($locale == 'en') active @endif"
                                        href="{{ route('lang', 'en') }}">Anglais</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="{{ asset('bootstrap-5.1.1-dist/js/bootstrap.bundle.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>

</html>
