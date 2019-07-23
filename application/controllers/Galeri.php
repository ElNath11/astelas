<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

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
		$this->load->model('t_page_galeri');
		$this->load->model('t_galeri');
	}

	public function index()
	{
		$data["menu"]="galeri";
		$data["form_data"]=$this->t_page_galeri->getPage('1');

		//pagination
		$total = $this->t_galeri->record_count();
		$limit = ($this->uri->segment(3)) ? $this->uri->segment(3) : 12;
		$base_url = base_url() . "index.php/galeri/index/".$limit;
		$data["page"] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data["results"] = $this->t_galeri->fetch_record($limit, $data['page']);
		$data["pagination"] = $this->pagination($base_url, $total, $limit, 4);
		//pagination
		$this->load->view('master_header.php',$data);
		$this->load->view('galeri.php',$data);
		$this->load->view('master_footer.php');
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
