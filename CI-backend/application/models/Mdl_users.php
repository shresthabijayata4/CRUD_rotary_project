<?php
class Mdl_users extends CI_Model{
	public function __construct(){
		parent::__construct();

	}
		function save(){
			$id=$this->input->post('id');
			$firstname=$this->input->post('fname');
			$middlename=$this->input->post('mname');
			$lastname=$this->input->post('lname');
			$nickname=$this->input->post('nick');
			$address=$this->input->post('address');
			$city=$this->input->post('city');
			$state=$this->input->post('state');
			$country=$this->input->post('country');
			$gender=$this->input->post('gender');
			$birthdate=$this->input->post('bd');
			$mobileno=$this->input->post('mobile');
			$homeno=$this->input->post('home');
			$officeno=$this->input->post('office');
			$drivingno=$this->input->post('driving');
			$email=$this->input->post('email');
			$website=$this->input->post('website');
			$comment=$this->input->post('comment');

			$data = array(
					
			        'firstname' => $firstname,
			        'middlename' => $middlename,
			        'lastname' => $lastname,
			        'Nickname' =>$nickname,
			        'address'=>$address,
			        'City'=>$city,
			        'State'=>$state,
			        'Country'=>$country,
			        'Gender'=>$gender,
			        'birthdate'=>$birthdate,
			        'mobileno'=>$mobileno,
			        'homeno'=>$homeno,
			        'officeno'=>$officeno,
			        'liscenceno'=>$drivingno,
			        'email'=>$email,
			        'Website'=>$website,
			        'Comment'=>$comment
			);
			if($id != ''){
				$this->db->where('id', $id);
				$result=$this->db->update('testtable', $data);
			}
			else{
				$result=$this->db->insert('testtable', $data);
			}
			return $result;

		}
		function getdata($id=''){
			$this->db->select('*');
			$this->db->from('testtable');
			if($id > 0){
				$this->db->where('id', $id);	
			}
			

			$query=$this->db->get();

			return $query->result();
		}
		function deletedata($id){
		$result = $this->db->delete('testtable',array('id' => $id));

		return $result;

		}	
}
?>