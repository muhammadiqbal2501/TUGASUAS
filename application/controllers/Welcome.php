<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function about()
	{

		$this->load->view('view_header');
		$this->load->view('about');
		$this->load->view('view_footer');
	}
	public function blog()
	{

		
		$this->load->view('blog');
		$this->load->view('view_footer');
	}
	public function contact()
	{
		$data=array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'komentar' => $this->input->post('komentar'),
		);
		$this->db->insert('komentar',$data);

		$this->load->view('contact');
		$this->load->view('view_footer');
	
	}
	public function destination()
	{

		$this->load->view('destination');
		$this->load->view('view_footer');
	}
	
	
	public function testimonial()
	{

		$this->load->view('testimonial');
		$this->load->view('view_footer');
	}
	public function single()
	{

		$this->load->view('single');
		$this->load->view('view_footer');
	}

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		$this->load->view('index');
		$this->load->view('view_footer');
	}
}