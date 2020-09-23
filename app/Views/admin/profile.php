<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="card profile-widget">
            <div class="profile-widget-header">
                <img alt="image" src="/img/<?= $user['avatar'] ?>" class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Registered Since</div>
                        <div class="profile-widget-item-value"><?= date('d-M-Y', strtotime(session()->get('created_at'))); ?></div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Updated</div>
                        <div class="profile-widget-item-value"><?= $user['updated_at'] ? date('d-M-Y', strtotime($user['updated_at'])) : '-'  ?></div>
                    </div>
                </div>
            </div>
            <div class="profile-widget-description pb-0">
                <div class="profile-widget-name">
                    <?= $user['nama']; ?>
                    <div class="text-muted d-inline font-weight-normal">
                        <div class="slash"></div>
                        <?= $user['username']; ?>
                    </div>
                </div>
                <form autocomplete="off" action="/admin/updateProfile/<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
                    <input autocomplete=" false" name="hidden" type="text" style="display:none;">
                    <input type="hidden" name="avatarLama" value="<?= $user['avatar']; ?>">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="nama" autocomplete="false" class="form-control" id="nama" name="nama" placeholder="<?= $user['nama']; ?>" value="<?= old('nama') ? old('nama') : $user['nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password Baru</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?= old('password'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Avatar</label>
                        <div class="col-sm-9">
                            <img src="/img/<?= $user['avatar']; ?>" class="ava-preview avapreview">
                            <label class="form-file-label" for="avatar">
                                <span class="form-file-text"></span>
                            </label>
                            <div class="form-file">
                                <input type="file" class="form-file-input <?= ($validation->hasError('avatar') ? 'is-invalid' : ''); ?>" id="avatar" name="avatar" onchange="avaPreview()">
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('avatar'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>