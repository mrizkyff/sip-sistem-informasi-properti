<?php
    class M_konsumen extends CI_Model 
    {
        // untuk menampilkan data ke dtatables dengan serverside
		function json() {
			// jangan pakai bintang nanti tidak bisa search
			$this->datatables->select('id, nama_lengkap, alamat_diri, telp_diri, kartu_identitas, no_identitas, email');
			$this->datatables->from('tb_konsumen');
			$this->datatables->add_column('nama','<p><b>$1</b><br>$2</p>','kartu_identitas, no_identitas');
			$this->datatables->add_column('aksi', '
			<a href="javascript:void(0);" class="edit_record badge badge-info"><i class="fas fa-edit lead"></i> Edit</a>
			<a href="javascript:void(0);" class="hapus_record badge badge-danger"><i class="fas fa-trash-alt lead"></i> Hapus</a>
			','nama_lengkap');
			return $this->datatables->generate();
		}
    }
    
?>