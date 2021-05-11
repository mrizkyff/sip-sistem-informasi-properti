<?php
    class Konsumen extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_konsumen','konsumen');
        }
        function json() {
            header('Content-Type: application/json');
            echo $this->konsumen->json();
        }
    }
    
?>