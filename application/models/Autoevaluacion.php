<?php

class Autoevaluacion extends CI_Model {

    public $table = 'subcontrol';

    public function despliegue() {
        $sql = "select control.nomcuest, subcontrol.idcontrol, subcontrol.idsubco,
                subcontrol.titulo,
                subcontrol.descripcion,
                control.id
                FROM
                subcontrol
                INNER JOIN control ON subcontrol.idcontrol = control.id";
        
       

        $query = $this->db->query($sql);

        return $query->result();
    }

    public function controles() {

         $sql = "SELECT
                control.id,
                control.nomcuest as control,
                ROUND((sum(idestado) * 100) / (count(*) * 5)) AS avance,
                control.idnivel
                FROM
                control
                INNER JOIN subcontrol ON subcontrol.idcontrol = control.id
                INNER JOIN detallesubco ON detallesubco.idsubco = subcontrol.idsubco
                GROUP BY control.nomcuest
                ORDER BY id";
         
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function subcontrol($id) {
        
        
        $sql= "SELECT
                subcontrol.idcontrol,
                subcontrol.idsubco,
                subcontrol.titulo,
                subcontrol.descripcion,
                detallesubco.idestado
                FROM
                subcontrol
                INNER JOIN detallesubco ON detallesubco.idsubco = subcontrol.idsubco
                where subcontrol.idcontrol = '.$id.'";
       
        
       $query = $this->db->query($sql);

        return $query->result();
    }
    
    

}
