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
                    <h3 class="card-title text-center">Feel free to <span class="oren">contact</span> me</h3>
                    <p class="card-text text-center">You can leave a feedback, suggestion or ask anything</p>

                    <form action="/pages/savesaran" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Fullname</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" id="nama" placeholder="Long Name" name="nama" value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control <?= ($validation->hasError('email') ? 'is-invalid' : ''); ?>" name="email" id="exampleFormControlInput1" placeholder="name@example.com" value="<?= old('email'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="posisi" class="form-label">Position</label>
                            <input type="text" class="form-control" id="posisi" name="posisi" placeholder="President of Untirta" value="<?= old('posisi'); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="saran" class="form-label">Feedback or Suggestions</label>
                            <textarea class="form-control <?= ($validation->hasError('saran') ? 'is-invalid' : ''); ?>" id="saran" name="saran" value="<?= old('saran'); ?>" rows="4"></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('saran'); ?>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>