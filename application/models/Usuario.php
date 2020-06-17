<?php

class Usuario extends CI_Model {

    public $table = 'usuario';

    public function validar($email, $pass) {
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get('usuario');


        if ($query->num_rows() > 0) {
            return true;
        }
        return false;
    }

    public function registro($data) {
        $id = $data["email"];
       
       
       $query = $this->db->insert('usuario', $data);
       $sql = "SELECT iduser FROM usuario where usuario.email = '$id'";
       $consulta =  $this->db->query($sql);    
      
       $fila = $consulta->row_array();
       
       $iduser = $fila["iduser"];
      
        
       if($query){ 
            for($i = 1; $i <= 45;$i++){
                $insert = "insert into detallesubco (iduser, idsubco) values (' .$iduser.', '.$i.')";
                $this->db->query($insert);
            }
       }


        return $query;
    }

}
