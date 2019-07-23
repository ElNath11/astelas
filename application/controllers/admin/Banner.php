<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

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
		$this->load->helper('login_helper');
	}


	public function index()
	{
		$data["menu"]="banner";
		$data["banner"]=$this->t_banner->getAll();
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/banner',$data);
		$this->load->view('dashboard/master_footer');

	}

	public function tambah_view()
	{
		$data["menu"]="banner";
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/banner_add',$data);
		$this->load->view('dashboard/master_footer');

	}

	public function update_view()
	{
		$id = $this->uri->segment(4);
		$data["menu"]="banner";
		$data["form_data"]=$this->t_banner->getPage($id);/* View */
		$data["update"]=true;
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/banner_add',$data);
		$this->load->view('dashboard/master_footer');
	}

	public function update()
	{

		$id = $this->uri->segment(4);

		$data = $this->input->post('add');

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('pic1'))
		{

			$error = array('error' => $this->upload->display_errors());

		}
		else
		{
			$img = $this->upload->data();
			$data['banner']=$img['file_name'];

		}


		$this->t_banner->update($data,$id);
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
		redirect(base_url("index.php/admin/banner"));
	}

	public function add()
	{

		$data = $this->input->post('add');

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('pic1'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$img = $this->upload->data();
			$data['banner']=$img['file_name'];
		}

		$data['flag'] = '2';
		$this->t_banner->add($data);
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
		redirect(base_url("index.php/admin/banner"));
	}

	public function status()
	{
		$data = array(
			'flag' => $this->uri->segment(4));
		$id = $this->uri->segment(5);

		$this->t_banner->update($data,$id);
		header('location:'.base_url("index.php/admin/banner"));
	}

	public function delete()
	{
		$idDelete = $this->uri->segment(4);
		$id = $this->uri->segment(5);

		$this->m_sub_properties->delete($idDelete);
		header('location:'.base_url("index.php/admin/banner/banner_add/".$id));
	}



}
