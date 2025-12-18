<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
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

          <?php $i = 1; ?>

          <?php foreach ($project as $p) : ?>

            <tr>
              <th scope="row"><?= $i++ ?></th>
              <td><img src="/img/<?= $p['gambar']; ?>" class=""></td>
              <td><?= $p['nama_project']; ?></td>
              <td>
                <a href="<?= base_url('project/' . $p['slug']); ?>" class="btn btn-success">
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
<?= $this->endSection(); ?>