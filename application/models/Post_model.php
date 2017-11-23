<?php defined ('BASEPATH') OR exit ('tidak boleh langsung');

//bab 2.6 sekilas mengenai model

class Post_model extends CI_Model
{
	public function __construct()
		{
			parent::__construct();
		}

	public function create($table,$data)
		{
			$this->db->insert($table,$data);
		}
}