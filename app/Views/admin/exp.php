<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>
<a href="<?= base_url('admin/exp/add'); ?>" class="btn btn-primary float-right">+ Experience</a>

<h2 class="section-title">Daftar Pekerjaan Yang Pernah Dilakukan</h2>
<p class="section-lead">Tulis aja dulu, kali aja nambah</p>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Posisi</th>
                            <th class="text-center">Tempat</th>
                            <th class="text-center">Periode</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php $i = 1 ?>

                        <?php foreach ($exp as $e) : ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?></td>
                                <td class="text-center"><?= $e['posisi']; ?></td>
                                <td class="text-center"><?= $e['nama']; ?></td>
                                <td class="text-center"><?= $e['periode']; ?></td>
                                <td class="text-center"><?= $e['tgl']; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('/exp/edit/'); ?>/<?= $e['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                                    <a href="<?= base_url('/exp/del/'); ?>/<?= $e['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection('content'); ?>