@extends('front-office.layouts.app')

@section('content')
<section id="login" class="area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> 
                        <h2> 
                            @php $locale = session()->get('locale'); @endphp
                            @if($locale == 'mg' || $locale == 'fr') 
                                {{ __('all.sign-up') }}
                                {{ isset($url) ? ucwords($url) : ""}} 
                            @else
                                {{ isset($url) ? ucwords($url) : ""}} 
                                {{ __('all.sign-up') }}
                            @endif
                        </h2>
                    </div>

                    <div class="card-body">
                        {{-- <form method="POST" action="{{ route('register') }}">
                            @csrf --}}

                            @isset($url)
                                <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                            @else
                                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @endisset
                                @csrf
                            
                            @if ($url == 'guide' || $url == 'touriste')
                                <div class="form-group row">
                                    <label for="pseudo" class="col-md-4 col-form-label text-md-right">{{ __('all.pseudo') }}</label>

                                    <div class="col-md-6 mb-4">
                                        <input id="pseudo" type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="pseudo" autofocus>

                                        @error('pseudo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('all.name') }}</label>
                                    
                                    <div class="col-md-6 mb-4">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('all.email') }}</label>

                                <div class="col-md-6 mb-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('all.password') }}</label>

                                <div class="col-md-6 mb-4">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('all.confirm-password') }}</label>

                                <div class="col-md-6 mb-4">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 mb-4 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('all.sign-up') }}
                                    </button>
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
