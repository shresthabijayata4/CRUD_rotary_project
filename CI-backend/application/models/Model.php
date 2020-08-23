<?php
class Model extends CI_Model{
	function insert(){
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$firstname=$this->input->post('fname');
		$lastname=$this->input->post('lname');
	$data=array(
		'email' => $email,
		'password'=>$password,
		'firstname'=>$firstname,
		'lastname'=>$lastname,
	);
	$result=$this->db->insert('logintable',$data);
	return $result;

	}
	function checkuserexist(){
		$email=$this->input->post('email');
		$this->db->select('count(*) as total');
		$this->db->from('logintable');
		$this->db->where('email', $email);
		$results=$this->db->get()->row();
		$num_results = $results->total;
		if($num_results>0){
		 return false;
		}
		else{
		return true;
		}
	}
	function login(){
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->db->select('count(*) as total');
		$this->db->from('logintable');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$results=$this->db->get()->row();
		$num_results=$results->total;
		if($num_results>0){
			return true;
		}
		else{
			return false;
		}
	}
	function getdata(){
			$this->db->select('*');
			$this->db->from('logintable');
			
			$query=$this->db->get();

			return $query->result();
		}


}

?>