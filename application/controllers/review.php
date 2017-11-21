<?php
	/**
	* 
	*/
	class review extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('data_model');
		}
		function index($nama)
		{
			$nama1=str_replace("%20", " ", $nama);
			$data['review']=$this->data_model->ambil_review_film($nama1);
			$data['nama']=$nama1;
			$this->load->view('movie_review',$data);
		}
		function add_review($nama)
		{
			$data=array(
				'nama_film'=>$nama,
				'review'=>set_value('review'),
				'button'=>'Tambah',
				'action'=>site_url('review/add_review_action')
			);
			$this->load->view('review_form',$data);

		}
		function add_review_action()
		{
			$data=array(
				'nama_film'=>$this->input->post('nama_film'),
				'review'=>$this->input->post('review'),
				'username'=>$this->session->userdata('username')
			);
			$this->data_model->insert_review($data);
			redirect('home/movies');
		}
	}
?>