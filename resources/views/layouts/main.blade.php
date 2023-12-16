<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/icons/lc.png') }}" type="image/x-icon">
    @include('partials.links')
</head>

<body>

    @include('partials.navbar_desktop')

    @yield('content')

    @include('partials.navbar_mobile')
</body>

</html>
