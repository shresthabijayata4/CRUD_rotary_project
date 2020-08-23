<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Mdl_home extends CI_Model {

    public function __construct()
    {
        
        $this->table_name = 'page_table';
        parent::__construct();
    }

    public function getHome($alias){

        $this->db->select('id, Name, alias, page_title, Body');
        $this->db->from($this->table_name);
        $this->db->where('alias', $alias);

        $result = $this->db->get();
        // echo $this->db->last_query();
        // die();
        return $result->row();
    }
}

?>