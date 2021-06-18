<?php

class Katalog extends Controller {
    public function index()
    {
        $data['sayur'] = $this->model('Katalog_model')->getAllKatalog();
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('katalog/index',$data);
        $this->view('templates/footer');
    }
}