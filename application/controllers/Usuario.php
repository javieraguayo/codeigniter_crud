<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('usuario_model');
    }

    public function index()
    {
        $data['contenido'] = "usuario/index";
        $data['selPerfil'] = $this->usuario_model->selPerfil();
        $this->load->view('plantilla', $data);
    }

    public function insert()
    {

        $datos = $this->input->post();
        if (isset($datos)) {
            $txtid        = $datos['txtIdper'];
            $txtNombres   = $datos['txtnombres'];
            $txtApellidos = $datos['textApellidos'];
            $txtCorreo    = $datos['textCorreo'];
            $txtTelefono  = $datos['textTelefono'];
            $this->usuario_model->insertUsuario($txtid, $txtNombres, $txtApellidos, $txtCorreo, $txtTelefono);

        }

    }
}
