<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form class="row g-3" action="/admin/saveProject" method="post" enctype="multipart/form-data">
                    <div class="col-md-6 mb-2">
                        <label for="name" class="form-label font-weight-bold">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?= old('name'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="subname" class="form-label font-weight-bold">Sub-Nama</label>
                        <input type="text" name="subname" class="form-control" id="subname" value="<?= old('subname'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('subname'); ?>
                        </div>
                    </div>
                    <div class="col-9 mb-2">
                        <label for="description" class="form-label font-weight-bold">Deskripsi</label>
                        <input type="text" class="form-control" name="description" maxlength="240" id="description" value="<?= old('description'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('description'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="partner" class="form-label font-weight-bold">Partner</label>
                        <input type="text" class="form-control" name="partner" id="partner" value="<?= old('partner'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('partner'); ?>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="overview" class="form-label font-weight-bold">Overview</label>
                        <textarea type="text" class="form-control" name="overview" id="overview"><?= old('overview'); ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('overview'); ?>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="achievement" class="form-label font-weight-bold">Penghargaan</label>
                        <textarea type="text" class="form-control" name="achievement" id="achievement"><?= old('achievement'); ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('achievement'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="platform" class="form-label font-weight-bold">Platform</label>
                        <input type="text" class="form-control" name="platform" id="platform" value="<?= old('platform'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('platform'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="ico" class="form-label font-weight-bold">Icon</label>
                        <input type="text" class="form-control" name="ico" id="ico" value="<?= old('ico'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('ico'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="size" class="form-label font-weight-bold">Ukuran</label>
                        <input type="text" class="form-control" name="size" id="size" value="<?= old('size'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('size'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="link" class="form-label font-weight-bold">Link</label>
                        <input type="text" class="form-control" name="link" id="link" value="<?= old('link'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('link'); ?>
                        </div>
                    </div>
                    <div class="col-6 mb-2 text-center">
                        <label for="inputEmail4" class="form-label font-weight-bold">Logo</label><br>
                        <img src="/img/default.png" class="img-thumbnail img-preview">
                        <div class="form-file">
                            <input type="file" class="form-file-input" id="logo" name="logo" value="<?= old('logo'); ?>" onchange="">
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('logo'); ?>
                        </div>
                    </div>
                    <div class="col-6 mb-2 text-center">
                        <label for="inputEmail4" class="form-label font-weight-bold">Poster</label><br>
                        <img src="/img/default.png" class="img-thumbnail img-preview">
                        <div class="form-file">
                            <input type="file" class="form-file-input" id="poster" name="poster" value="<?= old('poster'); ?>" onchange="">
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('poster'); ?>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>