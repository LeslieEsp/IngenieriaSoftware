<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct(){
 parent::__construct();
  $this->load->model('Modelo');
   $this->load->helper('form');
   $this->load->library('form_validation'); 
   $this->load->library('session'); 
   $this->load->model('Login_model');

	
}
