<section class="content-header">
    <h1>Barang Jadi
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Barang Jadi</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Barang Jadi</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('brgjadi/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Barang Jadi</th>
                        <th>Tanggal</th>
                        <th>Nama Barang Jadi</th>
                        <th>Packing 50 Gr</th>
                        <th>Packing 75 Gr</th>
                        <th>Packing 150 Gr</th>
                        <th>Packing Tabung</th>
                        <th>Tahap Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach($this->db->where(' master_brgjadi.tp_id=transaksi_thpproduk.tp_id ')->get('master_brgjadi, transaksi_thpproduk')->result() as $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->bj_id?></td>
                        <td><?=$data->tanggal_bj?></td>
                        <td><?=$data->nama_bj?></td>
                        <td><?=$data->packing50gr_bj?></td>
                        <td><?=$data->packing75gr_bj?></td>
                        <td><?=$data->packing150gr_bj?></td>
                        <td><?=$data->packingtabung_bj?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_tp)).', '.$data->nama_tp; ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('brgjadi/edit/'.$data->bj_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('brgjadi/del/'.$data->bj_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
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