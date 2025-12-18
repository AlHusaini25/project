        <?= $this->extend('layout/template'); ?>
        <?= $this->section('content'); ?>

        <h1><?= esc($project['nama_project']); ?></h1>

        <img src="<?= base_url('img/' . $project['gambar']); ?>" class="">

        <p>Slug: <?= esc($project['slug']); ?></p>

        <a href="<?= base_url('project'); ?>">Kembali</a>

        <?= $this->endSection(); ?>