<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="/project/create" class="btn btn-primary mt-3 mb-3">Tambah Project</a>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success mt-3" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif ?>

      <form action="" method="get" class="mb-3">
        <input type="text" name="keyword" placeholder="Cari project..." value="<?= isset($keyword) ? $keyword : '' ?>">
        <button type="submit" class="btn btn-primary btn-sm">Cari</button>
        <a href="<?= base_url('project') ?>" class="btn btn-secondary btn-sm">Reset</a>
      </form>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Project</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php $i = 1 + (5 * ($pager->getCurrentPage('project') - 1)); ?>
          <?php foreach ($project as $p) : ?>


            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td>
                <?php if ($p['gambar']): ?>
                  <img src="<?= base_url('uploads/' . $p['gambar']) ?>" max-width="100">
                <?php else: ?>
                  Tidak ada gambar
                <?php endif; ?>
              </td>

              <td><?= $p['nama_project']; ?></td>
              <td>
                <a href="<?= site_url('project/' . $p['slug']); ?>" class="btn btn-success">
                  Detail
                </a>

              </td>

            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $pager->links('project', 'bootstrap') ?>
<?= $this->endSection(); ?>