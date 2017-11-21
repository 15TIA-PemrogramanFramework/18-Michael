<?php

/**
* 
*/
class data_model extends CI_Model
{
	public $table_film ='film';
	public $table_review='review';
	public $table_user='user';
	public $table_admin='admin';
	public $table_owner='owner';
	function __construct()
	{
		parent::__construct();
	}
	function ambil_data_admin()
	{
		return $this->db->get($this->table_admin)->result();
	}
	function ambil_data_film($kategori)
	{
		$this->db->where('kategori',$kategori);
		return $this->db->get($this->table_film)->result();
	}
	function ambil_review_film($nama)
	{
		$this->db->where('nama_film',$nama); 
		return $this->db->get($this->table_review)->result();
	}
	function cek_login_user($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->table_user)->row();
	}
	function cek_login_admin($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->table_admin)->row();
	}
	function cek_login_owner($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->table_owner)->row();
	}
	function insert_review($data)
	{
		return $this->db->insert($this->table_review,$data);
	}
	function insert_film($data)
	{
		return $this->db->insert($this->table_film,$data);
	}
	function register($data)
	{
		return $this->db->insert($this->table_user,$data);
	}
	function hapus_data($username)
	{
			$this->db->where('username' ,$username);
		$this->db->delete($this->table_admin);

	}
}
?>