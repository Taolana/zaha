<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('custom_back_office_css/bootstrap-5.1.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom_back_office_css/app.css') }}">
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex align-items-center profile">
            <div class="flex-shrink-0 dropdown">
                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                {{-- <img src="https://github.com/mdo.png" alt="{{ Auth::guard('admin')->user()->name }}" width="32" height="32" class="rounded-circle"> --}}
                
                @isset(Auth::guard('admin')->user()->name)
                    {{ Auth::guard('admin')->user()->name }}
                    @else
                    {{ Auth::guard('moderateur')->user()->name }}
                @endisset
                </a>
                
                <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Status : active</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                          <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <p class="status_owner">Connected as: 
                        @isset(Auth::guard('admin')->user()->name)
                            {{ Auth::guard('admin')->user()->name }}
                            @else
                            {{ Auth::guard('moderateur')->user()->name }}
                        @endisset
                    </p>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Activities</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                          <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                            Home
                          </button>
                          <div class="collapse show" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li><a href="#" class="link-dark rounded">Overview</a></li>
                              <li><a href="#" class="link-dark rounded">Updates</a></li>
                              <li><a href="#" class="link-dark rounded">Reports</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="mb-1">
                          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Dashboard
                          </button>
                          <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li><a href="#" class="link-dark rounded">Overview</a></li>
                              <li><a href="#" class="link-dark rounded">Weekly</a></li>
                              <li><a href="#" class="link-dark rounded">Monthly</a></li>
                              <li><a href="#" class="link-dark rounded">Annually</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="mb-1">
                          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            Orders
                          </button>
                          <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li><a href="#" class="link-dark rounded">New</a></li>
                              <li><a href="#" class="link-dark rounded">Processed</a></li>
                              <li><a href="#" class="link-dark rounded">Shipped</a></li>
                              <li><a href="#" class="link-dark rounded">Returned</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                            Account
                          </button>
                          <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                              <li><a href="#" class="link-dark rounded">New...</a></li>
                              <li><a href="#" class="link-dark rounded">Profile</a></li>
                              <li><a href="#" class="link-dark rounded">Settings</a></li>
                              <li><a href="#" class="link-dark rounded">Sign out</a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
<script src="{{ asset('custom_back_office_css/bootstrap-5.1.1-dist/js/bootstrap.bundle.js') }}"></script>
@yield('js')
</html>