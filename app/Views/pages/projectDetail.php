<?= $this->extend('layout/public-template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row mb-4">
        <img src="/img/<?= $project['logo']; ?>" class="img-fluid mx-auto" style="max-height: 300px;">

    </div>
    <h1 class="oren mb-0"><?= $project['name']; ?></h1>
    <h3><?= $project['subname']; ?></h3>
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title oren">Tentang Aplikasi</h5>
                    <p class="card-text"><?= $project['overview']; ?></p>
                    <h5 class="card-title oren  ">Penghargaan</h5>
                    <p class="card-text"><?= $project['achievement']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center  oren ">Detail</h5>
                    <p class="card-text"><b>Published :</b> <?= $project['created_at']; ?></p>
                    <p class="card-text"><b>Platform :</b> <?= $project['platform']; ?> <i class="text-dark <?= $project['ico']; ?>"></i></p>
                    <p class="card-text"><b>Ukuran :</b> <?= $project['size']; ?></p>
                    <a href="<?= $project['link']; ?>" class="mx-auto btn btn-primary">Unduh</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title oren">Dokumentasi</h5>
                    <img src="/img/<?= $project['poster']; ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>