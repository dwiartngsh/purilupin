<!DOCTYPE html>
<html>
<head>
    <title>Laporan Distribusi Barang Jadi</title>
    <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript">
        self.print();
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center">Laporan Distribusi Barang Jadi</h2>
        <table class="table table-bordered">
		<thead>
						<tr>
							<td><b>Kode</b></td>
							<td><b>Tanggal</b></td>
							<td><b>Nama</b></td>
							<td><b>Packing 50 Gr</b></td>
							<td><b>Packing 75 Gr</b></td>
							<td><b>Packing 150 Gr</b></td>
							<td><b>Packing Tabung</b></td>
						</tr>
					</thead>
					<tbody>
						<?php
							$tgl_awal = date('Y-m-d', strtotime($this->uri->segment(3)));
							$tgl_akhir = date('Y-m-d', strtotime($this->uri->segment(4)));
							foreach($this->db->where('tanggal_dbj >= "'.$tgl_awal.'" AND tanggal_dbj <= "'.$tgl_akhir.'"')->get('transaksi_distbrgjadi')->result() as $data) { ?>
						<tr>
							<td><?= $data->dbj_id;?></td>
							<td><?= date('j-F-Y', strtotime($data->tanggal_dbj)); ?></td>
							<td><?= $data->nama_dbj;?></td>
							<td><?= $data->packing50gr_dbj; ?></td>
							<td><?= $data->packing75gr_dbj; ?></td>
							<td><?= $data->packing150gr_dbj; ?></td>
							<td><?= $data->packingtabung_dbj; ?></td>
						</tr>
						<?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>