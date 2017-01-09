<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model extends CI_Model
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();//carga base de datos
    }
    public function selPerfil()//trae los perfiles de la bd
    {
        $query = $this->db->query("Select * from perfil");
        return $query->result();
    }

    public function insertUsuario($idper, $nombres, $apellidos, $correo, $telefono)
    {//inserta los usuarios
        $arrayDatos = array(//primer campo nombre de las columnas
            'per_id'        => $idper,
            'usu_nombres'   => $nombres,
            'usu_apellidos' => $apellidos,
            'usu_correo'    => $correo,
            'usu_telefono'  => $telefono,
        );
        $this->db->insert('usuario', $arrayDatos);
    }

    public function listUsuario()
    {
        //inner join para traer nombres desde la otra tabla
        $query = $this->db->query("Select * from usuario u inner join perfil p on u.per_id = p.per_id"); //lista el usuario a partir de su id
        return $query->result();
    }

    public function deleteUsuario($id){
        $this->db->where('usu_id', $id);//campo id y el que trae por parametro
        $this->db->delete('usuario');//nombre de la tabla
      

    }

    public function editUsuario($id){

        $query = $this->db->query("select * from usuario u inner join perfil p on u.per_id = p.per_id where u.usu_id = $id");//compara el id
        return $query->result();
    }

    public function updateUsuario($txtUsuid ,$txtPerid, $txtNombres, $txtApellidos, $txtCorreo, $txtTelefono)
    {
        $array = array(
            'per_id'        => $txtPerid,
            'usu_nombres'   => $txtNombres,
            'usu_apellidos' => $txtApellidos,
            'usu_correo'    => $txtCorreo,
            'usu_telefono'  => $txtTelefono,
            );
        $this->db->where('usu_id', $txtUsuid);
        $this->db->update('usuario', $array);

    }
}

/* End of file usuario_model */
/* Location: ./application/models/usuario_model */
