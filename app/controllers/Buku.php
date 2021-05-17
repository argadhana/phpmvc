<?php

class Buku extends Controller{
    public function index(){
        $data['buku'] = $this->model('Buku_model')->getAllBuku();
        $this->view('templates/header');
        $this->view('buku/index', $data);
        $this->view('templates/footer');

    }

    public function tambah(){
  
        if ($this->model('Buku_model')->tambahDataBuku($_POST) > 0){
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }
}