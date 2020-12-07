<section class="content-header">
    <h1>Laporan Tahap Produk</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Laporan Tahap Produk</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

          <div class="box box-info" style="overflow:hidden;">
		  <div class="col-lg-12">&nbsp;</div>
			<div class="col-lg-12">
				<form method="POST">
				<table class="table">
					<thead>
						<tr>
							<td><b>Tanggal Awal :</b></td>
							<td>
								<input type="date" class="form-control" required name="tgl_awal">
							</td>
						</tr>
						
						<tr>
							<td><b>Tanggal Akhir :</b></td>
							<td>
								<input type="date" class="form-control" required name="tgl_akhir">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit" name="filter" class="btn btn-primary btn-block">
									Lihat laporan
								</button>
							</td>
						</tr>
					</thead>
				</table>
				</form>
			</div>
        </div>
</section>

<?php 
	if(isset($_POST['filter'])){ 
		$tgl_awal = date('Y-m-d', strtotime($_POST['tgl_awal']));
		$tgl_akhir = date('Y-m-d', strtotime($_POST['tgl_akhir']));
?>

<!-- main content -->
<section class="content">
          <div class="box box-info" style="overflow:hidden;">
		  <div class="col-lg-12">&nbsp;</div>
			<div class="col-lg-12">
				<table class="table table-bordered table-hover">
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
						<?php } 
						?>
						<tr>
							<td align="center" colspan="12">
								<a href="<?=base_url('Lap_thpproduk/cetak/'.$tgl_awal.'/'.$tgl_akhir);?>" target="_blank">
									<button type="button" class="btn btn-primary btn-block">
										<i class="fa fa-print"></i> Cetak
									</button>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
        </div>
</section>

<?php } ?>