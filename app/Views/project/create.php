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

        <form action="<?= base_url('/project/save'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <div class="mb-3">
                <label for="nama_project" class="form-label">Nama Project</label>
                <input type="text"
                    name="nama_project" autofocus
                    class="form-control <?= ($validation && $validation->hasError('nama_project')) ? 'is-invalid' : ''; ?>" value="<?= old('nama_project'); ?>">

                <div class="invalid-feedback">
                    <?= $validation->getError('nama_project'); ?>
                </div>

            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5"><?= old('deskripsi'); ?></textarea>
                <div class="text-danger">
                    <?= isset($validation) ? $validation->getError('deskripsi') : ''; ?>
                </div>

            </div>


            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar" value="<?= old('gambar'); ?>"> <?= ($validation && $validation->hasError('gambar')) ? 'is-invalid' : ''; ?>
                <div class="invalid-feedback">
                    <?= $validation->getError('gambar') ?>
                </div>

                <?php if (!empty($project['gambar'])): ?>
                    <img src="<?= base_url('writable/uploads/' . $project['gambar']); ?>" width="150" class="mt-2">
                <?php endif; ?>
            </div>



            <button type="submit" class="btn btn-primary">Simpan Project</button>
            <a href="<?= base_url('project'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>