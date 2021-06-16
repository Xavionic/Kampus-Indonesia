<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kampus Indonesia</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Kampus Indonesia</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item"><a href="{{ url('/dashboard') }}"
                            class="nav-link js-scroll-trigger">Dashboard</a>
                        @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link js-scroll-trigger">Masuk</a>

                        @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link js-scroll-trigger">Daftar</a>
                        @endif
                        @endauth
                        @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Informasi Seputar Kampus Indonesia</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Website untuk membantu calon mahasiswa menentukan pilihan jurusan dan
                        kampus impian dan menjalani kehidupan perkuliahan lebih baik lagi.</p>
                    <a class="btn btn-primary btn-xl" href="#about">Detail</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Tentang Kami</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Kampus Indonesia - Kami membagikan informasi seputar jurusan dan
                        kampus, media informasi beasiswa, tes minat dan bakat, serta artikel dunia perkuliahan.</p>
                    <a class="btn btn-light btn-xl" href="{{ route('login') }}">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Layanan Kami</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">

                <a class="btn btn-default btn-xl col-lg-3 col-md-6 text-center" href="{{ route('kampus') }}">
                    <div class="mb-2"><i class="fas fa-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Informasi Kampus</h3>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat elementum leo in tristique.</p>
                </a>
                <a class="btn btn-default btn-xl col-lg-3 col-md-6 text-center" href="{{ route('beasiswa') }}">
                    <div class="mb-2"><i class="fas fa-money-check fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Info Beasiswa</h3>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat elementum leo in tristique.</p>
                </a>
                <a class="btn btn-default btn-xl col-lg-3 col-md-6 text-center" href="{{ route('tes') }}">

                    <div class="mb-2"><i class="fas fa-atom fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Tes Minat dan Bakat</h3>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat elementum leo in tristique.</p>
                </a>
                <a class="btn btn-default btn-xl col-lg-3 col-md-6 text-center" href="{{ route('artikel') }}">

                    <div class="mb-2"><i class="fas fa-archive fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Artikel</h3>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat elementum leo in tristique.</p>
                </a>


            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action-->
    {{-- <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
            <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
        </div>
    </section> --}}
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Mari Ketahui Kami Lebih Lanjut</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">Jika perlu bantuan lebih lanjut mengenai website kami, silahkan hubungai
                        kami dinomor berikut
                        atau kirimkan kepada email yang tertera dibawah. Kami akan merespon secepat mungkin.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>0821-1912-2125</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:dotasabili@gmail.com">dotasabili@gmail.com</a>
                </div>
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>0821-1912-2125</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <x-footer />

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>