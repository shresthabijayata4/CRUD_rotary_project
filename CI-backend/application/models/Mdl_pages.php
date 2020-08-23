<?php
class Mdl_pages extends CI_Model {

    public function __construct()
    {
        parent:: __construct();
    }

    function save(){
      

		$id=$this->input->post('id');
        
        $name=$this->input->post('name');
        $alias=$this->input->post('alias');

        $page_title=$this->input->post('page-title');
        $body=$this->input->post('body');

        $data=array(
            'Name'=> $name,
            'alias'=> $alias,
            'page_title'=>$page_title,
            'Body'=>htmlspecialchars($body),
        );

       
        if($id != ''){
            $this->db->where('id', $id);
            $result=$this->db->update('page_table', $data);
            // echo $this->db->last_query();
           
           
        }
        else{
            $result=$this->db->insert('page_table', $data);

        }
        return $result;
    }

    // function editcrud($id)
    // {
    //     $update = array(
    //         'Name' => $this->input->post('name'),
    //         'page_title' => $this->input->post('page-title'),
    //         'Body' => $this->input->post('body')
    //         );
    //     $this->db->where('id',$id);
    //     return $this->db->update('page_table', $update);
    // }

    function getdata($id=''){

        $this->db->select('*');
			$this->db->from('page_table');
			if($id > 0){
				$this->db->where('id', $id);	
			}
			

			$query=$this->db->get();

			return $query->result();
	}
    
    function deletedata($id){
		$result = $this->db->delete('page_table',array('id' => $id));

		return $result;

	}	
    

}


    
        
