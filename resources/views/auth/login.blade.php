@extends('front-office.layouts.app')

@section('content')
<section id="login" class="area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">  
                        <h2>
                            @php $locale = session()->get('locale'); @endphp
                            @if($locale == 'mg' || $locale == 'fr') 
                                {{ __('all.login') }}
                                {{ isset($url) ? ucwords($url) : ""}} 
                                @else
                                {{ isset($url) ? ucwords($url) : ""}} 
                                {{ __('all.login') }}
                                @endif
                        </h2>
                    </div>

                    <div class="card-body">
                        {{-- <form method="POST" action="{{ route('login') }}">
                            @csrf --}}
                        @isset($url)
                            <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('all.login') }}">
                        @else
                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('all.login') }}">
                        @endisset
                            @csrf

                            <div class="form-group row mb-4">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('all.email') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row mb-4">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('all.password') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        
                                        <label class="form-check-label" for="remember">
                                            {{ __('all.remember-me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('all.login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('all.forgot-password') }}
                                        </a>
                                    @endif
                                    @isset($url)
                                        <a class="btn btn-link" href="{{ url("register/$url") }}">
                                            {{ __('all.sign-up') }}
                                        </a>
                                    @endisset
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
