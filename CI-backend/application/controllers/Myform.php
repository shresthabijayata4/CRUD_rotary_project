<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myform extends CI_Controller {
	function index(){

		
		$this->load->view('addform');
    }
    
}
?>