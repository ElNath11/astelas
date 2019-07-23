<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penanganan extends CI_Controller {

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
		$this->load->model('t_page_penanganan');
	}

	public function index()
	{
		$data["menu"]="penanganan";
		$data["form_data"]=$this->t_page_penanganan->getPage('1');
		$this->load->view('master_header.php',$data);
		$this->load->view('penanganan.php',$data);
		$this->load->view('master_footer.php');
	}

	public function print_excel()
	{
		$this->load->view('catatan');
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
	}
}
