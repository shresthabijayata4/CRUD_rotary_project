<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_COntroller{


    public function __construct (){
        parent::__construct();
        $this->load->database();
        // $this->load->model('Mdl_pages');
    }

    function index(){
        $this->load->model('mdl_pages');
        $list=$this->mdl_pages->getdata();
        $result=array('data'=>$list);
        $this->load->view('show_pages', $result);
    }

    function add_page(){
        $this->load->view('addpage');
    }

  
 

    function savedata(){
        $this->load->model('mdl_pages');

        $result=$this->mdl_pages->save();
		if($result){
			$this->session->set_flashdata('message','save successfully!!');
		}
		else{
			$this->session->set_flashdata('message','ERROR!');
		}
		
		redirect('pages');
    }

 



    function update_page($id){
		$this->load->model('mdl_pages');
		$list = $this->mdl_pages->getdata($id);
		$data = array('list'=>$list);
		$this->load->view('edit_page', $data);
    }
    

	function delete($id){
		$this->load->model('mdl_pages');
		$result = $this->mdl_pages->deletedata($id);
		if($result){
			$this->session->set_flashdata('message','delete successfully!!');
		}
		else{
			$this->session->set_flashdata('message','ERROR!');
		}
		
		redirect('pages');

    }
    
    function see_page($id){
        
		$this->load->model('mdl_pages');

        $list = $this->mdl_pages->getdata($id);
		$data = array('list'=>$list);
		$this->load->view('view_page', $data);
    }



}
?>