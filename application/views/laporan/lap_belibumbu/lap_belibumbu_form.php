<section class="content-header">
    <h1>Laporan Pembelian Bumbu</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Laporan Pembelian Bumbu</li>
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
                        <td><b>Kode Pembelian Bumbu</b></td>
                        <td><b>Tanggal</b></td>
                        <td><b>Bawang Putih (Gr)</b></td>
                        <td><b>Kemiri (Gr)</b></td>
                        <td><b>Penyedap Rasa (Gr)</b></td>
                        <td><b>Tepung Beras (Gr)</b></td>
                        <td><b>Harga (Rp)</b></td>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($this->db->where(' tanggal_pb >= "'.$tgl_awal.'" AND tanggal_pb <= "'.$tgl_akhir.'" ')->order_by('tanggal_pb','ASC')->get('transaksi_belibumbu')->result() as $data){
                                ?>
                                <tr>
                                <td><?=$data->pb_id?></td>
                                <td><?=$data->tanggal_pb?></td>
                                <td><?=$data->bwgputih_pb?></td>
                                <td><?=$data->kemiri_pb?></td>
                                <td><?=$data->penyedap_pb?></td>
                                <td><?=$data->tepungberas_pb?></td>                      
                                <td><?=$data->harga?></td>   
						</tr>
						<?php } ?>
						<tr>
							<td align="center" colspan="7">
								<a href="<?=base_url('Lap_belibumbu/cetak/'.$tgl_awal.'/'.$tgl_akhir);?>" target="_blank">
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