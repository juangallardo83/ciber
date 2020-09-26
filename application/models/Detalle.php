<?php

class Detalle extends CI_Model {

    public $table = 'detallesubco';

    public function insertar($data,$id) { 
        $this->db->where('idsubco', $id);
        $this->db->where('iduser', $this->session->userdata('user'));
        $query = $this->db->update('detallesubco', $data);
        return $query;
       
    }
    
    public function AgregaArchivo($data,$id) { 
        $this->db->where('idsubco', $id);
        $this->db->where('iduser', $this->session->userdata('user'));
        $query = $this->db->update('detallesubco',$data);
        return $query;
       
    }
    public function nivelMadurez() { 
        $sql= "SELECT
                ROUND((sum(detallesubco.idestado) * 100) / (count(*) * 5)) as madurez
                FROM
                detallesubco
                WHERE detallesubco.iduser = '". $this->session->userdata('user') ."'";       
        
        $query = $this->db->query($sql);
        return $query->result();
       
    }
    
    public function Evaluacion($id){
        $this->db->select('*');
        $this->db->where('idsubco', $id);  
        $this->db->where('iduser', $this->session->userdata('user'));
        $this->db->join('estado', 'estado.idestado = detallesubco.idestado');
        $query = $this->db->get('detallesubco');
        
        
        return $query->result();
    }

}
