<div class="container mt-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['psn']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">ID Pasien: <?= $data['psn']['id_pasien']; ?></h6>
            <h6 class="card-subtitle mb-2 text-muted">Umur Pasien: <?= $data['psn']['umur']; ?></h6>
            <h6 class="card-subtitle mb-2 text-muted">Alamat: <?= $data['psn']['alamat']; ?></h6>
            <a href="<?= BASEURL; ?>/pasien" class="card-link">Kembali</a>
        </div>
    </div>

</div>