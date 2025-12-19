        <?= $this->extend('layout/template'); ?>
        <?= $this->section('content'); ?>

        <div class="container my-5">
                <div class="row justify-content-center">
                        <div class="col-md-10">
                                <h2 class="fw-bold mb-4">Detail Project</h2>

                                <div class="card shadow-sm border-0 overflow-hidden">
                                        <div class="row g-0">
                                                <div class="col-md-6">
                                                        <img src="<?= base_url('img/' . $project['gambar']); ?>" class="img-fluid h-100 w-100" alt="Web Portofolio" style="object-fit: cover;">
                                                </div>

                                                <div class="col-md-6 d-flex align-items-center">
                                                        <div class="card-body p-4">
                                                                <h3 class="card-title fw-bold"><?= esc($project['nama_project']); ?></h3>
                                                                <p class="text-muted"><span class="badge bg-light text-dark">Slug: <?= esc($project['slug']); ?></span></p>

                                                                <p class="card-text mt-3">
                                                                        <?= esc($deskripsi); ?>
                                                                </p>

                                                                <div class="">
                                                                        <a href="" class="btn btn-warning">Edit</a>
                                                                        <a href="" class="btn btn-danger">Delete</a>
                                                                </div>

                                                                <div class="mt-4">
                                                                        <a href="<?= base_url('project'); ?>" class="btn btn-outline-secondary">
                                                                                <i class="bi bi-arrow-left"></i> Kembali
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>


        <?= $this->endSection(); ?>