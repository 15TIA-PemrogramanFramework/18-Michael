<?php
	/**
	* 
	*/
	class film extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('data_model');
		}
		function movies_cat_anime($kategori)
		{
			$data['film']=$this->data_model->ambil_data_film($kategori);
			$data['kategori']=$kategori;
			$this->load->view('movie_category_anime',$data);
		}
		function movies_cat_marvel($kategori)
		{
			$data['film']=$this->data_model->ambil_data_film($kategori);
			$data['kategori']=$kategori;
			$this->load->view('movie_category_marvel',$data);
		}
		function movies_cat_thriller($kategori)
		{
			$data['film']=$this->data_model->ambil_data_film($kategori);
			$data['kategori']=$kategori;
			$this->load->view('movie_category_thriller',$data);
		}
		function add_film($kategori)
		{
			$data=array(
				'nama_film'=>set_value('nama_film'),
				'kategori'=>$kategori,
				'button'=>'Tambah',
				'action'=>site_url('film/add_film_action')
			);
			$this->load->view('film_form',$data);

		}
		function add_film_action()
		{
			$data=array(
				'nama_film'=>$this->input->post('nama_film'),
				'kategori'=>$this->input->post('kategori')
			);
			$this->data_model->insert_film($data);
			redirect('home/movies');
		}


		function delete($username)
		{
			$this->data_model->hapus_data($username);
			redirect(site_url('/home/admin'));
		}
	}
?>