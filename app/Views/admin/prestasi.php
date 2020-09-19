<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>
<a href="<?= base_url('admin/addPrestasi'); ?>" class="btn btn-primary float-right">+ Prestasi</a>
<h2 class="section-title">Prestasi yang pernah didapatkan</h2>
<p class="section-lead">Tambah lagi lah, masa gini doang?</p>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Tanggal </th>
                            <th>Aksi</th>
                        </tr>

                        <?php $i = 1 ?>
                        <?php foreach ($prestasi as $d) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $d['nama']; ?></td>
                                <td><?= $d['deskripsi']; ?></td>
                                <td><?= $d['tgl']; ?></td>
                                <td>
                                    <a href="/admin/delPrestasi/<?= $d['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                                    <a href="/admin/editPrestasi/<?= $d['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection('content'); ?>