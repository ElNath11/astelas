<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_event extends CI_Controller {

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
		$this->load->model('t_event');
		$this->load->helper('login_helper');
	}


	public function index()
	{
		$data["menu"]="event";
		$data["event"]=$this->t_event->getAll();
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/page_event',$data);
		$this->load->view('dashboard/master_footer');

	}

	public function tambah_view()
	{
		$data["menu"]="event";
		$this->load->view('dashboard/master_header',$data);
		$this->load->view('dashboard/page_event_add',$data);
		$this->load->view('dashboard/master_footer');

	}

	public function update_view()
	{
		$id = $this->uri->segment(4);
		$data["menu"]="event";
		$this->load->view('dashboard/master_header',$data);
		$data["form_data"]=$this->t_event->getPage($id);/* View */
		$data["update"]=true;
		$this->load->view('dashboard/page_event_add',$data);
		$this->load->view('dashboard/master_footer');
	}

	public function update()
	{

		$id = $this->uri->segment(4);

		$data = $this->input->post('add');

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
			$data['event_img']=$img['file_name'];

		}

		$this->t_event->update($data,$id);
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
		redirect(base_url("index.php/admin/page_event"));
	}

	public function add()
	{

		$data = $this->input->post('add');



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
			$data['event_img']=$img['file_name'];

		}

		$data['event_flag'] = '1';
		$this->t_event->add($data);
		$this->session->set_flashdata('something', 'Proses telah berhasil dilakukan');
		// Codeigniter set flash data will only work when your redirecting
		redirect(base_url("index.php/admin/page_event"));
	}

	public function status()
	{
		$data = array(
			'event_flag' => $this->uri->segment(4));
		$id = $this->uri->segment(5);

		$this->t_event->update($data,$id);
		header('location:'.base_url("index.php/admin/page_event"));
	}

		public function delete()
	{
		$idDelete = $this->uri->segment(4);
		$id = $this->uri->segment(5);

		$this->m_sub_properties->delete($idDelete);
		header('location:'.base_url("index.php/admin/page_event/property_add/".$id));
	}

		function pagination($base_url, $total, $limit, $uri)
	{
		$this->load->library('pagination');
		$config = array();
		$config["base_url"] = $base_url;
		$config["total_rows"] = $total;
		$config["per_page"] = $limit;
		$config['uri_segment'] = $uri;

  //pagination customization using bootstrap styles
  $config['full_tag_open'] = '<div class="col lg-col-12 pagination pagination-centered"><ul class="page_test">'; // I added class name 'page_test' to used later for jQuery
  $config['full_tag_close'] = '</ul></div><!--pagination-->';
  $config['first_link'] = '&laquo; First';
  $config['first_tag_open'] = '<li class="prev page">';
  $config['first_tag_close'] = '</li>';

  $config['last_link'] = 'Last &raquo;';
  $config['last_tag_open'] = '<li class="next page">';
  $config['last_tag_close'] = '</li>';

  $config['next_link'] = 'Next &rarr;';
  $config['next_tag_open'] = '<li class="next page">';
  $config['next_tag_close'] = '</li>';

  $config['prev_link'] = '&larr; Previous';
  $config['prev_tag_open'] = '<li class="prev page">';
  $config['prev_tag_close'] = '</li>';

  $config['cur_tag_open'] = '<li class="active"><a href="">';
  $config['cur_tag_close'] = '</a></li>';

  $config['num_tag_open'] = '<li class="page">';
  $config['num_tag_close'] = '</li>';

  $this->pagination->initialize($config);

  return $this->pagination->create_links();

}


}
