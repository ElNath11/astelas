<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_kenali extends CI_Controller {

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
		$this->load->model('t_page_kenali');
		$this->load->helper('login_helper');
	}


	public function index()
	{

		$data["menu"]="home";
		$this->load->view('dashboard/master_header',$data);
		$data["form_data"]=$this->t_page_kenali->getPage('1');/* View */
		$this->load->view('dashboard/page_kenali',$data);
		$this->load->view('dashboard/master_footer');

	}

	public function update()
	{
		$data = $this->input->post('add');

		$nameImg1 = $this->input->post('img1');
		$nameImg2 = $this->input->post('img2');
		$nameImg3 = $this->input->post('img3');
		$nameBanner = $this->input->post('banner');

		$oldBanner = $this->input->post('oldbanners');
		$oldpic1 = $this->input->post('oldpic1');
		$oldpic2 = $this->input->post('oldpic2');
		$oldpic3 = $this->input->post('oldpic3');

		/*if (file_exists("./uploads/".$oldBanner)) {
			echo 'file exist';
				// unlink("./uploads/".$oldbanner);
			} else {
				echo "not";
			}
		return false;*/

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
			if (file_exists("./uploads/".$oldBanner)) {
				unlink("./uploads/".$oldBanner);
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
		if ( ! $this->upload->do_upload('pic2'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$img = $this->upload->data();
			$data['img2']=$img['file_name'];
			if (file_exists("./uploads/".$oldpic2)) {
				unlink("./uploads/".$oldpic2);
			}
		}
		if ( ! $this->upload->do_upload('pic3'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$img = $this->upload->data();
			$data['img3']=$img['file_name'];
			if (file_exists("./uploads/".$oldpic3)) {
				unlink("./uploads/".$oldpic3);
			}
		}


		$this->t_page_kenali->update($data,'1');
		$data['proses'] = true;
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
		redirect(base_url("index.php/admin/page_kenali"));
		// $this->index($data);
	}


}
