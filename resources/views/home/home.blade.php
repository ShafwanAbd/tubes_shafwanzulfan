@extends('layouts.layoutRPL')

@section('content')
<body>
    <nav class="navbar is-fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <a href="" class="navbar-item has-text-white title is-size-4 mb-0">judulnyaIni</a>
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


    <!-- home section -->
    <section id="home" class="section sameBg">
        <div class="container mt-6">
            <div class="columns is-vcentered is-flex-desktop-only is-flex-direction-row-reverse">
                <div class="column is-4-tablet">
                    <figure class="image is-square">
                        <img class="is-rounded has-text-centered" src="foto/image 1.png" alt="">
                    </figure>
                </div>
                <div class="column is-8-tablet">
                    <p class="title is-size-2-desktop is-size-3-tablet is-size-5-mobile mb-0">Kesulitan Mengerjakan Tugas?
                    </p>
                    <p class="title is-size-2-desktop is-size-3-tablet is-size-5-mobile">Tidak Ada Waktu?
                    </p>
                    <div class="columns">
                        <div class="column is-6 p-0">
                        </div>
                        <div class="column is-6">
                            <div class="control has-text-centered">
                                <button class="button is-rounded is-size-4-desktop is-size-5-tablet is-size-6-mobile has-text-white mt-5">Login
                                    Sekarang</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home2" class="section sameBg">
        <div class="container">
            <p class="title is-size-2-desktop is-size-3-tablet is-size-5-mobile has-text-centered mb-0">Kami Punya Solusinya!
            </p>
            <p class="title is-size-2-desktop is-size-3-tablet is-size-5-mobile has-text-centered">Serahkan Saja Tugas Anda Pada Kami
            </p>
            <div class="columns is-vcentered mt-6">
                <div class="column is-12-mobile is-4-tablet">
                    <div class="card is-shadowless sameBg">
                        <div class="card-content has-text-centered">
                            <figure class="image is-128x128 is-inline-block">
                                <img class="is-rounded" src="foto/image 1.png" alt="">
                            </figure>
                            <p class="title is-size-4-tablet is-size-6-mobile mt-5">Harga Murah</p>
                        </div>
                    </div>
                </div>
                <div class="column is-12-mobile is-4-tablet">
                    <div class="card sameBg is-shadowless">
                        <div class="card-content has-text-centered">
                            <figure class="image is-128x128 is-inline-block">
                                <img class="is-rounded" src="foto/image 1.png" alt="">
                            </figure>
                            <p class="title is-size-4-tablet is-size-6-mobile mt-5 has-text-centered">Penjoki Handal</p>
                        </div>
                    </div>
                </div>
                <div class="column is-12-mobile is-4-tablet">
                    <div class="card sameBg is-shadowless">
                        <div class="card-content has-text-centered">
                            <figure class="image is-128x128 is-inline-block">
                                <img class="is-rounded has-text-centered" src="foto/image 1.png" alt="">
                            </figure>
                            <p class="title is-size-4-tablet is-size-6-mobile mt-5 has-text-centered">Transaksi Aman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- about section -->
    <section class="section" id="about">
        <div class="container">
            <p class="title is-size-2-desktop mb-6 is-size-3-tablet is-size-4-mobile has-text-weight-semibold has-text-centered">
                About Us</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, sed deserunt provident recusandae id cumque architecto nulla quam reprehenderit officiis nam repudiandae impedit dolor tempora quasi eius mollitia similique? Esse? Qui accusamus
                alias quo labore temporibus est assumenda sint repellendus quam? Aperiam asperiores facilis, ipsam delectus, doloremque molestias voluptatem rerum tempore vero ea deserunt suscipit. Delectus tempora iste ipsam ipsa?</p>
            <p class="subtitle has-text-centered has-text-weight-medium my-6 is-size-4-desktop is-capitalized">dengan pemesanan yang mudah</p>
            <div class="columns is-vcentered">
                <div class="column has-text-centered is-size-3-desktop">
                    <figure class="image">
                        <img src="foto/images.jpeg" alt="">
                    </figure>
                    <p class="is-size-5 mt-3">harga murah</p>
                </div>
                <div class="column is-size-1 has-text-centered">
                    <figure class="image is-32x32 is-inline-block arrow">
                        <img src="foto/Vector.png" alt="">
                    </figure>
                </div>
                <div class="column has-text-centered is-size-3-desktop">
                    <figure class="image">
                        <img src="foto/images.jpeg" alt="">
                    </figure>
                    <p class="is-size-5 mt-3">harga murah</p>
                </div>
                <div class="column is-size-1 has-text-centered">
                    <figure class="image arrow is-32x32 is-inline-block">
                        <img src="foto/Vector.png" alt="">
                    </figure>
                </div>
                <div class="column has-text-centered is-size-3-desktop">
                    <figure class="image">
                        <img src="foto/images.jpeg" alt="">
                    </figure>
                    <p class="is-size-5 mt-3">harga murah</p>
                </div>
            </div>
            <div class="columns is-vcentered mt-6">
                <div class="column has-text-centered is-size-3-desktop">
                    <figure class="image">
                        <img src="foto/images.jpeg" alt="">
                    </figure>
                    <p class="is-size-5 mt-3">harga murah</p>
                </div>
                <div class="column is-size-1 has-text-centered">
                    <figure class="image is-32x32 is-inline-block arrow">
                        <img src="foto/Vector.png" alt="">
                    </figure>
                </div>
                <div class="column has-text-centered is-size-3-desktop">
                    <figure class="image">
                        <img src="foto/images.jpeg" alt="">
                    </figure>
                    <p class="is-size-5 mt-3">harga murah</p>
                </div>
                <div class="column is-size-1 has-text-centered">
                    <figure class="image arrow is-32x32 is-inline-block">
                        <img src="foto/Vector.png" alt="">
                    </figure>
                </div>
                <div class="column has-text-centered is-size-3-desktop">
                    <figure class="image">
                        <img src="foto/images.jpeg" alt="">
                    </figure>
                    <p class="is-size-5 mt-3">harga murah</p>
                </div>
            </div>
        </div>
    </section>


    <!-- service section -->
    <section class="section sameBg" id="service">
        <div class="container">
            <p class="title is-size-2-desktop is-size-3-tablet is-size-4-mobile has-text-weight-semibold has-text-centered is-uppercase mb-6">
                Services</p>
            <div class="columns is-vcentered wrap-columns">
                <div class="column is-3-desktop is-6-tablet is-12-mobile">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="is-size-4">Makalah</p>
                            <figure class="image is-128x128 is-inline-block">
                                <img src="foto/images-removebg-preview.png" alt="">
                            </figure>
                            <p class="is-size-5">Mulai dari</p>
                            <p class="is-size-1 has-text-weight-bold has-text-danger">10RB</p>
                            <p class="is-isze-7">*tergantung jumlah halaman dan tingkat kesulitan</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="is-size-4">Makalah</p>
                            <figure class="image is-128x128 is-inline-block">
                                <img src="foto/images-removebg-preview.png" alt="">
                            </figure>
                            <p class="is-size-5">Mulai dari</p>
                            <p class="is-size-1 has-text-weight-bold has-text-danger">10RB</p>
                            <p class="is-isze-7">*tergantung jumlah halaman dan tingkat kesulitan</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="subtittle is-size-4">Makalah</p>
                            <figure class="image is-128x128 is-inline-block">
                                <img src="foto/images-removebg-preview.png" alt="">
                            </figure>
                            <p class="is-size-5">Mulai dari</p>
                            <p class="is-size-1 has-text-weight-bold has-text-danger">10RB</p>
                            <p class="is-isze-7">*tergantung jumlah halaman dan tingkat kesulitan</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="subtittle is-size-4">Makalah</p>
                            <figure class="image is-128x128 is-inline-block">
                                <img src="foto/images-removebg-preview.png" alt="">
                            </figure>
                            <p class="is-size-5">Mulai dari</p>
                            <p class="is-size-1 has-text-weight-bold has-text-danger">10RB</p>
                            <p class="is-isze-7">*tergantung jumlah halaman dan tingkat kesulitan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns is-vcentered wrap-columns">
                <div class="column is-3-desktop is-6-tablet is-12-mobile">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="subtittle is-size-4">Makalah</p>
                            <figure class="image is-128x128 is-inline-block">
                                <img src="foto/images-removebg-preview.png" alt="">
                            </figure>
                            <p class="is-size-5">Mulai dari</p>
                            <p class="is-size-1 has-text-weight-bold has-text-danger">10RB</p>
                            <p class="is-isze-7">*tergantung jumlah halaman dan tingkat kesulitan</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="subtittle is-size-4">Makalah</p>
                            <figure class="image is-128x128 is-inline-block">
                                <img src="foto/images-removebg-preview.png" alt="">
                            </figure>
                            <p class="is-size-5">Mulai dari</p>
                            <p class="is-size-1 has-text-weight-bold has-text-danger">10RB</p>
                            <p class="is-isze-7">*tergantung jumlah halaman dan tingkat kesulitan</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="subtittle is-size-4">Makalah</p>
                            <figure class="image is-128x128 is-inline-block">
                                <img src="foto/images-removebg-preview.png" alt="">
                            </figure>
                            <p class="is-size-5">Mulai dari</p>
                            <p class="is-size-1 has-text-weight-bold has-text-danger">10RB</p>
                            <p class="is-isze-7">*tergantung jumlah halaman dan tingkat kesulitan</p>
                        </div>
                    </div>
                </div>
                <div class="column is-3-desktop is-6-tablet is-12-mobile">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="subtittle is-size-4">Makalah</p>
                            <figure class="image is-128x128 is-inline-block">
                                <img src="foto/images-removebg-preview.png" alt="">
                            </figure>
                            <p class="is-size-5">Mulai dari</p>
                            <p class="is-size-1 has-text-weight-bold has-text-danger">10RB</p>
                            <p class="is-isze-7">*tergantung jumlah halaman dan tingkat kesulitan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- contact section -->
    <div class="section" id="contact">
        <div class="container">
            <p class="title is-size-2-desktop is-size-3-tablet is-size-4-mobile has-text-weight-semibold has-text-centered is-uppercase mb-6">
                Contact</p>
            <div class="columns is-vcentered is-centered mt-6 mx-6">
                <div class="column is-size-6-tablet has-text-centered">
                    <figure class="image is-inline-block is-128x128">
                        <img class="is-rounded bord" src="foto/image 1.png" alt="">
                    </figure>
                    <p class="is-size-5 mt-3">Zulfan Syahidan Alfarra</p>
                    <p class="is-size-5">NPM : 217006099</p>
                    <span class="icon">
                        <i class="fas fa-instagram"></i>
                    </span>
                    <span class="icon">
                        <i class="fas fa-instagram"></i>
                    </span>
                    <span class="icon">
                        <i class="fas fa-instagram"></i>
                    </span>
                </div>
                <div class="column is-size-6-tablet has-text-centered">
                    <figure class="image is-inline-block is-128x128">
                        <img class="is-rounded bord" src="foto/image 1.png" alt="">
                    </figure>
                    <p class="is-size-5 mt-3">Muhammad Shafwan Abdullah</p>
                    <p class="is-size-5">NPM : 217006104</p>
                    <span class="icon">
                        <i class="fas fa-instagram"></i>
                    </span>
                    <span class="icon">
                        <i class="fas fa-instagram"></i>
                    </span>
                    <span class="icon">
                        <i class="fas fa-instagram"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column"></div>
        <div class="column is-size-8">
            <div class="field">
                <label for="" class="label">Name</label>
                <div class="control">
                    <input type="text" class="input" placeholder="e.g Zulfan Alfarra">
                </div>
            </div>
            <div class="field">
                <label for="" class="label">Email</label>
                <div class="control">
                    <input type="email" placeholder="e.g example@gmail.com" class="input">
                </div>
            </div>
            <div class="field">
                <label for="" class="label">Massage</label>
                <textarea class="textarea" placeholder="Massage"></textarea>
            </div>
            <div class="control">
                <button class="button is-rounded has-text-white">Submit</button>
            </div>
        </div>
        <div class="column"></div>
    </div>
    </div>
    </div>


    <!-- footer -->
    <section class="section py-4 bg2">
        <div class="container has-text-centered">
            <footer class="has-text-white">&copy; Copyright 2022 Zulfan & Shafwan</footer>
        </div>
    </section>

    <script src="app.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>
@endsection