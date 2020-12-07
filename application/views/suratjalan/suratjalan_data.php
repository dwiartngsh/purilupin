<section class="content-header">
    <h1>Surat Jalan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Surat Jalan</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Surat Jalan</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('suratjalan/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Surat Jalan</th>
                        <th>Tanggal</th>
                        <th>QTY (Jumlah Karung)</th>
                        <th>Berat (KG)</th>
                        <th>Jumlah Berat</th>
                        <th>Keterangan</th>
                        <th>Permintaan Bahan Baku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($this->db->where(' surat_jalan.pbb_id=transaksi_pbb.pbb_id ')->get('surat_jalan, transaksi_pbb')->result() as $data) { ?>
                        <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->sj_id?></td>
                        <td><?=$data->tanggal_sj?></td>
                        <td><?=$data->qty_sj?></td>
                        <td><?=$data->berat_sj?></td>
                        <td><?=$data->jumlahberat_sj?></td>
                        <td><?=$data->keterangan_sj?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_pbb)).', '.$data->kacanglupin_pbb.' Kg (Lupin)'; ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('suratjalan/edit/'.$data->sj_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('suratjalan/del/'.$data->sj_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div> 

</section>