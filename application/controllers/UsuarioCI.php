<?php

class UsuarioCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        $this->load->Model('Usuario');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $salida = $this->Usuario->validar($email, $pass);



        echo json_encode($salida);
    }

    public function registrarse() {
        
         $this->load->Model('Usuario');
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'ape_pat' => $this->input->post('paterno'),
            'ape_mat' => $this->input->post('materno'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'idempresa' => $this->input->post('idempresa'),
        );
        
        
        
        $salida = $this->Usuario->registro($data);
        echo json_encode($salida);
       
    }

}
