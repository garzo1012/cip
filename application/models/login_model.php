<?php
	    class login_model extends CI_Model
    {
     
        public function __construct()
        {
        $this->load->library('session');
        }
       
       
        public function getLogin($email,$password)
        {
        $data = array(
        'Correo' => $email,
        'Pass' => $password
        );
       
        $query = $this->db->get_where('Usuarios',$data);
        return $query->result_array();
        }
       
       
        public function isLogged()
        {       
            if(isset($this->session->userdata['id']))
            {
            return TRUE;
            }
            else
            {
            return FALSE;
            }         
        }
       
       
       
        public function close()
        {
        //cerrar sesión
        return $this->session->sess_destroy();
        }
    }

?>