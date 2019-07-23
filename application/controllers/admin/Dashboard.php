<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct()
	{
		parent::__construct();
		$this->load->model('t_admin');
		$this->load->helper('login_helper');
	}

	public function signin(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$result = $this->t_admin->getByName($user);
		$session = $result[0];
		if ($session['password'] == md5($pass)){
			$this->session->set_userdata($session);
			$this->session->set_userdata('is_logged_in',true);

			$data["menu"]="dashboard";
			$this->load->view('dashboard/master_header',$data);
			$this->load->view('dashboard/dashboard');
			$this->load->view('dashboard/master_footer');

		} else {
			echo "failed";
			$this->load->view('dashboard/log_in');
		}
	}

	public function index()
	{

		$data["menu"]="dashboard";
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/dashboard');
		$this->load->view('dashboard/master_footer');
	}

	public function login()
	{
		$this->load->view('dashboard/log_in');
	}



	public function masuk()
	{
		$data["menu"]="dashboard";
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/dashboard');
		$this->load->view('dashboard/master_footer');

	}

	function logout()
	{
		$this->session->userdata = array();
		$this->session->sess_destroy();
		$this->load->view('dashboard/log_in');
	}

	function change()
	{
		$this->session->userdata = array();
		$data["admin"]=$this->t_admin->getAll();
		$this->load->view('dashboard/change_password',$data);
	}

	public function update_password()
	{
		$pass1 = $this->input->post('pass1');
		$pass2 = $this->input->post('pass2');
		if ($pass1 != $pass2) {
			// $this->session->set_flashdata('Password', 'Password yang diisi tidak sama');
			echo "<script> alert('Password yang diisi tidak sama'); </script>";
			echo "<script> window.history.back();</script>";
		}else{


			$id = $this->input->post('id');
			$newpas = md5($pass2);
			$data = array(
				'password' => $newpas
				);
		// $data = $this->input->post('add');
			$this->t_admin->update($data,$id);
			$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
			redirect(base_url('index.php/admin/dashboard/login'));
		}
	}

}
