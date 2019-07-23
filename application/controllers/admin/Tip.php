<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tip extends CI_Controller {

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
		$this->load->model('t_tip');
		$this->load->helper('login_helper');
	}


	public function index()
	{
		$data["menu"]="tip";
		$data["tip"]=$this->t_tip->getAll();
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/tip',$data);
		$this->load->view('dashboard/master_footer');

	}

	public function tambah_view()
	{
		$data["menu"]="tip";
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/tip_add',$data);
		$this->load->view('dashboard/master_footer');

	}

	public function update_view()
	{
		$id = $this->uri->segment(4);
		$data["menu"]="tip";
		$data["form_data"]=$this->t_tip->getPage($id);/* View */
		$data["update"]=true;
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/tip_add',$data);
		$this->load->view('dashboard/master_footer');
	}

	public function update()
	{

		$id = $this->uri->segment(4);

		$data = $this->input->post('add');

		$nameBanner = $this->input->post('img');
		$oldbanner = $this->input->post('oldbanner');

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
			$data['img']=$img['file_name'];
			// $data['banner']=$img['file_name'];
			if (file_exists("./uploads/".$oldbanner)) {
				unlink("./uploads/".$oldbanner);
			}

		}

		date_default_timezone_set('Asia/Jakarta');
		$date   = date('Y-m-d');

		$data['by'] = $this->session->userdata('username');
		$data['tgl'] = $date;

		$this->t_tip->update($data,$id);
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
		redirect(base_url("index.php/admin/tip"));
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
			$data['img']=$img['file_name'];
		}

		date_default_timezone_set('Asia/Jakarta');
		$date   = date('Y-m-d');

		$data['by'] = $this->session->userdata('username');
		$data['tgl'] = $date;
		$data['flag'] = '2';
		$this->t_tip->add($data);
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
		redirect(base_url("index.php/admin/tip"));
	}

	public function status()
	{
		$data = array(
			'flag' => $this->uri->segment(4));
		$id = $this->uri->segment(5);

		$this->t_tip->update($data,$id);
		header('location:'.base_url("index.php/admin/tip"));
	}

	public function delete()
	{
		$idDelete = $this->uri->segment(4);
		$id = $this->uri->segment(5);

		$this->m_sub_properties->delete($idDelete);
		header('location:'.base_url("index.php/admin/tip/tip_add/".$id));
	}



}
