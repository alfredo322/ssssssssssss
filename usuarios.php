<?php
class Usuarios extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('progra/formulario');
	}

	public function registro()
	{
		$this->load->view('progra/formulario');
	}
	public function registro_very()
	{
		if($this->input->post('submit_reg'))
		{
			$this->form_validation->set_rules('Nombres','Nombres','required');
			$this->form_validation->set_rules('Apellidos','Nombres','required');
			$this->form_validation->set_rules('Edad','Edad','required');
			$this->form_validation->set_rules('Fecha de nacimiento','Fecha de nacimiento','required');
			if($this->form_validation->run() !=FALSE)
			{

			}
			else
			{
				$this->load->view('progra/formulario');
			}

		}

	}
	
	public function estudiantes()
	{
		$query='';
		$this->load->database();

		
		$sql= "select *  from maestra";
			 $query = $this->db->query($sql, array($query));
              $data['estudiantes']=$query->result_array();
			 // print_r($query->result_array());
			  
		$this->load->view('lista',$data);
	}
	public function delete()
	{
			$query='';
		$this->load->database();
		echo $id = $this->uri->segment(3);
			$sql= "delete from maestra where id_estudiante='$id'";
			 $query = $this->db->query($sql, array($query));
	}

}

?>