<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ARP | {{ $title }} </title>
    <link rel="stylesheet" type="text/css" href=" {{ ('bootstrap5/css/bootstrap.min.css') }} ">

</head>

<body>
    
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>

    <script src=" {{ ('boostrap5/js/bootstrap.min.js') }} "></script>

</body>

</html>