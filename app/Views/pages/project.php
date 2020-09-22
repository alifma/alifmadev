<?= $this->extend('layout/public-template'); ?>
<?= $this->section('content'); ?>
<?php if (!empty(session()->getFlashdata('gagal'))) { ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('gagal');; ?>
    </div>
<?php } ?>
<div class="container">
    <h2 class="mb-0">Daftar <span class="oren ">Proyek</span></h2>
    <p>Terdapat <span class="oren"><?= count($project); ?> buah</span> proyek yang sudah saya selesaikan</p>
    <div class="row">
        <div class="col">
            <?php foreach ($project as $p) : ?>
                <div class="card mb-3 p-2">
                    <div class="row g-0">
                        <div class="col-md-4 my-auto">
                            <img src="/img/<?= $p['poster']; ?>" class="rounded img-responsive img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title mb-0 "><?= $p['name']; ?> </h3>
                                <p class="nnt font-weight-bold mb-0"><?= $p['subname']; ?></p>
                                <p class="card-text text-justify mb-0"><?= $p['description']; ?></p>
                                <p class="nnt font-weight-bold mb-0"> Dibuat : <?= $p['tgl']; ?> </p>
                                <p class="nnt font-weight-bold mb-0"> Platform : <?= $p['platform']; ?> <i class="text-dark <?= $p['ico']; ?>"></i> </p>
                                <a href="<?= base_url('/project'); ?>/<?= $p['id']; ?>" class="btn btn-warning">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<!-- <div class='page-error'>
    <div class='page-inner'>
        <h2>Pages Under Construction</h2>
        <div class='page-description'>
            this will be a project page.
        </div>
        <div class='page-search'>
            <div class='mt-3'>
                <a href='/'>Back to Main</a>
            </div>
        </div>
    </div>
</div> -->
<?= $this->endSection(); ?>