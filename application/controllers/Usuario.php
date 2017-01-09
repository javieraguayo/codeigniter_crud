<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('usuario_model');
    }

    public function index()//nombre de la funcion igual a la vpopmail_set_user_quota(user, domain, quota)
    {
        $data['contenido'] = "usuario/index"; //envio contenido a la plantilla
        $data['selPerfil'] = $this->usuario_model->selPerfil(); //almaceno en la variable selperfil
        //listar usuarios
        $data['listUsuario'] = $this->usuario_model->listUsuario();
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

    public function delete($id = NULL){
        if ($id != NULL) {
            $this->usuario_model->deleteUsuario($id);
            redirect('');
        }
    }

    public function edit($id = NUll){//nombre de la funcion igual a la vista

        if ($id != NULL) {
            $data['contenido'] = 'usuario/edit';
            $data['selPerfil'] = $this->usuario_model->selPerfil();//traemos los perfiles
            $data['datosUsuario'] = $this->usuario_model->editUsuario($id);//llamamos a la funcion del modelo y lo alamacenamos
            $this->load->view('plantilla', $data);//llevamos los datos a la vista
        }else{

            redirect('');
        }
    }

    public function update(){
         $datos = $this->input->post();
        if (isset($datos)) {
            $txtUsuid      = $datos['txtUsuid'];
            $txtPerid     = $datos['txtPerid'];
            $txtNombres   = $datos['txtnombres'];
            $txtApellidos = $datos['textApellidos'];
            $txtCorreo    = $datos['textCorreo'];
            $txtTelefono  = $datos['textTelefono'];
            $this->usuario_model->updateUsuario($txtUsuid ,$txtPerid, $txtNombres, $txtApellidos, $txtCorreo, $txtTelefono);

    }
}
}