<?php

class Cari extends Controller {
    public function index(){
        $data['sayur'] = $this->model('Katalog_model')->getsayur($_POST['nama']);
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('katalog/cari',$data);
        $this->view('templates/footer');
    }
}