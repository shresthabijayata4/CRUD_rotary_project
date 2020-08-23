<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mypage extends CI_Controller{

    // function index(){
    //     $this->load->view('body');
    // }
    
    
    function index(){

        $this->load->model('mdl_home');
        $url = 'menu';
        $body = $this->mdl_home->getHome($url);

       

        $cms_data = array(
            'list' => $body
        );
        $this->load->view('menu1', $cms_data);


		
        $url = 'body';
        $body = $this->mdl_home->getHome($url);
      

          

        $cms_data = array(
            'list' => $body,
            
        );
        $this->load->view('body', $cms_data);

        $url = 'footer';
        $body = $this->mdl_home->getHome($url);


        $cms_data = array(
            'list' => $body
        );
        $this->load->view('footer1', $cms_data);
    }

    function body(){

        $this->load->model('mdl_home');

		
        $url = 'body';
        $body = $this->mdl_home->getHome($url);
       

          

        $cms_data = array(
            'list' => $body,
            
        );
        $this->load->view('home', $cms_data);
    }


    

    function footer(){

        $this->load->model('mdl_home');
        $url = 'footer';
        $body = $this->mdl_home->getHome($url);

   

        $cms_data = array(
            'list' => $body
        );
        $this->load->view('footer', $cms_data);
    }

    function menu(){

        $this->load->model('mdl_home');
        $url = 'menu';
        $body = $this->mdl_home->getHome($url);

       

        $cms_data = array(
            'list' => $body
        );
        $this->load->view('menu', $cms_data);
    }

}
?>
