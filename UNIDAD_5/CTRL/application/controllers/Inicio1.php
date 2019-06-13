<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio1 extends CI_Controller {


	public function __construct()
	{	
		parent::__construct();
		$this->load->model('Modelo');
		$this->load->database('default');
		$this->load->helper('form');
   		$this->load->library('form_validation'); 
   		$this->load->library('session'); 
   		$this->load->model('Login_model');

	}
	/*controles inicio*/
	public function principal()
	{
		$this->load->view('principal');
	}

	public function reg()
	{
		$this->load->view('registro');
	}

	public function menp()
	{
		$this->load->view('menuprin');
	}

	public function gan()
	{
		$this->load->view('ganado');
	}

	public function agr()
	{
		$this->load->view('Agregar_Ganado');
	}
	public function edi()
		{
			$this->load->view('editar_ganado');
		}

	public function eli()
		{
			$this->load->view('eliminar_ganado');
		}
	public function prin()
		{
			$this->load->view('menuprin');
		}	
	public function agregarganado()
	{
		$this->load->view('nuevo_ganado');
	}

	public function insertarganado()
	{
	$this->load->model('');
		$Raza = $this->input->post('Raza');
		$Fecha_Naci = $this->input->post('Fecha_Naci');
		$Estado = $this->input->post('Estado');
		$Fecha_Muerte = $this->input->post('Fecha_Muerte');
		$guardar_datos = $this->Modelo->insertarganado_model($Raza,$Fecha_Naci,$Estado, $Fecha_Muerte);
		$this->load->view('ganado');
	}

	

	public function eliminarganado()
	{
		$id = $this->input->post('id');
		$guardar_datos = $this->Modelo->eliminargando_model($id);
		$this->load->view('ganado');
	}



	public function editarganado()
	{
		$id = $this->input->post('id');
		$Raza = $this->input->post('Raza');
		$Fecha_Naci = $this->input->post('Fecha_Naci');
		$Estado = $this->input->post('Estado');
		$Fecha_Muerte = $this->input->post('Fecha_Muerte');
		$guardar_datos = $this->Modelo->editarganado_model($id,$Raza,$Fecha_Naci,$Estado, $Fecha_Muerte);
		$this->load->view('ganado');
	}
	

		function login(){
     $this->load->helper(array('form'));
    $this->load->view('login_view');
 }
  

public function user_login_process() {
			
      
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');        
        if ($this->form_validation->run() == FALSE) {
			
            if(isset($this->session->userdata['logged_in'])){	header('Location: prin');
               
            }else{
				
                $this->load->view('login_view');                
            }
			
        }else{
			
				
                $data = array(    'username' => $this->input->post('username'),
                                'password' => md5($this->input->post('password')));
                

                $result = $this->Login_model->login($data);            			
				
                if ($result == TRUE) {                
			
                    $username = $this->input->post('username');
                    
                    $result = $this->Login_model->read_user_information($username);
                
                    if ($result != false) {
                        $session_data = array(
                                                
                                                'username' => $result[0]->username,
                                                'iduser'=> $result[0]->id,
                                        );                                        
                        
                        $this->session->set_userdata('logged_in', $session_data);
                         $this->load->view('menuprin');                       
                       
                    }
                }else{
                    $data = array('error_message' => 'Usuario o contraseña no coinsiden');
                    $this->load->view('login_view', $data);
                }
        }
    }
   public function logout() {
    
        
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->load->view('login_view');
     }
    	/*fin controles*/
	

	
	


}