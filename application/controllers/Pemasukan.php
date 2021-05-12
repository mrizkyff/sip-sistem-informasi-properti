<?php
    class Pemasukan extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_pemasukan','pemasukan');
        }
        function json() {
            header('Content-Type: application/json');
            echo $this->pemasukan->json();
        }
    }
    
?>