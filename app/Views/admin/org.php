<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>
<a href="<?= base_url('admin/org/add'); ?>" class="btn btn-primary float-right">+ Skill</a>

<h2 class="section-title">Daftar Organisasi yang pernah join</h2>
<p class="section-lead">Tulis aja dulu, kali aja nambah</p>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Subname</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Tanggal</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php $i = 1 ?>

                        <?php foreach ($org as $o) : ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?></td>
                                <td class="text-center"><?= $o['nama']; ?></td>
                                <td class="text-center"><?= $o['subnama']; ?></td>
                                <td class="text-center"><?= $o['description']; ?></td>
                                <td class="text-center"><?= $o['tgl']; ?></td>
                                <td class="text-center"><a href="/org/delOrg/<?= $o['id']; ?>" class="btn btn-sm btn-danger">Hapus</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection('content'); ?>