<?php
class Plantillas extends CI_Controller {

	
	public function index()
	{
		$this->load->view('plantilla');
	}

	public function drag(){
		$this->load->view('drag');
	}
}


?>