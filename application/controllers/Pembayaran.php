<?php
    class Pembayaran extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_pembayaran','pembayaran');
        }
        function json() {
            header('Content-Type: application/json');
            echo $this->pembayaran->json();
        } 
    }
    
?>