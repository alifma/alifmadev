<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form class="row g-3" action="/admin/update/<?= $project['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="posterLama" value="<?= $project['poster']; ?>">
                    <input type="hidden" name="id" value="<?= $project['id']; ?>">
                    <input type="hidden" name="logoLama" value="<?= $project['logo']; ?>">
                    <div class="col-md-6 mb-2">
                        <label for="name" class="form-label font-weight-bold">Nama</label>
                        <input type="text" autofocus name="name" class="form-control <?= ($validation->hasError('name') ? 'is-invalid' : ''); ?>" id="name" value="<?= (old('name')) ? old('name') : $project['name']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="subname" class="form-label font-weight-bold">Sub-Nama</label>
                        <input type="text" name="subname" class="form-control <?= ($validation->hasError('subname') ? 'is-invalid' : ''); ?>" id="subname" value="<?= (old('subname')) ? old('subname') : $project['subname']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('subname'); ?>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="description" class="form-label font-weight-bold">Deskripsi</label>
                        <input type="text" class="form-control  <?= ($validation->hasError('description') ? 'is-invalid' : ''); ?>" name="description" maxlength="240" id="description" value="<?= (old('description')) ? old('description') : $project['description']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('description'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="partner" class="form-label font-weight-bold">Partner</label>
                        <input type="text" class="form-control  <?= ($validation->hasError('partner') ? 'is-invalid' : ''); ?>" name="partner" id="partner" value="<?= (old('partner')) ? old('partner') : $project['partner']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('partner'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="tgl" class="form-label font-weight-bold">Tanggal</label>
                        <input type="date" class="form-control <?= ($validation->hasError('tgl') ? 'is-invalid' : ''); ?>" name="tgl" id="tgl" value="<?= (old('tgl')) ? old('tgl') : $project['tgl']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tgl'); ?>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="overview" class="form-label font-weight-bold">Overview</label>
                        <textarea type="text" class="form-control <?= ($validation->hasError('overview') ? 'is-invalid' : ''); ?>" name="overview" id="overview"><?= (old('overview')) ? old('overview') : $project['overview']; ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('overview'); ?>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <label for="achievement" class="form-label font-weight-bold">Penghargaan</label>
                        <textarea type="text" class="form-control <?= ($validation->hasError('achievement') ? 'is-invalid' : ''); ?>" name="achievement" id="achievement"><?= (old('achievement')) ? old('achievement') : $project['achievement']; ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('achievement'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="platform" class="form-label font-weight-bold">Platform</label>
                        <input type="text" class="form-control <?= ($validation->hasError('platform') ? 'is-invalid' : ''); ?>" name="platform" id="platform" value="<?= (old('platform')) ? old('platform') : $project['platform']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('platform'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="ico" class="form-label font-weight-bold">Icon</label>
                        <input type="text" class="form-control <?= ($validation->hasError('ico') ? 'is-invalid' : ''); ?>" name="ico" id="ico" value="<?= (old('ico')) ? old('ico') : $project['ico']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('ico'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="size" class="form-label font-weight-bold">Ukuran</label>
                        <input type="text" class="form-control <?= ($validation->hasError('size') ? 'is-invalid' : ''); ?>" name="size" id="size" value="<?= (old('size')) ? old('size') : $project['size']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('size'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="link" class="form-label font-weight-bold">Link</label>
                        <input type="text" class="form-control <?= ($validation->hasError('link') ? 'is-invalid' : ''); ?>" name="link" id="link" value="<?= (old('link')) ? old('link') : $project['link']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('link'); ?>
                        </div>
                    </div>
                    <div class="col-6 mb-2 text-center">
                        <label for="inputEmail4" class="form-label font-weight-bold">Logo</label><br>
                        <img src="/img/<?= $project['logo']; ?>" class="img-thumbnail img-preview1">
                        <label class="form-file-label" for="logo">
                            <span class="form-file-text"><?= $project['logo']; ?></span>
                        </label>
                        <div class="form-file">
                            <input type="file" class="form-file-input <?= ($validation->hasError('logo') ? 'is-invalid' : ''); ?>" id="logo" name="logo" onchange="previewImg1()">
                        </div>
                        <div class="invalid-feedback">
                            <?= $validation->getError('logo'); ?>
                        </div>
                    </div>
                    <div class="col-6 mb-2 text-center">
                        <label for="inputEmail4" class="form-label font-weight-bold">Poster</label><br>
                        <img src="/img/<?= $project['poster']; ?>" class="img-thumbnail img-preview2">
                        <label class="form-file-label" for="poster">
                            <span class="form-file-text"><?= $project['poster']; ?></span>
                        </label>
                        <div class="form-file">
                            <input type="file" class="form-file-input <?= ($validation->hasError('poster') ? 'is-invalid' : ''); ?>" id="poster" name="poster" onchange="previewImg2()">
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