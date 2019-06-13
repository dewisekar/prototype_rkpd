<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RKPD extends CI_Controller {

	public function index()
	{
		$this->load->view('rkpd/index');
	}
}
