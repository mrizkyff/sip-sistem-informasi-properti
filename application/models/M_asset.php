<?php
    class M_asset extends CI_Model
    {
        // untuk menampilkan data ke dtatables dengan serverside
		function json() {
			// jangan pakai bintang nanti tidak bisa search
			$this->datatables->select('id, nama_asset, lokasi_asset, foto, tgl_created, jml_blok, sisa_blok');
			$this->datatables->from('tb_asset');
			$this->datatables->add_column('aksi', '
			<a href="javascript:void(0);" class="edit_record badge badge-info"><i class="fas fa-edit lead"></i> Edit</a>
			<a href="javascript:void(0);" class="hapus_record badge badge-danger"><i class="fas fa-trash-alt lead"></i> Hapus</a>
			','nama_asset');
			return $this->datatables->generate();
		}
    }
?>