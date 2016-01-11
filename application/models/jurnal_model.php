<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jurnal_model extends CI_Model{

	
	public function __construct(){
		parent::__construct();
	}

	public function getUsername($id,$pass){
		$query = $this->db->query("SELECT * FROM user WHERE name = '{$id}' AND password = '{$pass}'");
		return $query->row();
	}

	

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */