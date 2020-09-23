<?= $this->extend('layout/admin-template'); ?>
<?= $this->section('content'); ?>
<a href="<?= base_url('admin/skill/add'); ?>" class="btn btn-primary float-right">+ Skill</a>

<h2 class="section-title">Daftar Kemampuan</h2>
<p class="section-lead">Tulis aja dulu, kali aja nambah</p>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Skill</th>
                            <th class="text-center">Warna</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        <?php $i = 1 ?>

                        <?php foreach ($skill as $s) : ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?></td>
                                <td class="text-center">
                                    <p class="font-weight-bold badge text-white nnt" style="font-size:1em; background-color:<?= $s['color']; ?>"><?= $s['skill']; ?></p>
                                </td>
                                <td class="text-center"><?= $s['color']; ?></td>
                                <td class="text-center"><a href="/skill/delSkill/<?= $s['id']; ?>" class="btn btn-sm btn-danger">Hapus</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection('content'); ?>