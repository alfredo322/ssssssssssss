<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_java extends CI_Controller 
{

	public function ajax(){
		 $this->load->view('demo');		 
		 }

	public function guardar_jc(){
		$this->load->model('Model_java');
		$this->Model_java->guardar_jm();

	}



}
?>