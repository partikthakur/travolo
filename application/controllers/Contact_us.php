<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function index()
	{
		$data=array();
		$data['main_content']='contact-us';
		$data['base_url']=base_url();
		$this->load->view('common/template',$data);
	}
}
?>
