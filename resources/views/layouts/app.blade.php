<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LAYFORMATION')</title>
    <!-- Liens vers tes styles CSS -->
</head>
<body>
    <!-- Menu de navigation -->
    @include('partials.navbar')

    <!-- Contenu principal -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')
</body>
</html>