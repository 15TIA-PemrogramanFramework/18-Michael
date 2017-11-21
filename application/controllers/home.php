<?php
	class home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('data_model');
		}

		function index()
		{
			$this->load->view('home');
		}

		function about()
		{
			$this->load->view('about');
		}

		function movies()
		{
			$this->load->view('movie');
		}

		function login()
		{
			$this->load->view('login');
		}

		function admin()
		{

			$data['admin']=$this->data_model->ambil_data_admin();
			$this->load->view('admin',$data);
		}
		
	}
?>