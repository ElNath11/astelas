<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_dampak extends CI_Controller {

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
		$this->load->model('t_page_dampak');
		$this->load->helper('login_helper');
	}


	public function index()
	{

			$data["menu"]="home";
			$this->load->view('dashboard/master_header',$data);
			$data["form_data"]=$this->t_page_dampak->getPage('1');/* View */
			$this->load->view('dashboard/page_dampak',$data);
			$this->load->view('dashboard/master_footer');

	}

		public function update()
	{
		$data = $this->input->post('add');

		$nameImg1 = $this->input->post('img1');
		$nameBanner = $this->input->post('banner');

		$oldbanner = $this->input->post('oldbanner');
		$oldpic1 = $this->input->post('oldpic1');

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('banner'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$img = $this->upload->data();
			$data['banner']=$img['file_name'];
			if (file_exists("./uploads/".$oldbanner)) {
				unlink("./uploads/".$oldbanner);
			}
		}
		if ( ! $this->upload->do_upload('pic1'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$img = $this->upload->data();
			$data['img1']=$img['file_name'];
			if (file_exists("./uploads/".$oldpic1)) {
				unlink("./uploads/".$oldpic1);
			}
		}


		$this->t_page_dampak->update($data,'1');
		$data['proses'] = true;
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
		redirect(base_url("index.php/admin/page_dampak"));
		// $this->index($data);
	}


}