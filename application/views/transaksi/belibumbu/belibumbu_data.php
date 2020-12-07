<section class="content-header">
    <h1>Pembelian Bumbu
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Pembelian Bumbu</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pembelian Bumbu</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('belibumbu/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Pembelian Bumbu</th>
                        <th>Tanggal</th>
                        <th>Bawang Putih (Gr)</th>
                        <th>Kemiri (Gr)</th>
                        <th>Penyedap Rasa (Gr)</th>
                        <th>Tepung Beras (Gr)</th>
                        <th>Harga (Rp)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; //$jumlah = 0;
                    foreach($row->result() as $key => $data) { //$jumlah = $jumlah + $data->jumlah_bu; 
                    ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->pb_id?></td>
                        <td><?=$data->tanggal_pb?></td>
                        <td><?=$data->bwgputih_pb?></td>
                        <td><?=$data->kemiri_pb?></td>
                        <td><?=$data->penyedap_pb?></td>
                        <td><?=$data->tepungberas_pb?></td>                      
                        <td><?=$data->harga?></td>                        
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('belibumbu/edit/'.$data->pb_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('belibumbu/del/'.$data->pb_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
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