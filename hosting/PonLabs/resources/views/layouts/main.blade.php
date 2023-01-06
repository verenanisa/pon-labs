<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS Online-->
    <link rel="stylesheet" href="CSS/css1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Pon-Labs | {{ $title }}</title>
    <link href="https://fonts.googleapis.com/css?family=Segoe+UI&display=swap" rel="stylesheet">

</head>

<body>
    @include('partials.navbar1')
    <div class="showcontent container-fluid p-0 mb-5" style="position: absolute; z-index: 1;top: 200; background-color: #F8F8F8">
        <!-- <div class="container-fluid"> -->
        @yield('container')
        @include('partials.footer')
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>