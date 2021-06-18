<?php

class Login extends Controller {
    public function index()
    {
        $data['account'] = $this->model('Login_model')->getadmin();
        $this->view('templates/header');
        $this->view('templates/admin_navbar');
        $this->view('login/index',$data);
        $this->view('templates/footer');
    }

}