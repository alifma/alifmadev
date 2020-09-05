<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h2 class="section-title">Saran dari orang-orang</h2>
<p class="section-lead">They don't hate you, they loved you</p>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Saran</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $i = 1 ?>

                        <?php foreach ($saran as $s) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $s['nama']; ?></td>
                                <td><?= $s['saran']; ?></td>
                                <td><?= $s['created_at']; ?></td>
                                <td><a href="/pages/delSaran/<?= $s['id']; ?>" class="btn btn-sm btn-danger">Hapus</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection('content'); ?>