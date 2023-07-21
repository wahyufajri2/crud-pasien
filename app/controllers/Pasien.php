<?php

class Pasien extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Pasien';
        $data['psn'] = $this->model('Pasien_model')->getAllPasien();

        $this->view('templates/header', $data);
        $this->view('pasien/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id_pasien)
    {
        $data['judul'] = 'Detail Pasien';
        $data['psn'] = $this->model('Pasien_model')->getPasienById($id_pasien);

        $this->view('templates/header', $data);
        $this->view('pasien/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Pasien_model')->tambahDataPasien($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        }
    }

    public function hapus($id_pasien)
    {
        if ($this->model('Pasien_model')->hapusDataPasien($id_pasien) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        }
    }
}
