<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('login/login_Model');
        $this->load->library(array('form_validation'));
        $this->load->helper(array('url', 'form','security'));
        $this->load->database();
    }

    public function index() 
    {
        $js = array(
            "assets/modules/select2/dist/js/select2.full.min.js",
            "assets/modules/datatables/datatables.min.js",
            "assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js",
            "assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js",
            "assets/js/page/bootstrap-treeview.min.js");

        $this->form_validation->set_rules('nombre' ,'Nombre', 'required');
        $this->form_validation->set_rules('password' ,'Password', 'required|callback_verifica');
        if($this->form_validation->run() == false)
        {
            $data['main_title'] = 'SmartEncode';
            $data['title2'] = 'Registro';

            $this->load->view('login/login',compact('js'));
        }
        else
        {
            redirect('');
        }
        
    }
    public function olvido_pass() 
    {
        $js = array("assets/modules/select2/dist/js/select2.full.min.js",
        "assets/js/page/bootstrap-treeview.min.js");
        $this->load->view('login/forgot_pass',compact('js'));        
    }
    
        public function verifica()
    {
        
        $correo = $this->input->post('email');
        $password = $this->input->post('password');
        //echo hash('sha256', $this->input->post('password'));
        //exit;
        if($this->login_model->login($correo, $password))
        {
            redirect('Dashboard');
        }
        else
        {
            
            $this->form_validation->set_message('verifica','Contraseña incorrecta');
            redirect(base_url().'login');
        }
    }
    public function new_user() 
        {
            //var_dump($_POST);
            //var_dump($this->session->userdata());
            //exit;
            if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) 
                {
                    $this->form_validation->set_rules('txtUsuario', 'Ingrese nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
                    $this->form_validation->set_rules('txtClave', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
                    //lanzamos mensajes de error si es que los hay

                    if ($this->form_validation->run() == FALSE) 
                        {
                            $this->index();
                        } 
                    else 
                        {
                            $username = $this->input->post('txtUsuario');
                            $password = hash('sha256',$this->input->post('txtClave'));

                            //$password=sha256($this->input->post('txtClave'));
                            $check_user = $this->login_model->login_user($username, $password);

                            if ($check_user == TRUE) 
                                {
                                    
                            //var_dump($data);

                            //var_dump($this->session->userdata());
                            //exit;
                                    $this->index();
                                }
                        }
                } 
            else 
                {
                    $this->session->sess_destroy();
                    $this->index();
                    //redirect(base_url() . 'login');
                }
        }

    public function token() {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }

    public function logout_ci() {
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }

}
