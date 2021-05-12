<?php
    class M_pengeluaran extends CI_Model
    {
        // untuk menampilkan data ke dtatables dengan serverside
		function json() {
			// jangan pakai bintang nanti tidak bisa search
			$this->datatables->select('id, tgl_pengeluaran, keterangan, jumlah');
			$this->datatables->from('tb_pengeluaran');
			return $this->datatables->generate();
		}
    }
    
?>