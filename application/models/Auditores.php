<?php

class Auditores extends CI_Model {

    public $table = 'auditores';

    public function validar($email, $pass) {
        $this->db->select("idauditor,rut, nomcompleto,email");
        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get('Auditores');

        //$fila = $query->row_array();
        //$fila["iduser"];






        return $query;
    }

    public function asignaAuditor($auditor) {
        $sql = "SELECT
                    usuario.nombre,
                    usuario.ape_pat,
                    usuario.nom_emp,
                    usuario.email,
                    nivel.nomnivel,
                    asignacion.iduser,
                    asignacion.fecha
                FROM
                    asignacion
                    INNER JOIN usuario ON asignacion.iduser = usuario.iduser
                    INNER JOIN nivel ON usuario.idempresa = nivel.idnivel
                WHERE
                    asignacion.idauditor = '$auditor'";

        //$sql = "SELECT * FROM usuario where usuario.email = '$email'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function auditoria($iduser) {
        $sql = "SELECT
            auditores.nomcompleto,
            auditores.email,
            asignacion.iduser,
            asignacion.fecha
            FROM
            asignacion
            INNER JOIN auditores ON asignacion.idauditor = auditores.idauditor
            WHERE
            asignacion.iduser = '$iduser'";


        $query = $this->db->query($sql);

        return $query->result();
    }

    public function recomendacion($iduser,$iddetalle,$recomendacion) {
        
        
        $update = array(
                'obsauditor' => $recomendacion                
             );

        $this->db->where('iduser', $iduser);
        $this->db->where('iddetalle', $iddetalle);
        $query = $this->db->update('detallesubco', $update);
        return $query;
    }

}
