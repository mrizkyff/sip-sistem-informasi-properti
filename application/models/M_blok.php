<?php
    class M_blok extends CI_Model
    {
        // untuk menampilkan data ke dtatables dengan serverside
		function json() {
			// jangan pakai bintang nanti tidak bisa search
			$this->datatables->select('tb_block_kavling.id, block_kavling, harga_jual, tb_block_kavling.luas_tanah, keterangan, id_asset, tb_asset.nama_asset');
			$this->datatables->from('tb_block_kavling');
            $this->datatables->join('tb_asset', 'tb_block_kavling.id_asset = tb_asset.id');
			$this->datatables->add_column('aksi', '
			<a href="javascript:void(0);" class="edit_record badge badge-info"><i class="fas fa-edit lead"></i> Edit</a>
			<a href="javascript:void(0);" class="hapus_record badge badge-danger"><i class="fas fa-trash-alt lead"></i> Hapus</a>
			','block_kavling');
			return $this->datatables->generate();
		}
    }
    
?>