<!-- app/Views/project/edit.php -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1>Edit Project</h1>

    <form action="/project/update/<?= $project['id']; ?>" method="post" enctype="multipart/form-data">

        <?= csrf_field(); ?>

        <input type="hidden" name="slug" value="<?= $project['slug']; ?>">

        <input type="hidden" name="old_gambar" value="<?= $project['gambar']; ?>">

        <div class="mb-3">
            <label>Nama Project</label>
            <input type="text" name="nama_project"
                class="form-control <?= $validation->hasError('nama_project') ? 'is-invalid' : ''; ?>"
                value="<?= old('nama_project') ?? $project['nama_project']; ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nama_project'); ?>
            </div>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi"
                class="form-control <?= $validation->hasError('deskripsi') ? 'is-invalid' : ''; ?>"><?= old('deskripsi') ?? $project['deskripsi']; ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('deskripsi'); ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="gambar"
                class="form-control <?= ($validation && $validation->hasError('gambar')) ? 'is-invalid' : ''; ?>">

            <div class="invalid-feedback">
                <?= $validation->getError('gambar'); ?>
            </div>

            <?php if ($project['gambar']): ?>
                <p class="mt-2">Gambar saat ini:</p>
                <img src="<?= base_url('uploads/' . $project['gambar']); ?>" width="150">
            <?php endif; ?>
            <?php if ($validation->hasError('gambar')) : ?>
                <div class="text-danger mt-1">
                    <?= $validation->getError('gambar'); ?>
                </div>
            <?php endif; ?>

        </div>

        <button type="submit" class="btn btn-primary">Ubah Data</button>
        <a href="<?= base_url('project'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->endSection(); ?>