<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.1.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('custom_front_office_css/app.css') }}">
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>
<script src="{{ asset('bootstrap-5.1.1-dist/js/bootstrap.bundle.js') }}"></script>
</html>