<?php
    class Blok extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_blok','blok');
        }
        function json() {
            header('Content-Type: application/json');
            echo $this->blok->json();
        }
    }
    
?>