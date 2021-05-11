<?php
    class Asset extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_asset','asset');
        }
        function json() {
            header('Content-Type: application/json');
            echo $this->asset->json();
        }
    }
    
?>