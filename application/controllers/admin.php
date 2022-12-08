<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('m_data');
	}
	public function index()
	{
        $data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/index',$data);
		$this->load->view('admin/v_footer');
	}
}