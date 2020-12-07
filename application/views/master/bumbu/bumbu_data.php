<section class="content-header">
    <h1>Bumbu
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Bumbu</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Bumbu</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('bumbu/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Bumbu</th>
                        <th>Tanggal</th>
                        <th>Bawang Putih (Gr)</th>
                        <th>Kemiri (Gr)</th>
                        <th>Penyedap Rasa (Gr)</th>
                        <th>Tepung Beras (Gr)</th>
                        <th>Air (Ml)</th>                        
                        <th>Pembelian Bumbu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; //$jumlah = 0; //$jumlah = $jumlah + $data->jumlah_bu; 
                    foreach($this->db->where(' master_bumbu.pb_id=transaksi_belibumbu.pb_id ')->get('master_bumbu, transaksi_belibumbu')->result() as $data) {
                    ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->bu_id?></td>
                        <td><?=$data->tanggal_bu?></td>
                        <td><?=$data->bwgputih_bu?></td>
                        <td><?=$data->kemiri_bu?></td>
                        <td><?=$data->penyedap_bu?></td>
                        <td><?=$data->tepungberas_bu?></td>
                        <td><?=$data->air_bu?></td>                        
                        <td><?= date('j-F-Y', strtotime($data->tanggal_pb)).', '.$data->bwgputih_pb.' gr (Bwg Putih), '.$data->kemiri_pb.' gr (Kemiri), '.$data->penyedap_pb.' gr (Penyedap), '.$data->tepungberas_pb.' gr (Tepung Beras)'; ?></td>                      
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('bumbu/edit/'.$data->bu_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('bumbu/del/'.$data->bu_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <?php
                    } ?>
					<!--<tr>
						<td colspan="7" align="center">
							<b>Total : <?= number_format($jumlah).' Gram'; ?></b>
						</td>
					</tr>-->
                </tbody>
            </table>
        </div>
    </div> 

</section>