<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<header>
        <div class="container">
            <h1 class="display-4 fw-bold">Halo, Saya <span class="text-warning">M.Fahri Al Husaini</span></h1>
            <p class="lead"></p>
            <a href="<?= base_url('/project'); ?>" class="btn btn-light mt-3">Lihat Proyek</a>
        </div>
    </header>


<?= $this->endSection() ?>