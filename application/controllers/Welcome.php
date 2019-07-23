<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('t_banner');
		$this->load->model('t_page_home');
	}

	public function index()
	{
		$data["menu"]="home";
		$data["slider"]=$this->t_banner->getActiveSlider();
		$data["form_data"]=$this->t_page_home->getPage('1');
		$this->load->view('master_header.php',$data);
		$this->load->view('home.php');
		$this->load->view('master_footer.php');
		$this->load->view('splash.php');
	}
}
