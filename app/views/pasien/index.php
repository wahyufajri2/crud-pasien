<div class="container mt-3">

    <div class="row">
        <div class="col">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Pasien
            </button>
            <h3 class="mt-4">Daftar Pasien</h3>
            <table class="table table-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="table-active">
                        <th>Nomor</th>
                        <th>ID Pasien</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data['psn'] as $psn) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $psn['id_pasien']; ?></td>
                            <td><?= $psn['nama']; ?></td>
                            <td><?= $psn['umur']; ?></td>
                            <td><?= $psn['alamat']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/pasien/detail/<?= $psn['id_pasien']; ?>" class="badge badge-primary">detail</a>
                                <a href="<?= BASEURL; ?>/pasien/edit/<?= $psn['id_pasien']; ?>" class="badge badge-success tampilModalEdit" data-toggle="modal" data-target="#formModal" data-id_pasien="<?= $psn['id_pasien']; ?>">edit</a>
                                <a href="<?= BASEURL; ?>/pasien/hapus/<?= $psn['id_pasien']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/pasien/tambah" method="post">
                    <input type="hidden" name="id_pasien" id="id_pasien">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pasien..">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="umur" name="umur" placeholder="Umur pasien...">
                            <div class="input-group-append">
                                <span class="input-group-text" id="umur">Tahun</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Pasien...">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>