<!DOCTYPE html>
<html>
<head>
    <title>Laporan Barang Jadi</title>
    <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript">
        self.print();
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center">Laporan Barang Jadi</h2>
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
							<td><b>Tahap Produk</b></td>
						</tr>
					</thead>
					<tbody>
						<?php
                            $tgl_awal = date('Y-m-d', strtotime($this->uri->segment(3)));
                            $tgl_akhir = date('Y-m-d', strtotime($this->uri->segment(4)));
							foreach($this->db->where(' transaksi_thpproduk.tp_id=master_brgjadi.tp_id AND tanggal_bj >= "'.$tgl_awal.'" AND tanggal_bj <= "'.$tgl_akhir.'" ')->order_by('tanggal_bj','ASC')->get('transaksi_thpproduk, master_brgjadi')->result() as $data){
                        ?>
						<tr>
							<td><?= $data->bj_id; ?></td>
							<td><?= $data->tanggal_bj; ?></td>
							<td><?= $data->nama_bj; ?></td>
							<td><?= $data->packing50gr_bj; ?></td>
							<td><?= $data->packing75gr_bj; ?></td>
							<td><?= $data->packing150gr_bj; ?></td>
							<td><?= $data->packingtabung_bj; ?></td>
							<td><?= date('j-F-Y', strtotime($data->tanggal_tp)).', '.$data->nama_tp; ?></td>
						</tr>
						<?php } ?>
					</tbody>
        </table>
    </div>
</body>
</html>