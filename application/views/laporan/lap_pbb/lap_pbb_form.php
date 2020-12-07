<section class="content-header">
    <h1>Laporan Permintaan Bahan Baku</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Laporan Permintaan Bahan Baku</li>
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
							<td><b>Kode Permintaan Bahan Baku</b></td>
							<td><b>Tanggal</b></td>
							<td><b>Kacang Lupin (KG)</b></td>
							<td><b>Keterangan</b></td>
							<td><b>Bahan Baku</b></td>
							<td><b>Nama User</b></td>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($this->db->where(' transaksi_pbb.bb_id=master_bhnbaku.bb_id AND transaksi_pbb.user_id=user.user_id AND tanggal_pbb >= "'.$tgl_awal.'" AND tanggal_pbb <= "'.$tgl_akhir.'" ')->order_by('tanggal_pbb','ASC')->get('transaksi_pbb, master_bhnbaku, user')->result() as $data){
						?>
						<tr>
							<td><?= $data->pbb_id; ?></td>
							<td><?= $data->tanggal_pbb; ?></td>
							<td><?= $data->kacanglupin_pbb; ?></td>
							<td><?= $data->keterangan_pbb; ?></td>
							<td><?= date('j-F-Y', strtotime($data->tanggal_bb)).', '.$data->lupin_bb.' Kg (Lupin)'; ?></td>
							<td><?= $data->name; ?></td>
						</tr>
						<?php } ?>
						<tr>
							<td align="center" colspan="7">
								<a href="<?=base_url('Lap_pbb/cetak/'.$tgl_awal.'/'.$tgl_akhir);?>" target="_blank">
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