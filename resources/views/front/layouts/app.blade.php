<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.partials._headLinks')
</head>

<body>
    @include('front.partials.header')

    @yield('content')

    @include('front.partials.footer')

    @include('front.partials._footerLinks')
</body>

</html>
