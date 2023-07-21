<?php

class About extends Controller
{
    public function index($nama = 'Wahyu Fajri', $pekerjaan = 'Mahasiswa', $umur = 21)
    {
        $data['judul'] = 'Tentangku';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Halamanku';

        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}
