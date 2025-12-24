<!-- app/Views/project/create.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1><?= $title; ?></h1>

    <?php if (isset($validation) && $validation->getErrors()): ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors(); ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('project/save'); ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label for="nama_project" class="form-label">Nama Project</label>
            <input type="text" name="nama_project" class="form-control" id="nama_project" value="<?= set_value('nama_project'); ?>">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5"><?= set_value('deskripsi'); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar (opsional)</label>
            <input type="file" name="gambar" class="form-control" id="gambar">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Project</button>
        <a href="<?= base_url('project'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
