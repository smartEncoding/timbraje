<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function mipassword_verify($pass,$row_pass)
	{
		$password = hash('sha256',$pass);
		if ($row_pass==$password)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

        public function login($correo, $password)
        {
                /*https://colaboratorio.net/atareao/developer/2018/registro-y-control-de-acceso-con-codeigniter/ */

		$query = $this->db->get_where('usuarios', array('correo' => $correo));

                if($query->num_rows() == 1)
                {          

                        $row=$query->row();
                        if($this->mipassword_verify($password, $row->clave))
                        {
                                $data = array(
                                        'is_logued_in' => TRUE,
                                        'date_loged' => date('d/m/Y h:m:s'),
                                        'id_usuario' => $row->id,
                                        //'perfil' => $row->perfil,
                                        'username' => $row->username,
                                        'nombre'=> $row->nombre,
                                        'cargo'=>$row->cargo,
                                        //'pseudo'=>$row->PSEUDO,
                                        'correo'=>$row->correo,
                                        'img'=>$row->img,
                                        //'rut'=>$row->rut,
                                        'session_id'=>session_id()
                                        
                                );
                                $this->session->set_userdata($data);

                                return true;
                        }
                }
                $this->session->unset_userdata('user_data');
                return false;
	}
}