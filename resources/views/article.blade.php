<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - Feryxz Developer</title>

    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/unicons.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/owl.theme.default.min.css')}}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{asset('dist/css/tooplate-style.css')}}">
</head>

<body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/home"><i class='uil uil-user'></i> Feryxz Dev</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="/absen" class="nav-link"><span data-hover="Home">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/article" class="nav-link"><span data-hover="Article">Article</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Resume">Resume</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a href="/contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                        <div class="color-mode d-lg-flex justify-content-center align-items-center">
                            <i class="color-mode-icon"></i>
                            Color mode
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="mb-4 text-center">Laravel Framework</h2>
                    <div style="text-align: center;">
                        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400px" alt="">
                    </div>
                    <div style="text-align: justify;">
                        <p>Laravel adalah salah satu Framework PHP yang paling populer dan paling banyak digunakan di seluruh dunia dalam membangun aplikasi web mulai dari proyek kecil hingga besar. Framework ini banyak digunakan oleh Web Developer karena kinerja, fitur, dan skalabilitas nya.

                            Framework ini mengikuti struktur MVC (Model View Controller), MVC adalah sebuah metode aplikasi dengan memisahkan data dari tampilan berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.

                            Dengan menggunakan struktur MVC maka membuat laravel mudah untuk dipelajari dan mempercepat proses pembuatan prototipe aplikasi web. Framework ini juga menyediakan fitur bawaan seperti otentikasi, mail, perutean, sesi, dan daftar berjalan.

                            Framework ini banyak disukai oleh para web developer, Sesuai sedikit penjelasan diatas. Kelebihan lainnya yaitu Laravel sangat mudah untuk disesuaikan, Karena kemudahan itulah kamu dapat membuat suatu struktur proyek kamu sendiri yang memenuhi permintaan aplikasi web kamu.</p>
                        <h4>Fitur-Fitur pada Laravel</h4>

                        <p>Banyak sekali fitur yang tersedia pada PHP Framework modern ini, Berikut ini fitur framework Laravel yang membedakan antara framework php ini dari framework lainnya. Apa saja fitur utama laravel?
                        </p>
                        <ol>
                            <li>Dependency Management, Adalah sebuah fitur yang berguna untuk memahami fungsi wadah layanan (IoC) memungkin objek baru dihasilkan dengan pembalikan controller dan merupakan bagian inti untuk mempelajari aplikasi web modern.
                            </li>
                            <li>Modularity, adalah sejauh mana sebuah komponen aplikasi web dapat dipisahkan dan digabungkan kembali. Modularitas dapat membantu kamu untuk mempermudah proses update, Bukan hanya itu, Dalam membangun dan mengembangkan website, fitur ini memungkinkan kamu untuk menyempurnakan dan meningkatkan fungsionalitas dari web tersebut.</li>
                            <li>Authentication, adalah bagian integral dari aplikasi web modern, Laravel menyediakan otentikasi di luar kotak, dengan menjalankan perintah sederhana. Kamu juga dapat membuat sebuah sistem yang otentikasinya berfungsi secara penuh dan proses konfigurasi otentikasi sudah berjalan secara otomatis.</li>
                            <li>Caching, adalah sebuah teknik untuk menyimpan data di lokasi penyimpanan sementara dan dapat diambil dengan cepat saat dibutuhkan. Dalam laravel, hampir semua data caching berasal dari tampilan ke rute, Sehingga dapat mengurangi waktu pemrosesan dan meningkatkan kinerja.</li>
                            <li>Routing, Routing Laravel dapat digunakan untuk membuat aplikasi yang tenang dengan mudah. Dalam framework ini semua request dipetakan dengan bantuan rute. Kamu juga dapat mengelompokkan rute, menamainya, menerapkan filter pada mereka dan mengikat data model Anda kepadanya.</li>
                            <li>Restful Controller, Adalah sebuah fitur yang berfungsi memisahkan logika dalam melayani HTTP GET and POST. Kamu juga dapat membuat pengontrol sumber daya yang dapat digunakan untuk membuat CRUD dengan mudah.</li>
                            <li>Testing and Debugging, Laravel hadir dengan menggunakan PHPUnit di luar kotak yang berfungsi untuk menguji aplikasi kamu. Framework ini dibangun dengan pengujian dalam pikiran sehingga mendukung pengujian dan debugging terlalu banyak.</li>
                            <li>Template Engine, Blade adalah template engine Laravel, Blade berfungsi untuk menyediakan sejumlah fungsi pembantu untuk memformat data kamu dalam bentuk tampilan.</li>
                            <li>Configuration Management Features, Dalam laravel semua file konfigurasi kamu disimpan di dalam direktori config, Kamu dapat mengubah setiap konfigurasi yang tersedia.</li>
                            <li>Eloquent ORM, Laravel berbasis pada Eloquent ORM yang menyediakan dukungan untuk hampir semua mesin basis data. Fitur ini juga berfungsi untuk menjalankan berbagai operasi database di dalam website dan mendukung berbagai sistem database seperti MySQL dan SQLite.</li>
                        </ol>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <!-- <section class="contact py-5" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mr-lg-5 col-12">
                    <div class="google-map w-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.558402180099!2d-73.99373482142036!3d40.75895421922642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855b8fb3083%3A0xa0f9aef176042a5c!2sTheater+District%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2smm!4v1549875377188" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                        <div class="contact-info-item">
                            <h3 class="mb-3 text-white">Say hello</h3>
                            <p class="footer-text mb-0">010 020 0960</p>
                            <p><a href="mailto:hello@company.co">hello@company.co</a></p>
                        </div>

                        <ul class="social-links">
                            <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                            <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                            <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="contact-form">
                        <h2 class="mb-4">Interested to work together? Let's talk</h2>

                        <form action="" method="get">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                                </div>

                                <div class="col-12">
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                                </div>

                                <div class="ml-lg-auto col-lg-5 col-12">
                                    <input type="submit" class="form-control submit-btn" value="Send Button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <!-- FOOTER -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <p class="copyright-text text-center">Copyright &copy; 2021 Feryxz Dev . All rights reserved</p>
                    <p class="copyright-text text-center">Designed by <a rel="nofollow" href="#">Feryxz Dev</a></p>
                </div>

            </div>
        </div>
    </footer>

    <script src="{{asset('dist/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('dist/js/popper.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dist/js/Headroom.js')}}"></script>
    <script src="{{asset('dist/js/jQuery.headroom.js')}}"></script>
    <script src="{{asset('dist/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('dist/js/smoothscroll.js')}}"></script>
    <script src="{{asset('dist/js/custom.js')}}"></script>

</body>

</html>