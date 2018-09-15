<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insertData($id)
	{ 
		 return $this->db->insert('tintuc', $id);
	}

}

/* End of file Tintuc_model.php */
/* Location: ./application/models/Tintuc_model.php */