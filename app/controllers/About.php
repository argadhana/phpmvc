<?php

class About extends Controller{
    public function index($nama = 'Arga'){
        $data['nama'] = $nama;
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }

    public function page(){
        $this->view('about/page');
    }
}