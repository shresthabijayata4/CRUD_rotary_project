<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function index(){
		$this->load->model('mdl_users');
		$list = $this->mdl_users->getdata();
		$data = array('test'=>$list);
		
		$this->load->view('showdata', $data);
	}

	function create(){
		$this->load->view('addform');
	}

	function save(){
		$this->load->model('mdl_users');
		
		$result=$this->mdl_users->save();
		if($result){
			$this->session->set_flashdata('message','save successfully!!');
		}
		else{
			$this->session->set_flashdata('message','ERROR!');
		}
		
		redirect('users');
	}

	function edit($id){
		$this->load->model('mdl_users');
		$list = $this->mdl_users->getdata($id);
		$data = array('list'=>$list);
		$this->load->view('update', $data);
	}
	function delete($id){
		$this->load->model('mdl_users');
		$result = $this->mdl_users->deletedata($id);
		if($result){
			$this->session->set_flashdata('message','delete successfully!!');
		}
		else{
			$this->session->set_flashdata('message','ERROR!');
		}
		
		redirect('users');

	}
}
