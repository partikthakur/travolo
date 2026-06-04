<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data=array();
		$data['main_content']='home';
		$data['base_url']=base_url();

		$this->load->view('common/template',$data);
	}
}
