<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submitpaper extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('submitpaper');
		$this->load->view('sidebar');
	}
}