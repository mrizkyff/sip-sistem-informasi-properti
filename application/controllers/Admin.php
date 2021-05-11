<?php
    class Admin extends CI_Controller
    {
        public function index(){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pages/dashboard_page');
            $this->load->view('admin/templates/footer');
        }
    }
    
?>