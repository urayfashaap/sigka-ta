<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/png" href="{{ url('/frontend/images/logo.png') }}">
    <title>Data Pemantauan SIGKA</title>
    @include('includes.frontend.petadata.style')
    @yield('includes.frontend.petadata.style')
</head>

<body id="page-top">
    @include('includes.frontend.petadata.navbar')
    @yield('content')
    <footer class="bg-black text-center py-5">
        @include('includes.frontend.petadata.footer ')
    </footer>

    @include('includes.frontend.petadata.script')
</body>

</html>
