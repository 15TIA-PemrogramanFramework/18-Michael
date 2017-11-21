<?php
	/**
	* 
	*/
	class login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('data_model');
		}
		function index()
		{

			if(!$this->input->post())
			{
				$this->load->view('login');
			}else
			{
				$username=$this->input->post('username');
				$cek_user=$this->data_model->cek_login_user(
					$this->input->post('username'),
					$this->input->post('password'));
				$cek_admin=$this->data_model->cek_login_admin(
					$this->input->post('username'),
					$this->input->post('password'));
				$cek_owner=$this->data_model->cek_login_owner(
					$this->input->post('username'),
					$this->input->post('password'));
				if(!empty($cek_admin))
				{
					$this->session->set_userdata('user', true);
					$this->session->set_userdata('username',$username);
				}else if(!empty($cek_user))
				{
					$this->session->set_userdata('admin',true);
					$this->session->set_userdata('username',$username);

				}else if(!empty($cek_owner))
				{
					$this->session->set_userdata('owner',true);
					$this->session->set_userdata('username',$username);
				}
				redirect('/home');
			}
		}
		function register()
		{
			if(!$this->input->post())
			{
				$this->load->view('login');
			}else
			{
				if($this->input->post('password')== $this->input->post('confpass'))
				{
					$data=array(
						'username'=>$this->input->post('username'),
						'password'=>$this->input->post('password'),
						'nama'=>$this->input->post('nama'),
						'ttl'=>$this->input->post('ttl'),
						'email'=>$this->input->post('email')
					);
					$this->data_model->register($data);
					$this->session->set_userdata('user',true);
					redirect('/home');
				}
			}
		}
		function signout()
		{
				$this->session->unset_userdata('user');
				$this->session->unset_userdata('admin');
				$this->session->unset_userdata('owner');
				redirect("/home");
		}
	}
?>