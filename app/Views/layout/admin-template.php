<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>AlifmaDev | <?= $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/stisla-master/assets/css/style.css">
    <link rel="stylesheet" href="/stisla-master/assets/css/components.css">
    <link rel="stylesheet" href="/style.css">
    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/p0suowz1sdsjmvbbj2025bem81keamueju60hiktyax6uinz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg bg-dark"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="/img/<?= session()->get('avatar') ?>" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= session()->get('nama'); ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">User menu</div>
                            <a href="<?= base_url('/admin/profile/'); ?>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile & Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('/login/logout'); ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= base_url('/admin'); ?>">Alifma<span class="oren">Dev</span></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('/admin'); ?>">AM<span class="oren">D</span></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('/admin/kerja'); ?>">Catatan Project</a></li>
                                <li><a class="nav-link" href="<?= base_url('/admin/project'); ?>">Daftar Proyek</a></li>
                                <li><a class="nav-link" href="<?= base_url('/admin/saran'); ?>">Saran</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Pages</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Profile</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('/admin/pendidikan'); ?>">Pendidikan</a></li>
                                <li><a href="<?= base_url('/admin/exp'); ?>">Pengalaman</a></li>
                                <li><a href="<?= base_url('/admin/skill'); ?>">Kemampuan</a></li>
                                <li><a href="<?= base_url('/admin/org'); ?>">Organisasi</a></li>
                                <li><a href="<?= base_url('/admin/prestasi'); ?>">Prestasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>User</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Manage Role</a></li>
                                <li><a href="#">Manage User</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Menu</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="utilities-contact.html">Menu Management</a></li>
                                <li><a class="nav-link" href="utilities-invoice.html">SubMenu Management</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="<?= base_url('/'); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Dahlah
                        </a>
                    </div>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1><?= $header; ?></h1>
                    </div>
                    <?= $this->renderSection('content'); ?>
                    <div class="section-body">
                    </div>
                </section>
            </div>
            <footer class="main-footer text-center">
                <div class="text-center">
                    Copyright &copy; <a href="https://alifma.com">AlifmaDev</a> 2020
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="/stisla-master/assets/js/stisla.js"></script>

    <!-- TinyMCE -->
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: ' autolink lists media  table',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>

    <!-- Template JS File -->
    <script src="/stisla-master/assets/js/scripts.js"></script>
    <script src="/stisla-master/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script>
        function previewImg1() {
            const logo = document.querySelector('#logo');
            const imgPreview = document.querySelector('.img-preview1');
            // Ganti Preview
            const fileLogo = new FileReader();
            fileLogo.readAsDataURL(logo.files[0]);
            fileLogo.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        function previewImg2() {
            const poster = document.querySelector('#poster');
            const imgPreview = document.querySelector('.img-preview2');
            // Ganti Preview
            const filePoster = new FileReader();
            filePoster.readAsDataURL(poster.files[0]);
            filePoster.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }

        function avaPreview() {
            const avatar = document.querySelector('#avatar');
            const imgPreview = document.querySelector('.ava-preview');
            // Ganti Preview
            const fileavatar = new FileReader();
            fileavatar.readAsDataURL(avatar.files[0]);
            fileavatar.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>