<!DOCTYPE html>
<html>
<head>
    <title>Laporan Tahap Produk</title>
    <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript">
        self.print();
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center">Laporan Tahap Produk</h2>
        <table class="table table-bordered">
		<thead>
						<tr>
							<td><b>Kode</b></td>
							<td><b>Tanggal</b></td>
							<td><b>Nama</b></td>
							<td><b>Perendaman</b></td>
							<td><b>Perebusan</b></td>
							<td><b>Peragian</b></td>
							<td><b>Pemotongan</b></td>
							<td><b>Penggorengan</b></td>
							<td><b>Keterangan</b></td>
							<td><b>Bahan Baku</b></td>
              				<td><b>Bumbu</b></td>
							<td><b>Bagian Produksi</b></td>
						</tr>
					</thead>
					<tbody>
						<?php
							$tgl_awal = date('Y-m-d', strtotime($this->uri->segment(3)));
							$tgl_akhir = date('Y-m-d', strtotime($this->uri->segment(4)));
							$levelStatus = array('','Kepala Staff Produksi','Staff Produksi','Kepala Staff Pengolahan','Staff Pengolahan','Direktur Utama');
							foreach($this->db->where(' transaksi_thpproduk.bb_id=master_bhnbaku.bb_id AND transaksi_thpproduk.bu_id=master_bumbu.bu_id AND transaksi_thpproduk.user_id=user.user_id AND tanggal_tp >= "'.$tgl_awal.'" AND tanggal_tp <= "'.$tgl_akhir.'" ')->order_by('tanggal_tp','ASC')->get('transaksi_thpproduk, master_bhnbaku, master_bumbu, user')->result() as $data){

            			?>
						<tr>
							<td><?= $data->tp_id; ?></td>
							<td><?= $data->tanggal_tp; ?></td>
							<td><?= $data->nama_tp; ?></td>
							<td><?= $data->perendaman_tp; ?></td>
							<td><?= $data->perebusan_tp; ?></td>
							<td><?= $data->peragian_tp; ?></td>
							<td><?= $data->pemotongan_tp; ?></td>
							<td><?= $data->penggorengan_tp; ?></td>
							<td><?= $data->keterangan_tp; ?></td>
							<td><?= date('j-F-Y', strtotime($data->tanggal_bb)).', '.$data->lupin_bb.' Kg (Lupin), '.$data->tapioka_bb.' Kg (Tapioka), '.$data->ragi_bb.' Gr (Ragi)'; ?></td>
                        	<td><?= date('j-F-Y', strtotime($data->tanggal_bu)).', '.$data->bwgputih_bu.' gr (Bwg Putih), '.$data->kemiri_bu.' gr (Kemiri), '.$data->penyedap_bu.' gr (Penyedap), '.$data->tepungberas_bu.' gr (Tepung Beras), '.$data->air_bu.' ml (Air)'; ?></td>
                        	<td><?= $levelStatus[$data->level].' - '.$data->name; ?></td>
						</tr>
						<?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>