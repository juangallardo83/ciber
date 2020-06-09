<?php

class Detalle extends CI_Model {

    public $table = 'detallesubco';

    public function insertar($data,$id) { 
        $this->db->where('idsubco', $id);
        $query = $this->db->update('detallesubco', $data);
        return $query;
       
    }
    
    public function nivelMadurez() { 
        $sql= "SELECT
                ROUND((sum(detallesubco.idestado) * 100) / (count(*) * 5)) as madurez
                FROM
                detallesubco";       
        
        $query = $this->db->query($sql);
        return $query->result();
       
    }

}
