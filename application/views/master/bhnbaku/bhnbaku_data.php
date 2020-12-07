<section class="content-header">
    <h1>Bahan Baku
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Bahan Baku</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Bahan Baku</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('bhnbaku/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Bahan Baku</th>
                        <th>Tanggal</th>
                        <th>Kacang Lupin (KG)</th>
                        <th>Tapioka (KG)</th>
                        <th>Ragi (Gr)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; //$jumlah = 0;
                    foreach($row->result() as $key => $data) { //$jumlah = $jumlah + $data->jumlah_bb; 
                    ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->bb_id?></td>
                        <td><?=$data->tanggal_bb?></td>
                        <td><?=$data->lupin_bb?></td>
                        <td><?=$data->tapioka_bb?></td>
                        <td><?=$data->ragi_bb?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('bhnbaku/edit/'.$data->bb_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('bhnbaku/del/'.$data->bb_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <?php
                    } ?>
                    <!--<tr>
						<td colspan="8" align="center">
							<b>Total : <?= number_format($jumlah).' Kg'; ?></b>
						</td>
					</tr>-->
                </tbody>
            </table>
        </div>
    </div> 

</section>