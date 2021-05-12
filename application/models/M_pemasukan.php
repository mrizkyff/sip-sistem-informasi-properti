<?php
    class M_pemasukan extends CI_Model
    {
        public function get_all_pembayaran(){
            $this->db->select('tb_pembayaran.id, tb_pembayaran.keterangan, tipe_bayar, jml_bayar, tgl_pembayaran, tb_konsumen.nama_lengkap, tb_block_kavling.block_kavling, tb_asset.nama_asset');
            $this->db->from('tb_pembayaran');
            $this->db->join('tb_kepemilikan', 'tb_kepemilikan.id = tb_pembayaran.id_kepemilikan');
            $this->db->join('tb_konsumen', 'tb_konsumen.id = tb_kepemilikan.id_pemilik');
            $this->db->join('tb_block_kavling', 'tb_block_kavling.id = tb_kepemilikan.id_block_kavling');
            $this->db->join('tb_asset', 'tb_asset.id = tb_block_kavling.id_asset');
            return $this->db->get()->result();
        }
        public function get_all_pemasukan(){
            return $this->db->get('tb_pemasukan')->result();
        }
    }
    
?>