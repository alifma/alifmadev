<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Organisasi Baru</h4>
            </div>
            <form action="/org/saveOrg" method="post">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Name</label>
                            <input type="text" autofocus class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label>SubName</label>
                            <input type="text" autofocus class="form-control <?= ($validation->hasError('subnama') ? 'is-invalid' : ''); ?>" id="subnama" name="subnama" value="<?= old('subnama'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('subnama'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Tanggal</label>
                            <input type="date" autofocus class="form-control <?= ($validation->hasError('tgl') ? 'is-invalid' : ''); ?>" id="tgl" name="tgl" value="<?= old('tgl'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tgl'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Deskripsi</label>
                            <input type="text" autofocus class="form-control <?= ($validation->hasError('description') ? 'is-invalid' : ''); ?>" id="description" name="description" value="<?= old('description'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('description'); ?>
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