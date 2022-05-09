<?php

class Surat extends Controller{
    public function index()
    {
        $data['judul'] = 'Masuk';
        $this->view('templates/header',$data);
        $this->view('surat/Masuk',$data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Tambah';
        $this->view('templates/header',$data);
        $this->view('surat/tambah',$data);
        $this->view('templates/footer');
    }
    public function keluar()
    {
        $data['judul'] = 'Keluar';
        $this->view('templates/header',$data);
        $this->view('surat/keluar',$data);
        $this->view('templates/footer');
    }
}