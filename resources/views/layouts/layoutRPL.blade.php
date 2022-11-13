<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/javascript.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('style')
    @yield('head')
    <title>Home</title>
</head>

<nav class="navbar is-fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <a href="" class="navbar-item has-text-white title is-size-4 mb-0">Toko Tugas</a>
                <a class="navbar-burger mb-0" id="burger">
                    <span class="has-text-white"></span>
                    <span class="has-text-white"></span>
                    <span class="has-text-white"></span>
                </a>
            </div>
            <div class="navbar-menu" id="navbar-links">
                <div class="navbar-end">
                    <!-- <a class="navbar-item pb-0">
                        <figure class="image is-16x16"><img src="foto/Group 27.png" alt=""></figure>
                    </a> -->
                    <a href="#home" class="navbar-item has-text-white">Home</a>
                    <a href="#about" class="navbar-item has-text-white">About</a>
                    <a href="#service" class="navbar-item has-text-white">Services</a>
                    <a href="#contact" class="navbar-item has-text-white">Contact</a>
                    <a class="navbar-item pb-0">
                        <figure class="image is-16x16"><img src="foto/Group 9.png" alt=""></figure>
                    </a>
                </div>
            </div>
        </div>
    </nav>

<body>
    <div class="containerRPL">
        @yield('content')
    </div>
</body>
</html>