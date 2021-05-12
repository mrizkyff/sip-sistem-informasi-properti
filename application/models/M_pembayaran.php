<?php
    class M_pembayaran extends CI_Model
    {
        // untuk menampilkan data ke dtatables dengan serverside
		function json() {
			// jangan pakai bintang nanti tidak bisa search
			$this->datatables->select('tb_pembayaran.id, tb_pembayaran.keterangan, tipe_bayar, jml_bayar, tgl_pembayaran, tb_konsumen.nama_lengkap, tb_block_kavling.block_kavling, tb_asset.nama_asset');
			$this->datatables->from('tb_pembayaran');
            $this->datatables->join('tb_kepemilikan', 'tb_pembayaran.id_kepemilikan = tb_kepemilikan.id');
            $this->datatables->join('tb_konsumen', 'tb_kepemilikan.id_pemilik = tb_konsumen.id');
            $this->datatables->join('tb_block_kavling', 'tb_block_kavling.id = tb_kepemilikan.id_block_kavling');
            $this->datatables->join('tb_asset', 'tb_asset.id = tb_block_kavling.id_asset');
            $this->datatables->add_column('block_lengkap' ,'$1 - $2','nama_asset, block_kavling');
			$this->datatables->add_column('aksi', '
			<a href="javascript:void(0);" class="edit_record badge badge-info"><i class="fas fa-edit lead"></i> Edit</a>
			<a href="javascript:void(0);" class="hapus_record badge badge-danger"><i class="fas fa-trash-alt lead"></i> Hapus</a>
			','tipe_bayar');
			return $this->datatables->generate();
		}
    }
    
?>