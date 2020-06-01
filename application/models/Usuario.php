<?php

class Usuario extends CI_Model {

    public $table = 'usuario';

    public function validar($email, $pass) {
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get('usuario');
        
        
        if($query->num_rows() > 0){
            return true;
        }
        return false;
    }

}
