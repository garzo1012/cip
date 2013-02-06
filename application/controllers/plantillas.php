<?php
class Plantillas extends CI_Controller {

	
	public function index()
	{
		$this->load->view('plantilla');
	}

	public function drag(){
		$this->load->helper('url');
		$data['base'] =  base_url();
		$this->load->model('tarjetasbd');
		$tarjetas = $this->tarjetasbd->getTarjetas();
		$data['tarjetas']=$tarjetas;
		$this->load->view('drag',$data,$tarjetas);
	}
}


?>