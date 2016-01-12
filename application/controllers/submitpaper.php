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

	public function do_upload()
	{
		if($_POST['upload']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$nama			= $this->input->post('name');
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 1044070){
						$lokasi = 'paper/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						echo "success";
						
					}else{
					echo 'failed';
					}
				}
		}
		else{
			echo "ok";
		}
	}
}