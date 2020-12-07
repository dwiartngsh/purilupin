<section class="content-header">
    <h1>Laporan Surat Jalan</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Laporan Surat Jalan</li>
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
							<td><b>QTY (Jumlah Karung)</b></td>
							<td><b>Berat</b></td>
							<td><b>Jumlah Berat</b></td>
							<td><b>Keterangan</b></td>
							<td><b>Permintaan Bahan Baku</b></td>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($this->db->where(' surat_jalan.pbb_id=transaksi_pbb.pbb_id ')->get('surat_jalan, transaksi_pbb')->result() as $data) { ?>
								<tr>
								<td><?=$data->sj_id?></td>
								<td><?=$data->tanggal_sj?></td>
								<td><?=$data->qty_sj?></td>
								<td><?=$data->berat_sj?></td>
								<td><?=$data->jumlahberat_sj?></td>
								<td><?=$data->keterangan_sj?></td>
								<td><?= date('j-F-Y', strtotime($data->tanggal_pbb)).', '.$data->kacanglupin_pbb.' Kg (Lupin)'; ?></td>
						</tr>
						<?php } ?>
						<tr>
							<td align="center" colspan="7">
								<a href="<?=base_url('Lap_suratjalan/cetak/'.$tgl_awal.'/'.$tgl_akhir);?>" target="_blank">
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