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

        $query = $this->db->get('control');
        return $query->result();
    }

    public function subcontrol($id) {
         $this->db->where('idcontrol', $id);
        $query = $this->db->get('subcontrol');

        return $query->result();
    }

}
