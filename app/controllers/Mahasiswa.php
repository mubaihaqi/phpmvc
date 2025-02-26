<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('template/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('template/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('template/footer');
    }
}
