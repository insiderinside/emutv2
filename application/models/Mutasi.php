<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Mutasi extends CI_Model {
    public function tambahMutasi($data)
	{
		$this->db->insert('mutasi', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
}