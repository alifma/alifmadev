<?= $this->extend('layout/public-template'); ?>
<?= $this->section('content'); ?>

<div class="page-inner pt-4">
    <div class="row justify-content-center pt-4">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <h3 class="card-title text-center">Silakan untuk <span class="oren">mengontak</span> Saya</h3>
                    <p class="card-text text-center">Anda dapat memberikan saran, masukan atau apapun</p>

                    <form action="/pages/savesaran" method="post">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="posisi" name="posisi" placeholder="President of Untirta" value="-">
                            <input type="hidden" class="form-control <?= ($validation->hasError('email') ? 'is-invalid' : ''); ?>" name="email" id="exampleFormControlInput1" placeholder="name@example.com" value="anonim@alifma.com">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" id="nama" placeholder="" value="<?= old('nama'); ?>" name="nama">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                            <div class="mb-3">
                                <label for="saran" class="form-label">Masukan, Saran atau Apapun</label>
                                <textarea class="form-control <?= ($validation->hasError('saran') ? 'is-invalid' : ''); ?>" id="saran" name="saran" rows="3" style="min-height:100px;"><?= old('saran'); ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('saran'); ?>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>