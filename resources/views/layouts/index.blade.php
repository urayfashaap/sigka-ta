<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    @include('includes.frontend.style')
</head>
<!-- ------------------------Logo dan Banner-------------------- -->

@include('includes.frontend.hero')
<!-- -----------------------SIDENAV---------------------------- -->

@include('includes.frontend.sidebar')

@yield('content-beranda')
<!-- --------------------------FOOTER------------------------------------ -->
@include('includes.frontend.footer')


@include('includes.frontend.script')

</body>

</html>
