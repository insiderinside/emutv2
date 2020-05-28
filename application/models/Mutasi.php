<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Mutasi extends CI_Model {
	public function __construct()
     {
          parent::__construct();
	 }
	 
	 public function tampil($id)
     {
          $this->db->select('*');
		  $this->db->from('mutasi');
		  $this->db->where('id_user', $id);
          $this->db->order_by('tgl_pengajuan', 'DESC');

          return $this->db->get();
	 }
	 
	 public function lihat($id)
	{
		$this->db->select('*');
		$this->db->from('mutasi');
		$this->db->where('id_mutasi', $id);

		return $this->db->get();
	}
	
	public function tambahMutasi($data)
	{
		$this->db->insert('mutasi', $data);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update($data, $id)
	{
		$this->db->update('mutasi', $data, array('id_mutasi' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function hapus($id)
	{
		$this->db->delete('mutasi', array('id_mutasi' => $id));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
}