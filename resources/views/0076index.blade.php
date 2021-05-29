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
                        <a href="/home" class="nav-link"><span data-hover="Home">Home</span></a>
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

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">Welcome to <span class="mobile-block">my portfolio website!</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hey folks, I'm</span>
                            <div class="animated-info">
                                <span class="animated-item">Feryxz Dev</span>
                                <span class="animated-item">Programmer</span>
                                <span class="animated-item">UI Specialist</span>
                            </div>
                        </h1>

                        <p>Building a successful product is a challenge. I am highly energetic in user experience design, interfaces and web development.</p>

                        <div class="custom-btn-group mt-4">
                            <a href="https://feryxz.com/bio" target="_blank" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>
                            <a href="https://feryxz.com/bio" target="_blank" class="btn custom-btn custom-btn-bg custom-btn-link">My Portofolio</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="{{asset('dist/images/undraw/undraw_software_engineer_lvl5.svg')}}" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
        <div class="container">

            <div class="row">
                <div class="col-lg-11 text-center mx-auto col-12">

                    <div class="col-lg-8 mx-auto">
                        <h2>Things I have designed for digital media agencies</h2>
                    </div>

                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="project-info">
                                <img src="{{asset('dist/images/project/project-image01.png')}}" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <img src="{{asset('dist/images/project/project-image02.png')}}" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <img src="{{asset('dist/images/project/project-image03.png')}}" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <img src="{{asset('dist/images/project/project-image04.png')}}" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                                <img src="{{asset('dist/images/project/project-image05.png')}}" class="img-fluid" alt="project image">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <style>
        input[type=text],
        select {
            width: 15%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }

        .button {
            /* width: 100%; */
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none
        }

        .button-hijau {
            background-color: #4CAF50;
        }

        .button-biru {
            background-color: #03A9F4;
        }

        .button-orange {
            background-color: #eda215;
        }

        .button-merah {
            background-color: #ed4015;
        }
    </style>
    <h3 style="text-align: center;">Data Absensi</h3>
    <div style="text-align: right;">
        <form action="/absen/show" method="GET">
            <input type="text" name="cari" placeholder="Cari Data .." value="{{ old('cari') }}">
            <input type="submit" class="button button-hijau" value="CARI">
        </form>
    </div>
    <br><br>
    <div style="width: 100%;">
        <table id="customers">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Absen</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->absen }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal)->format("d-m-Y") }}</td>
                </tr>
                @endforeach
            </tbody>
    </div>
    </section>

    </table>
    </div>

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