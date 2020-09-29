<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auditor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index() {
        $this->session->unset_userdata('idauditor');
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        $this->load->view('auditoria/login');
    }

    public function datos() {
        $this->load->view('auditoria/auditor');
    }

    public function revision() {
        $this->load->view('auditoria/revisionAuditor');
    }

    public function verificaAsignacion() {

        $this->load->Model('Auditores');

        $datos = $this->Auditores->asignaAuditor($this->session->userdata('idauditor'));


        if ($datos) {


            foreach ($datos as $value) {
                $this->session->set_userdata('auditor', true);
                $this->session->set_userdata('user', $value->iduser);
            }



            echo json_encode($datos);
        } else {
            echo json_encode(false);
            $this->session->set_userdata('auditor', false);
        }
    }

    public function recomendacion() {
        
        
        $this->load->Model('Auditores');
        
        $iduser = $this->input->post('iduser');
        $iddetalle = $this->input->post('iddetalle');
        $recomendacion = $this->input->post('recomendacion');
        
        $resultado = $this->Auditores->recomendacion($iduser,$iddetalle,$recomendacion);
        
         echo json_encode($resultado);
        
    }

}
