<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Organisasi Baru</h4>
            </div>
            <form action="/exp/update/<?= $exp['id']; ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $exp['id']; ?>">
                <input type="hidden" name="logoLama" value="<?= $exp['logo']; ?>">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Posisi</label>
                            <input type="text" autofocus class="form-control <?= ($validation->hasError('posisi') ? 'is-invalid' : ''); ?>" id="posisi" name="posisi" value="<?= (old('posisi')) ? old('posisi') : $exp['posisi']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('posisi'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Tempat</label>
                            <input type="text" autofocus class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $exp['nama']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Tanggal</label>
                            <input type="date" autofocus class="form-control <?= ($validation->hasError('tgl') ? 'is-invalid' : ''); ?>" id="tgl" name="tgl" value="<?= (old('tgl')) ? old('tgl') : $exp['tgl']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tgl'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Periode</label>
                            <input type="text" autofocus class="form-control <?= ($validation->hasError('periode') ? 'is-invalid' : ''); ?>" id="periode" name="periode" value="<?= (old('periode')) ? old('periode') : $exp['periode']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('periode'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-8">
                            <label>Deskripsi</label>
                            <input type="text" autofocus class="form-control <?= ($validation->hasError('deskripsi') ? 'is-invalid' : ''); ?>" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ? old('deskripsi') : $exp['deskripsi']; ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Logo</label>
                        <div class="col-sm-9">
                            <img src="/img/exp/<?= $exp['logo']; ?>" class="img-preview1 avapreview">
                            <label class="form-file-label" for="logo">
                                <span class="form-file-text"></span>
                            </label>
                            <div class="form-file">
                                <input type="file" class="form-file-input <?= ($validation->hasError('logo') ? 'is-invalid' : ''); ?>" id="logo" name="logo" onchange="previewImg1()">
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('logo'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>