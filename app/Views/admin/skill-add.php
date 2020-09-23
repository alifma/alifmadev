<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Skill Baru</h4>
            </div>
            <form action="/skill/saveSkill" method="post">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label>Skill</label>
                            <input type="text" autofocus class="form-control <?= ($validation->hasError('skill') ? 'is-invalid' : ''); ?>" id="skill" name="skill" value="<?= old('skill'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('skill'); ?>
                            </div>
                        </div>
                        <div class=" form-group col-md-4">
                            <label>Warna</label>
                            <input type="text" maxlength="7" class="form-control <?= ($validation->hasError('color') ? 'is-invalid' : ''); ?>" id="color" name="color" value="<?= old('color'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('color'); ?>
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