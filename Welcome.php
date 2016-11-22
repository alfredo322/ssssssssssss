<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('formulario');
		
	}
	
	public function __construct(){
		parent::__construct();
		$this->load->model('formulario_model');
	}
	
	public function recibirDatos(){
		$this->load->database();
		$data=array(
			'Nombres'=>$this->input->post('Nombres'),
			'Apellidos'=>$this->input->post('Apellidos'),
			'Edad'=>$this->input->post('Edad'),
			'Fecha de nacimiento'=>$this->input->post('Fecha de nacimiento'),
			'Ingrese celulares'=>$this->input->post('Ingrese celulares'),

			);
		$this->formulario_model->crearPerfil($data);
	}
	public function procesa(){
		$this->load->database();
		$this->load->view('progra/formulario');
		$query = ''; //declaramos para evitar advertencias de PHP
		$nombre = $this->input->post('Nombre', TRUE);
		$sql= "insert into maestra(Nombres,Apellidos,Edad,Fecha_nacimiento)values('$Nombres','$Apellidos','$Edad','$Fecha_nacimiento')";
		$query = $this->db->query($sql, array($query));
		redirect('/controlador/formulario', 'refresh'); //redirecciona para seguir insertando
		 }


//JAVASCRIPT//

	public function ver()
	{
		$this->load->view('Progra/1_Formulario_prac5');
		
	}
	public function sesion_1()
	{
		$Nombre=$this->input->post('Nombre');
		$data=array('Nombre'=>$Nombre,'id'=>0);
		$this->session->set_userdata($data);
		echo $this->session->userdata('Nombre');
		//$this->session->set_userdata($Nombre);
		//$this->load->view('Progra/2_Formulario_pract_5');
	}
	public function sesion_2()
	{
		$Direccion=$this->input->post('Direccion');
		$this->session->set_userdata($Direccion);
		$data = array('Nombre' => $Nombre,'Direccion'=>$Direccion );
		$this->load->view('3_Formulario_pract5',$data);

	}
	
}
?>
