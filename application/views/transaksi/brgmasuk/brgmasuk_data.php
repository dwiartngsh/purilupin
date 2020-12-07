<section class="content-header">
    <h1>Barang Masuk
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Barang Masuk</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Barang Masuk</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('brgmasuk/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Barang Masuk</th>
                        <th>Tanggal</th>
                        <th>Nama Barang Masuk</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Surat Jalan</th>
                        <th>Bahan Baku</th>
                        <th>Permintaan Bahan Baku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; //$jumlah = 0;
                    foreach($this->db->where(' transaksi_brgmasuk.sj_id=surat_jalan.sj_id AND transaksi_brgmasuk.bb_id=master_bhnbaku.bb_id AND transaksi_brgmasuk.pbb_id=transaksi_pbb.pbb_id ')->get('transaksi_brgmasuk, surat_jalan, master_bhnbaku, transaksi_pbb')->result() as $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->bm_id?></td>
                        <td><?=$data->tanggal_bm?></td>
                        <td><?=$data->nama_bm?></td>
                        <td><?=$data->jumlah_bm?></td>
                        <td><?=$data->keterangan_bm?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_sj)).', '.$data->jumlahberat_sj.' Kg'; ?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_bb)).', '.$data->lupin_bb.' Kg (Lupin)'; ?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_pbb)).', '.$data->kacanglupin_pbb.' Kg (Lupin)'; ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('brgmasuk/edit/'.$data->bm_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('brgmasuk/del/'.$data->bm_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <?php
                    } ?>
                    <!--<tr>
						<td colspan="10" align="center">
							<b>Total : <?= number_format($jumlah).' Kg'; ?></b>
						</td>
					</tr>-->
                </tbody>
            </table>
        </div>
    </div> 

</section>