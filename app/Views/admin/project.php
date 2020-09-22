<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>
<a href="<?= base_url('/admin/project/new'); ?>" class="btn btn-primary" style="float:right">Tambah Proyek</a>
<h2 class="section-title">Jajaran Project Lo</h2>
<p class="section-lead">Banyakin projectnya, buat modal saham</p>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Partner</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        <?php $i = 1 ?>
                        <?php foreach ($project as $p) : ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?></td>
                                <td><?= $p['name']; ?> (<?= $p['subname']; ?>)</td>
                                <td class="text-center"><?= $p['partner']; ?></td>
                                <td class="text-center"><?= $p['tgl']; ?></td>
                                <td class="text-center"><a href="/admin/project/edit/<?= $p['id']; ?>" class="btn btn-sm btn-success">Edit</a> <a href="/admin/delProject/<?= $p['id']; ?>" class="btn btn-sm btn-danger">Hapus</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection('content'); ?>