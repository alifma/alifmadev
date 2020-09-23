<?= $this->extend('layout/public-template'); ?>
<?= $this->section('content'); ?>
<div class='page-inner'>
    <div class="card author-box card-primary">
        <div class="card-body">
            <div class="author-box-left my-auto">
                <img alt="image" src="./node_modules/circleFront.png" class="rounded-circle" style="height:120px">
            </div>
            <div class="author-box-details">
                <div class="author-box-name">
                    <h3 class="nnt oren mb-0">Alif Maulana Arifin, S.Pd.</h3>
                </div>
                <div class="author-box-job nnt" style="font-size:15px">Guru matematika dan Pengembang Aplikasi</div>
                <div class="author-box-description mt-0">
                    <p style="text-align:justify">Saya adalah seorang pendidik yang kreatif dan inovatif serta terbiasa membuat aplikasi baik web maupun mobile. Selama 2 tahun menjadi pengajar dan mengembangkan aplikasi 2 dari aplikasi saya sudah mendapatkan HAKI dan 2 diantaranya sudah memenangkan kontes tingkat nasional.</p>
                </div>
                <a href="https://github.com/alifma" class="btn btn-social-icon mr-1 btn-github">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://youtube.com/alifmaulana26" class="btn btn-social-icon mr-1 btn-danger">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://instagram.com/alifma26" class="btn btn-social-icon mr-1 btn-instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/in/alif-maulana-arifin-06b2a415a/" class="btn btn-social-icon mr-1 btn-twitter">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <!-- Pendidikan -->
            <div class="card card-primary">
                <div class="card-header ">
                    <h3 class="oren mb-0">Pendidikan</h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="media">
                            <div class="mr-3  my-auto">
                                <img class="mx-auto" src="/img/logo-untirta.png" alt="Generic placeholder image">
                                <p class="text-center font-weight-bold">(2016 - 2020)</p>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0">Universitas Sultan Ageng Tirtayasa</h5>
                                <p class="font-weight-bold my-0 nnt text-muted">Pendidikan Matematika (S.Pd)</p>
                                <p style="text-align:justify;  line-height:24px" class="mb-0 nnt"> Tidak hanya mempelajari pendidikan dan matematika, tetapi mempelajari tentang teknologi sehingga pada tugas akhir mengembangkan media pembelajaran dengan Augmented Reality. Berhasil lulus dengan pujian dalam 3.5 tahun dengan nilai IPK 3.66.</p>
                            </div>
                        </li>
                        <hr>
                        <li class="media my-4">
                            <div class="mr-3  my-auto">
                                <img class="mx-auto" src="/img/logo-smk.png" alt="Generic placeholder image">
                                <p class="text-center font-weight-bold">(2013 - 2016)</p>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">SMK Negeri 1 Pandeglang</h5>
                                <p class="font-weight-bold my-0 nnt text-muted">Teknik Komputer Jaringan</p>
                                <p style="text-align:justify; line-height:24px" class="nnt mb-0">Mempelajari kemampuan dasar mengenai komputer, terutama konfigurasi jaringan dan server. Aktif mengikuti perlombaan seperti olimpiade matematika tingkat nasional. Menjadi lulusan terbaik pada tahun 2016.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Pendidikan -->

            <!-- Pengalaman -->
            <div class="card card-primary">
                <div class="card-header ">
                    <h3 class="oren mb-0">Pengalaman</h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <?php foreach ($exp as $e) : ?>
                            <li class="media">
                                <div class="mr-3  my-auto">
                                    <img class="mx-auto" src="/img/exp/<?= $e['logo']; ?>" width="100px" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0"><?= $e['posisi']; ?></h5>
                                    <p class="font-weight-bold my-0 nnt text-muted"><?= $e['nama']; ?></p>
                                    <p style="text-align:justify" class="mb-0 nnt"><?= $e['deskripsi']; ?></p>
                                    <p class="font-weight-bold my-0 text-right"><?= $e['periode']; ?></p>
                                </div>
                            </li>
                            <hr>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- End Pengalaman -->
            <div class="card card-primary">
                <div class="card-header ">
                    <h3 class="oren mb-0">Kemampuan</h3>
                </div>
                <div class="card-body">
                    <div class="badges text-center">
                        <?php foreach ($skill as $s) : ?>
                            <p class="font-weight-bold badge text-white nnt" style="font-size:1em; background-color:<?= $s['color']; ?>"><?= $s['skill']; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <!-- Organisasi -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="oren">Organisasi</h3>
                </div>
                <div class="card-body">
                    <?php foreach ($org as $o) : ?>
                        <div class="media">
                            <div class="media-body ">
                                <h5 class="mt-0 mb-1"><?= $o['nama']; ?></h5>
                                <p class="font-weight-bold my-0 nnt text-muted"><?= $o['subnama']; ?></p>
                                <p style="text-align:justify" class="mb-0"><?= $o['description']; ?></p>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- End Organisasi -->


            <!-- Prestasi -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="oren">Prestasi</h3>
                </div>
                <div class="card-body">
                    <div id="accordion">
                        <?php $i = 1 ?>
                        <?php foreach ($prestasi as $p) : ?>

                            <div class="accordion">
                                <div class="accordion-header collapsed" role="button" data-toggle="collapse" data-target="#panel-body-<?= $i; ?>" aria-expanded="false">
                                    <h4><?= $p['nama']; ?> (<?= date('Y', strtotime($p['tgl'])); ?>)</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-<?= $i++; ?>" data-parent="#accordion" style="">
                                    <p class="mb-0 text-justify"><?= $p['deskripsi']; ?></p>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- End Prestasi -->

        </div>

    </div>
    <h2 class="section-title">Referensi</h2>
    <p class="section-lead">
        Berikut adalah kontak yang telah bekerja sama dengan saya
    </p>
    <div class="row sortable-card">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-primary">
                <div class="card-body text-center">
                    <h4 class="oren">Ria Sudiana, M.Si.</h4>
                    <p class="my-0">Dosen Pembimbing 2</p>
                    <p class="my-0">dan Kepala ICT FKIP Untirta</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-primary">
                <div class="card-body text-center">
                    <h4 class="oren">Dr. Heni Pujiastuti, M.Pd.</h4>
                    <p class="my-0">Dosen Pembimbing 1</p>
                    <p class="my-0">dan Wakil Dekan 2 FKIP Untirta</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-primary">
                <div class="card-body text-center">
                    <h4 class="oren">Norman Ganto</h4>
                    <p class="my-0">Country Manager </p>
                    <p class="my-0">of Progate Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>