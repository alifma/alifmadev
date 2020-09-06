<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>
<div class="card">
    <div class="card-header">
        <h4>Tambah Prestasi Baru</h4>
    </div>
    <form action="/admin/savePrestasi" method="post">
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label>Nama Prestasi</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama') ? 'is-invalid' : ''); ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
                <div class=" form-group col-md-3">
                    <label>Tanggal</label>
                    <input type="date" class="form-control <?= ($validation->hasError('tgl') ? 'is-invalid' : ''); ?>" id="tgl" name="tgl">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tgl'); ?>
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label>Tahun</label>
                    <input type="text" class="form-control text-center <?= ($validation->hasError('tahun') ? 'is-invalid' : ''); ?>" value="<?= date('Y'); ?>" id="tahun" name="tahun">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tahun'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <label>Deskripsi</label>
                <textarea class="form-control <?= ($validation->hasError('deskripsi') ? 'is-invalid' : ''); ?>" style="min-height:100px" id="deskripsi" name="deskripsi"><?= old('deskripsi'); ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('deskripsi'); ?>
                </div>
            </div>

        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>