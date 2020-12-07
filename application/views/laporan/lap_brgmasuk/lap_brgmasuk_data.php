<!DOCTYPE html>
<html>
<head>
    <title>Laporan Barang Masuk</title>
    <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript">
        self.print();
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center">Laporan Barang Masuk</h2>
        <table class="table table-bordered">
				<thead>
						<tr>
							<td><b>Kode</b></td>
							<td><b>Tanggal</b></td>
							<td><b>Nama</b></td>
							<td><b>Jumlah</b></td>
							<td><b>Keterangan</b></td>
							<td><b>Surat Jalan</b></td>
							<td><b>Bahan Baku</b></td>
							<td><b>Permintaan Bahan Baku</b></td>
						</tr>
					</thead>
					<tbody>
						<?php
							$tgl_awal = date('Y-m-d', strtotime($this->uri->segment(3)));
							$tgl_akhir = date('Y-m-d', strtotime($this->uri->segment(4)));
							foreach($this->db->where(' transaksi_brgmasuk.sj_id=surat_jalan.sj_id AND transaksi_brgmasuk.bb_id=master_bhnbaku.bb_id AND transaksi_brgmasuk.pbb_id=transaksi_pbb.pbb_id ')->get('transaksi_brgmasuk, surat_jalan, master_bhnbaku, transaksi_pbb')->result() as $data) { ?>
								<tr>
									<td><?=$data->bm_id?></td>
									<td><?=$data->tanggal_bm?></td>
									<td><?=$data->nama_bm?></td>
									<td><?=$data->jumlah_bm?></td>
									<td><?=$data->keterangan_bm?></td>
									<td><?= date('j-F-Y', strtotime($data->tanggal_sj)).', '.$data->jumlahberat_sj.' Kg'; ?></td>
									<td><?= date('j-F-Y', strtotime($data->tanggal_bb)).', '.$data->lupin_bb.' Kg (Lupin)'; ?></td>
									<td><?= date('j-F-Y', strtotime($data->tanggal_pbb)).', '.$data->kacanglupin_pbb.' Kg (Lupin)'; ?></td>
						</tr>
						<?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>