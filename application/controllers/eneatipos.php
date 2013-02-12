<?php
class Eneatipos extends CI_Controller {


	public function index(){		
		$this->load->view('enea-intro');
	}

	public function desc(){		
        $this->load->model('eneagrama');
		$data["eneatipo"] = $this->eneagrama->get_eneatipo($this->uri->segment(3));
		$this->load->view('eneatipo',$data);
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