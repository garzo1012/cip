<?php

        class Login extends CI_Controller
    {
     
        public function __construct()
        {
            parent:: __construct();
            $this->load->model('login_model');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->library('form_validation');
            $this->load->library('session');
        }


        public function index()
        {
            if (isset($this->session->userdata['id'])) {
                $this->load->view('plantilla');
            }

            elseif(!isset($_POST['email'])){

                $this->load->view('login');

            }
            else{
           
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('pass', 'Password', 'required');
               
                    if($this->form_validation->run() == FALSE){
                        
                        $this->load->view('login');

                    }
                    else{

                        $cons = $this->login_model->getLogin($_POST['email'],$_POST['pass']); 
                        
                        if($cons){
                            
                            $sesion_data = array(
                                                    'id' => $cons[0]['Id_Usuario'],
                                                );
                            
                            $this->session->set_userdata($sesion_data);
                            $data['id'] = $this->session->userdata['id'];
                            $this->load->view('plantilla');

                        }
                        else{
                            
                            $this->load->view('login');

                        }
                    }
            }

        }

        public function salir(){
            $this->login_model->salir();
            $this->load->view('login');
        }

    }


?>