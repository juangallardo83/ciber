<?php

class AutoevaluacionCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->helper('url');
        $this->load->library('session');
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
            'idestado' => $this->input->post('idestado'),
            'comentario' => $this->input->post('comentario')
        );

       
        $detalle = $this->Detalle->insertar($data,$idsubco);
        echo json_encode($detalle);
    }
    
    
    public function madurez() {
        $this->load->Model('Detalle');  
        $madurez = $this->Detalle->nivelMadurez();
        echo json_encode($madurez);
    }
    
    public function asignaAuditor() {
        $this->load->Model('Auditores');  
        $auditor = $this->Auditores->Auditoria($this->session->userdata('user'));
        echo json_encode($auditor);
    }
    
    public function validaEvaluacion() {
        $this->load->Model('Detalle');
        $id = $this->input->post('idsubco');

        $this->session->set_userdata('subcon', $id);
        $resultado = $this->Detalle->Evaluacion($id);
        echo json_encode($resultado);
    }


	
     function do_upload() {
        // File upload configuration
        $config['upload_path'] = 'upload';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '10240';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $id = $this->session->userdata('subcon');
        $nomarchivo = "Evidencia-" . $this->session->userdata('user') . "-" . $id;


        $config['file_name'] = $nomarchivo;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile')) {                   
            echo json_encode(false);
        } else {
            $file = $this->upload->data();
            $data = array(
                'evidencia' => $file['file_name']
            );
            $this->load->Model('Detalle');
            $this->Detalle->AgregaArchivo($data, $id);
            echo json_encode($file['file_name']);
        }
        
    }

}
        
    

