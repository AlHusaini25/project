<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="about" class="py-5">
        <div class="container text-center">
            <img src="<?= base_url('img/alkecik.JPG') ?>" alt="Foto Profil" class="w-25 h-25 mb-3 rounded-circle">
            <h2>Tentang Saya</h2>
            <p class="mt-3 text-muted">
                Saya adalah seorang pelajar pengembang web yang berfokus pada pembuatan website responsif
                menggunakan teknologi modern seperti HTML, CSS, JavaScript, dan Bootstrap di SMK SYAFI'I AKROM.
            </p>
        </div>
    </section>
<?= $this->endSection() ?>