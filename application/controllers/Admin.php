<?php
    class Admin extends CI_Controller
    {
        public function index(){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pages/dashboard_page');
            $this->load->view('admin/templates/footer');
        }
        public function konsumen(){
            $data['script'] = 'konsumen';
            $data['title'] = 'Daftar Konsumen';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pages/konsumen/list_konsumen');
            $this->load->view('admin/templates/footer');
        }
    }
    
?>