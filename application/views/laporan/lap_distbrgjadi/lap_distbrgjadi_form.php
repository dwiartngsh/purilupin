<section class="content-header">
    <h1>Laporan Distribusi Barang Jadi</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Laporan Distribusi Barang Jadi</li>
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
							<td><b>Packing 50 Gr</b></td>
							<td><b>Packing 75 Gr</b></td>
							<td><b>Packing 150 Gr</b></td>
							<td><b>Packing Tabung</b></td>
						</tr>
					</thead>
					<tbody>
						<?php
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
						<tr>
							<td align="center" colspan="8">
								<a href="<?=base_url('Lap_distbrgjadi/cetak/'.$tgl_awal.'/'.$tgl_akhir);?>" target="_blank">
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