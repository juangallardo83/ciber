<?php

class AutoevaluacionCI extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
	{
		$this->load->view('autoevaluacion');
	}
    
    
    public function salida(){
        $this->load->Model('Autoevaluacion');  
        $salida = $this->Autoevaluacion->despliegue();
        echo json_encode($salida);
    }
    
    public function control(){
        $this->load->Model('Autoevaluacion');  
        $controles = $this->Autoevaluacion->controles();
        echo json_encode($controles);
    }
    
    public function subcontrol(){
        $this->load->Model('Autoevaluacion'); 
        $id = $this->input->post('idcontrol');
        $controles = $this->Autoevaluacion->subcontrol($id);
        echo json_encode($controles);
    }
}

