<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Profil_model extends CI_Model {
	public function __construct()
     {
          parent::__construct();
     }
     
    public function update($data, $id)
	{
		$this->db->update('user', $data, array('id' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
}