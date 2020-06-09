<?php

class AutoevaluacionCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('autoevaluacion');
    }

    public function salida() {
        $this->load->Model('Autoevaluacion');
        $salida = $this->Autoevaluacion->despliegue();
        echo json_encode($salida);
    }

    public function control() {
        $this->load->Model('Autoevaluacion');
        $controles = $this->Autoevaluacion->controles();
        echo json_encode($controles);
    }

    public function subcontrol() {
        $this->load->Model('Autoevaluacion');
        $id = $this->input->post('idcontrol');
        $controles = $this->Autoevaluacion->subcontrol($id);
        echo json_encode($controles);
    }

    public function detalle() {
        $this->load->Model('Detalle');

        $idsubco = $this->input->post('idsubco');
        
        $data = array(
            'iduser' => $this->input->post('iduser'),            
            'idestado' => $this->input->post('idestado')
        );

       
        $detalle = $this->Detalle->insertar($data,$idsubco);
        echo json_encode($detalle);
    }
    
    
    public function madurez() {
        $this->load->Model('Detalle');  
        $madurez = $this->Detalle->nivelMadurez();
        echo json_encode($madurez);
    }

}
