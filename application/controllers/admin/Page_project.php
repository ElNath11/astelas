<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_project extends CI_Controller {

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
		$this->load->model('t_project');
		$this->load->helper('login_helper');
	}


	public function index()
	{

			$data["menu"]="services";
			$this->load->view('dashboard/master_header',$data);
			$data["form_data"]=$this->t_project->getPage('1');/* View */
			$this->load->view('dashboard/page_project',$data);
			$this->load->view('dashboard/master_footer');
	}

		public function update()
	{
		$data = $this->input->post('add');

		$nameImg1 = $this->input->post('img1');
		$nameImg2 = $this->input->post('img2');
		$nameImg3 = $this->input->post('img3');
		$nameImg4 = $this->input->post('img4');

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('pic1'))
		{

			$error = array('error' => $this->upload->display_errors());

		}
		else
		{
			$img = $this->upload->data();
			$data['project_img_header']=$img['file_name'];
			unlink("./uploads/".$nameImg1);
		}
		if ( ! $this->upload->do_upload('pic2'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$data['project_1_img'] = $this->upload->data('file_name');
			$salah = array('upload_data' => $this->upload->data());
			unlink("./uploads/".$nameImg2);
		}
		if ( ! $this->upload->do_upload('pic3'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$data['project_2_img'] = $this->upload->data('file_name');
			$salah = array('upload_data' => $this->upload->data());
			unlink("./uploads/".$nameImg3);
		}
		if ( ! $this->upload->do_upload('pic4'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$data['project_3_img'] = $this->upload->data('file_name');
			$salah = array('upload_data' => $this->upload->data());
			unlink("./uploads/".$nameImg4);
		}


		$this->t_project->update($data,'1');
		$data['proses'] = true;
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
		redirect(base_url("index.php/admin/page_project"));
		// $this->index($data);
	}


}
