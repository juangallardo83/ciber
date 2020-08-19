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
    
    public function subcontroltit() {
        $this->load->Model('Autoevaluacion');
        $id = $this->input->post('idcontrol');
        $subcon= $this->Autoevaluacion->subcontroltit($id);
        echo json_encode($subcon);
    }
    
    public function subtitulo() {
        $this->load->Model('Autoevaluacion');
        $id = $this->input->post('idsubco');
        $subcon= $this->Autoevaluacion->subcontroldesc($id);
        echo json_encode($subcon);
    }
    
    public function controltit() {
        $this->load->Model('Autoevaluacion');
        $id = $this->input->post('idcontrol');
        $control= $this->Autoevaluacion->controltit($id);
        echo json_encode($control);
    }
    
    

    public function detalle() {
        $this->load->Model('Detalle');

        $idsubco = $this->input->post('idsubco');
        
        $data = array(                    
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
    
    public function validaEvaluacion(){
         $this->load->Model('Detalle');  
        $id = $this->input->post('idsubco');
        
        $resultado = $this->Detalle->Evaluacion($id);
        echo json_encode($resultado);
    }
            

}
