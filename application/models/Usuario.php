<?php

class Usuario extends CI_Model {

    public $table = 'usuario';

    public function validar($email, $pass) {
        $this->db->select("CONCAT((nombre),(' '),(ape_pat),(' ')) as nombre, iduser");
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get('usuario');

        //$fila = $query->row_array();
        //$fila["iduser"];




        return $query;
    }

    public function registro($data) {
        $id = $data["email"];



        $sql = "SELECT iduser FROM usuario where usuario.email = '$id'";

        $consulta = $this->db->query($sql);
       


        if ($consulta->num_rows() > 0) {
            return "existe";
        } else {
            
            $query = $this->db->insert('usuario', $data);

            $sql = "SELECT iduser FROM usuario where usuario.email = '$id'";
            $consulta = $this->db->query($sql); 
            $fila = $consulta->row_array();
            $iduser = $fila["iduser"];
           


            if ($query) {
                for ($i = 1; $i <= 45; $i++) {
                    $insert = "insert into detallesubco (iduser, idsubco) values (' .$iduser.', '.$i.')";
                    $this->db->query($insert);
                }
            }


            return $query;
           
        }
    }

    public function validarUser($email) {


        $sql = "SELECT * FROM usuario where usuario.email = '$email'";
        $query = $this->db->query($sql);

        return $query;
    }

}
