<?php

class UsuarioCI extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function login(){
        $this->load->Model('Usuario');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        
        $salida = $this->Usuario->validar($email,$pass);
        
        
       
        echo json_encode($salida);
    }
}

