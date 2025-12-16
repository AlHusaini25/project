<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="contact" class="py-5">
    <div class="container text-center">
        <h2>Kontak Saya</h2>
        <p class="text-muted">Hubungi saya melalui media sosial di bawah ini:</p>
        <div class="mt-3">
            <a href="https://www.facebook.com/share/1GntGWSmtW/" class="btn btn-outline-dark mx-2"><i class="bi bi-facebook"></i> Facebook</a>
            <a href="https://www.instagram.com/albknbngall?igsh=MXR1NzVyaHlqcmVzcg=="
                class="btn btn-outline-dark mx-2"><i class="bi bi-instagram"></i> Instagram</a>
            <a href="https://github.com/AlHusaini25" class="btn btn-outline-dark mx-2"><i class="bi bi-github"></i> GitHub</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>