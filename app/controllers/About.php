<?php

class About extends Controller
{
    public function index($nama = 'Unch', $job = 'Unch', $age = 404)
    {
        $data['nama'] = $nama;
        $data['job'] = $job;
        $data['age'] = $age;
        $data['judul'] = 'About Me';
        $this->view('template/header', $data);
        $this->view('About/index', $data);
        $this->view('template/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('template/header', $data);
        $this->view('About/page');
        $this->view('template/footer');
    }
}
