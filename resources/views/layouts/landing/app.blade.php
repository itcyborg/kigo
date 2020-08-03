<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

   @include('layouts.landing.styles')

</head>

<body>
@include('layouts.landing.topnav')

@yield('content')

<!-- Footer -->
@include('layouts.landing.footer')

<!--scripts-->
@include('layouts.landing.scripts')
</body>
</html>
