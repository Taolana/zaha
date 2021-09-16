<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Zaha admin login</title>


    

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('custom_back_office_css/bootstrap-5.1.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('custom_back_office_css/app.css') }}" rel="stylesheet">
  </head>
  <body class="text-center login-admin-page">
    
<main class="form-signin">
    @isset($url)
    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
    @endisset
          @csrf

    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" 
	  class="form-control @error('email') is-invalid @enderror" 
	  id="floatingInput" 
	  value="{{ old('email') }}" 
	  required 
	  autocomplete="email" 
	  autofocus 
	  name="email"
	  placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
    </div>
    <div class="form-floating">
		<input type="password" 
		id="floatingPassword" 
		class="form-control @error('password') is-invalid @enderror" 
		name="password" 
		required 
		autocomplete="current-password"
		>
      	<label for="floatingPassword">Password</label>
		@error('password')
			<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		  </span>
	  	@enderror
    </div>

    <div class="checkbox mb-3">
      <label>
        <input 
		type="checkbox" 
		value="remember-me"
		class="form-check-input" 
		type="checkbox" 
		name="remember" 
		id="remember" {{ old('remember') ? 'checked' : '' }}
		> Remember me
      </label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
	@if (Route::has('password.request'))
		<a class="btn btn-link" href="{{ route('password.request') }}">
			{{ __('Forgot Your Password?') }}
		</a>
	@endif
    <p class="mt-5 mb-3 text-muted">&copy; 2021 {{ config('app.name', 'Laravel') }}</p>
  </form>
</main>


    
  </body>
</html>
