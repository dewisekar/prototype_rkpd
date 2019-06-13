<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RPJMD extends CI_Controller
{
    public function index()
    {
        $this->load->view('RPJMD/v_rpjmd');
    }
}
