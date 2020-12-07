<section class="content-header">
    <h1> Distribusi Barang Jadi
    </h1>
    <ol class="breadcrumb">
        <li><a href="http://localhost/purilupin/dashboard"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Distribusi Barang Jadi</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Data Distribusi Barang Jadi</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('detil_distbrgjadi/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Distribusi Barang Jadi</th>
                        <th>Barang Jadi</th>
                        <th>Qty</th>
                        <th>Packing 50 Gr</th>
                        <th>Packing 75 Gr</th>
                        <th>Packing 150 Gr</th>
                        <th>Packing Tabung</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($this->db->where(' transaksi_detil_distbrgjadi.dbj_id=transaksi_distbrgjadi.dbj_id AND transaksi_detil_distbrgjadi.bj_id=master_brgjadi.bj_id ')->get('transaksi_detil_distbrgjadi, transaksi_distbrgjadi, master_brgjadi')->result() as $data) { ?>
                        <tr>
                        <td><?=$no++?>.</td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_dbj)).', '.$data->nama_dbj; ?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_bj)).', '.$data->nama_bj; ?></td>
                        <td><?= $data->qty; ?></td>
                        <td><?= $data->packing50gr_dbj; ?></td>
                        <td><?= $data->packing75gr_dbj; ?></td>
                        <td><?= $data->packing150gr_dbj; ?></td>
                        <td><?= $data->packingtabung_dbj; ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('detil_distbrgjadi/edit/'.$data->dbj_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('detil_distbrgjadi/del/'.$data->dbj_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
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