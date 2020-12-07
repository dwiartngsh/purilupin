<section class="content-header">
    <h1>Permintaan Bahan Baku
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Permintaan Bahan Baku</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data PBB</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('pbb/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Permintaan Bahan Baku</th>
                        <th>Tanggal</th>
                        <th>Kacang Lupin (KG)</th>
                        <th>Keterangan</th>
                        <th>Kode Bahan Baku</th>
                        <th>Nama User</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; //$jumlah = 0;
                    $levelStatus = array('','Kepala Staff Produksi','Staff Produksi','Kepala Staff Pengolahan','Staff Pengolahan','Direktur Utama');
                    foreach($this->db->where(' transaksi_pbb.bb_id=master_bhnbaku.bb_id AND transaksi_pbb.user_id=user.user_id ')->get('transaksi_pbb, master_bhnbaku, user')->result() as $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->pbb_id?></td>
                        <td><?=$data->tanggal_pbb?></td>
                        <td><?=$data->kacanglupin_pbb?></td>
                        <td><?=$data->keterangan_pbb?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_bb)).', '.$data->lupin_bb.' Kg (Lupin)'; ?></td>
                        <td><?= $levelStatus[$data->level].' - '.$data->name; ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('pbb/edit/'.$data->pbb_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('pbb/del/'.$data->pbb_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <?php
                    } ?>
                    <!--<tr>
						<td colspan="7" align="center">
							<b>Total : <?= number_format($jumlah).' Kg'; ?></b>
						</td>
					</tr>-->
                </tbody>
            </table>
        </div>
    </div> 

</section>