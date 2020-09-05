<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/style1.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <link rel="icon" type="image/png" href="favicon.ico" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>AlifmaDev | Home</title>
</head>

<body>
    <!-- Start Header -->
    <header class="navbar navbar-expand navbar-dark bd-navbar">
        <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
            <a class="navbar-brand p-0 mr-2" href="/" aria-label="Bootstrap">
                <img src="https://i.ibb.co/BzxLZ7j/icon2.png" width="30px" height="30px" class="d-inline-block align-center" alt="" loading="lazy" />
                <a class="nnt navbar-brand font-weight-bold" href="#">&nbsp; Alifma<span class="oren nnt">Dev</span></a>
            </a>
            <div class="manjang navbar-nav-scroll order-2 order-md-0 d-flex justify-content-center justify-content-md-start mt-1 mt-md-0">
                <ul class="navbar-nav bd-navbar-nav flex-row py-2 py-md-0 text-center">
                    <li class="nav-item">
                        <a class="nnt nav-link font-weight-bold" href="<?= base_url('/profile'); ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nnt nav-link font-weight-bold " href="<?= base_url('/project'); ?>">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nnt nav-link font-weight-bold " href="<?= base_url('/blog'); ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nnt nav-link font-weight-bold " href="<?= base_url('/contact'); ?>">Contact</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-sm-auto"></ul>
        </nav>
    </header>
    <!-- End Header -->
    <!-- Start Main -->
    <main class="bd-masthead mb-3 mb-md-5">
        <div class="container px-4 px-md-3">
            <div class="row align-items-lg-center">
                <div class="col-8 mx-auto col-md-4 order-md-2 col-lg-5">
                    <img src="/img/frnt1.png" height="533" class="img-fluid mb-3 mb-md-0" alt="" />
                </div>
                <div class="col-md-8 order-md-1 col-lg-7 text-center text-md-left">
                    <h2 class="oren nnt">Hi, I'm Alif Maulana Arifin</h2>
                    <h1 class="job mb-3 text-white">
                        Application Developer and Mathematics Educator
                    </h1>
                    <p class="desc mb-4 text-white" style="text-align: justify">
                        I'm from Banten Province, Indonesia and I've been working as
                        <span class="hl">Application Developer and Educator</span> for
                        more than 2 years. My major is
                        <span class="hl">Mathematics Education</span> and I currently
                        working as a Mathematics Teacher at Nurul Huda Vocational
                        Highschool since early 2020. I've been working with an education
                        platform such as
                        <span class="hl"><a id="link" href="http://progate.com">Progate Indonesia</a></span>
                        as <span class="hl">Web Development Instructor</span> on Digital
                        Talent Scholarship 2020. I am looking forward to collaborate with
                        you!
                    </p>
                    <div class="d-flex flex-column flex-md-row">
                        <div class="contact">
                            <a class="btn nnt text-white font-weight-bold" id="btn-email" href="mailto:alifmaulana26@gmail.com" role="button"><i class="fa fa-envelope" aria-hidden="true"></i> Email me</a>
                            <a href="https://github.com/alifma" class="align-middle pl-3">
                                <i class="fab fa-2x fa-github"></i></a>
                            <a href="https://youtube.com/alifmaulana26" class="align-middle pl-3">
                                <i class="fab fa-2x fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/in/alif-maulana-arifin-06b2a415a/" class="align-middle pl-3">
                                <i class="fab fa-2x fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main -->
    <!-- Project -->
    <section class="project">
        <div class="container">
            <h1 class="judulSection text-center mb-2 text-white">Finished Project</h1>
            <!-- Project1 -->
            <div class="row d-flex flex-wrap p-2">
                <div class="col-lg-8 col-sm-12">
                    <img src="./img/0-Artic.png" class="img-fluid skillgmbr" alt="..." />
                </div>
                <div class="col-lg-4 col-sm-12 mt-2">
                    <h1 class="oren nnt">ARTIC</h1>
                    <p style="text-align: justify" class="text-white">
                        Augmented Reality Mathematics for Android
                    </p>
                    <a class="btn nnt text-white" id="btn-git" href="http://github.com/alifma/artik"><i class="fab fa-github" aria-hidden="true"></i> Github Pages</a>
                    <a class="btn nnt text-white" id="btn-det" href="#"><i class="fas fa-external-link-alt" aria-hidden="true"></i>
                        Details</a>
                </div>
            </div>
            <!-- Project1 -->
            <div class="row d-flex flex-wrap p-2">
                <div class="col-lg-8 col-sm-12">
                    <img src="./img/0-SEAD.png" class="img-fluid skillgmbr" alt="..." />
                </div>
                <div class="col-lg-4 col-sm-12 mt-2">
                    <h1 class="oren nnt">SEAD</h1>
                    <p style="text-align: justify " class="text-white">
                        Sistem Evaluasi Anggaran & Dana Desa
                    </p>
                    <a class="btn nnt text-white" id="btn-git" href="http://github.com/alifma/"><i class="fab fa-github" aria-hidden="true"></i> Github Pages</a>
                    <a class="btn nnt text-white" id="btn-det" href="#"><i class="fas fa-external-link-alt" aria-hidden="true"></i>
                        Details</a>
                </div>
            </div>
            <!-- Project1 -->
            <div class="row d-flex flex-wrap p-2">
                <div class="col-lg-8 col-sm-12">
                    <img src="./img/0-Akar.png" class="img-fluid skillgmbr" alt="..." />
                </div>
                <div class="col-lg-4 col-sm-12 mt-2">
                    <h1 class="oren nnt">Akar</h1>
                    <p style="text-align: justify" class="text-white">Aplikasi Pintar Al-Quran & Tajwid</p>
                    <a class="btn nnt text-white" id="btn-git" href="http://github.com/alifma/"><i class="fab fa-github" aria-hidden="true"></i> Github Pages</a>
                    <a class="btn nnt text-white" id="btn-det" href="#"><i class="fas fa-external-link-alt" aria-hidden="true"></i>
                        Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project -->
    <!-- Education -->
    <section class="mt-4 p-2">
        <div class="container">
            <h1 class="judulSection text-center text-white">Why hire me?</h1>
            <div class="row lg-12 d-flex flex-wrap justify-content-around">
                <div class="col-lg-3 mx-1 card text-white skillnya mb-3" style="background-color: #313131">
                    <div class="card-body">
                        <h5 class="card-title text-center oren nnt">
                            <strong>Educator</strong>
                        </h5>
                        <p class="card-text" style="text-align: justify">
                            I become Indonesian representation on the SEA-Teacher Exchange
                            Program to teach about Mathematics on Philippines. I also teach
                            about Web Development on Digital Talent Scholarship 2020.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mx-1 card text-white skillnya mb-3" style="background-color: #313131">
                    <div class="card-body">
                        <h5 class="card-title text-center oren nnt">
                            <strong>Fast Typer</strong>
                        </h5>
                        <p class="card-text" style="text-align: justify">
                            I'm also known as “Astray” and become a representation of
                            Indonesia on 7K Osu! Mania World Championship 2016 and made it
                            to the semifinal rounds.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mx-1 card text-white skillnya mb-3" style="background-color: #313131">
                    <div class="card-body">
                        <h5 class="card-title text-center oren nnt">
                            <strong>Mathematician</strong>
                        </h5>
                        <p class="card-text" style="text-align: justify">
                            Even though I have a passion for technology, I’m a
                            mathematician. I have critical and analytical thinking,
                            problem-solving ability, and able to share my thoughts with
                            others.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why -->

    <!-- Slider -->
    <section class="mt-4 p-2">
        <div class="container">
            <div class="row pt-4 px-md-3">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-interval="false" data-ride="carousel" data-pause="hover">
                        <div class="carousel-inner">
                            <div class="carousel-item active itemnya">
                                <img class="d-block mx-auto gmbrbos" src="./img/bos2.jpg" alt="First slide" />
                            </div>
                            <div class="carousel-item text-center itemnya">
                                <img class="d-block mx-auto gmbrbos" src="./img/bos1.jpg" alt="Second slide" />
                            </div>

                        </div>
                        <!-- End Carousel Gambar -->
                    </div>
                </div>
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-interval="false" data-ride="carousel" data-pause="hover">
                        <!-- Carousel Text -->
                        <div class="carousel-inner">
                            <div class="carousel-item active itemnya">
                                <p class="text-justify font-italic text-white">
                                    "Mas Alif Maulana merupakan salah satu relawan instruktur
                                    untuk program Kominfo Digital Talent Scholarship tema
                                    programming Batch II berjumlah 3.000 peserta yang di bagi 10
                                    kelas. Mas Alif adalah instruktur yang paling aktif
                                    mendampingi peserta program tersebut. Selain
                                    jawaban-jawabannya yang berkualitas, kami sangat menghargai
                                    Mas Alif karena juga membantu menjawab pertanyaan-pertanyaan
                                    peserta dari kelas lain"
                                </p>
                                <div class="authornya   mb-2">
                                    <h4 class="oren mb-0">Norman Ganto</h4>
                                    <p class="text-muted m-0">Progate Country Manager</p>
                                </div>
                            </div>
                            <div class="carousel-item itemnya">
                                <p class="text-justify font-italic text-white">
                                    "Alif maulana merupakan mahasiswa bimbingan saya yang cukup
                                    rajin"
                                </p>
                                <div class="authornya mb-2">
                                    <h4 class="oren mb-0">Ria Sudiana</h4>
                                    <p class="text-muted m-0">Dosen Pembimbing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End carousel Text -->
                </div>
            </div>
        </div>
        <div class="row mt-2 justify-content-center">
            <div class="col text-center">
                <a class="btn nnt text-white" id="btn2" onclick="mundur()">Back</a>
                <a class="btn nnt text-white" id="btn1" onclick="maju()">Next</a>
            </div>
        </div>

    </section>
    <!-- Slider -->
    <!-- container skill -->
    <aside>
        <div class="container skill py-4">
            <h1 class="judulSection text-center text-white">Application and Skill</h1>
            <div class="d-flex flex-wrap justify-content-around skill-icon">
                <img src="./img/ico3.png" alt="" />
                <img src="./img/ico4.png" alt="" />
                <img src="./img/ico6.png" alt="" />
                <img src="./img/ico7.png" alt="" />
                <img src="./img/ico1.png" alt="" />
            </div>
        </div>
    </aside>
    <!-- Skill -->
    <!-- Start Footer -->
    <footer class="container p-4">
        <h1 class="judulSection text-white">Get in touch</h1>
        <p class="text-center text-white">
            For business inquiry please send mail to
            <span class="hl oren">alifmaulana26@gmail.com</span>
        </p>
        <a href="http://github.com/alifma" class="align-middle pr-3">
            <i class="fab fa-2x fa-github"></i></a>
        <a href="http://youtube.com/alifmaulana26" class="align-middle pr-3">
            <i class="fab fa-2x fa-youtube"></i></a>
        <a href="https://www.instagram.com/alifmaul26/" class="align-middle pr-3">
            <i class="fab fa-2x fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/alif-maulana-arifin-06b2a415a/" class="align-middle pr-3">
            <i class="fab fa-2x fa-linkedin"></i></a>
    </footer>
    <!-- End Footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        function maju() {
            $("#btn1").on("click", function(e) {
                e.preventDefault();
                $(".carousel").carousel("next");
            });
        }

        function mundur() {
            $("#btn2").on("click", function(e) {
                e.preventDefault();
                $(".carousel").carousel("prev");
            });
        }
    </script>
</body>

</html>