<?php

class UsuarioCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function login() {
        $this->load->Model('Usuario');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $salida = $this->Usuario->validar($email, $pass);
        //$fila = $salida->row_array();

       $nom = "";
        if ($salida->num_rows() > 0) {
            $fila = $salida->row_array();
            
            $this->session->set_userdata('user',$fila["iduser"]);           
            $this->session->set_userdata('nomuser',$fila["nombre"]);          
            
        }
        else{
            $salida = false;
        }

       


      



        echo json_encode($salida);
    }

    public function registrarse() {

        $this->load->Model('Usuario');
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'ape_pat' => $this->input->post('paterno'),
            'nom_emp' => $this->input->post('nom_emp'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'idempresa' => $this->input->post('idempresa'),
            'region' => $this->input->post('region'),
        );



        $salida = $this->Usuario->registro($data);
        echo json_encode($salida);
    }
    
    
    public function logout(){
        
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('nomuser');
        $this->session->sess_destroy();        
        return redirect('/', 'refresh');
    
        
        
    }

}
