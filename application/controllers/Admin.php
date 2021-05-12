<?php
    class Admin extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('m_pemasukan','pemasukan');
        }
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
        public function asset(){
            $data['script'] = 'asset';
            $data['title'] = 'Daftar Asset';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pages/asset/list_asset');
            $this->load->view('admin/templates/footer');
        }
        public function blok(){
            $data['script'] = 'blok';
            $data['title'] = 'Daftar Blok';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pages/blok/list_blok');
            $this->load->view('admin/templates/footer');
        }
        public function kepemilikan(){
            $data['script'] = 'kepemilikan';
            $data['title'] = 'Daftar Kepemilikan';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pages/kepemilikan/list_kepemilikan');
            $this->load->view('admin/templates/footer');
        }
        public function pembayaran(){
            $data['script'] = 'pembayaran';
            $data['title'] = 'Daftar Pembayaran';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pages/pembayaran/list_pembayaran');
            $this->load->view('admin/templates/footer');
        }
        public function pemasukan(){
            $data['pembayaran'] = $this->pemasukan->get_all_pembayaran();
            $data['pemasukan'] = $this->pemasukan->get_all_pemasukan();
            $data['script'] = 'pemasukan';
            $data['title'] = 'Daftar Pembayaran';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/pages/pemasukan/list_pemasukan');
            $this->load->view('admin/templates/footer');
        }
    }
    
?>