<section class="content-header">
    <h1>Tahap Produk
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Tahap Produk</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Tahap Produk</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('thpproduk/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Tahap Produk</th>
                        <th>Tanggal</th>
                        <th>Nama Tahap Produk</th>
                        <th>Perendaman (KG)</th>
                        <th>Perebusan (KG)</th>
                        <th>Peragian (KG)</th>
                        <th>Pemotongan (KG)</th>
                        <th>Penggorengan (KG)</th>
                        <th>Keterangan</th>
                        <th>Bahan Baku</th>
                        <th>Bumbu</th>
                        <th>Nama data</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    $levelStatus = array('','Kepala Staff Produksi','Staff Produksi','Kepala Staff Pengolahan','Staff Pengolahan','Direktur Utama');
                    foreach($this->db->where(' transaksi_thpproduk.bu_id=master_bumbu.bu_id AND transaksi_thpproduk.bb_id=master_bhnbaku.bb_id AND transaksi_thpproduk.user_id=user.user_id ')->get('transaksi_thpproduk, master_bumbu, master_bhnbaku, user')->result() as $data) { ?>
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->tp_id?></td>
                        <td><?=$data->tanggal_tp?></td>
                        <td><?=$data->nama_tp?></td>
                        <td><?=$data->perendaman_tp?></td>
                        <td><?=$data->perebusan_tp?></td>
                        <td><?=$data->peragian_tp?></td>
                        <td><?=$data->pemotongan_tp?></td>
                        <td><?=$data->penggorengan_tp?></td>
                        <td><?=$data->keterangan_tp?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_bb)).', '.$data->lupin_bb.' Kg (Lupin), '.$data->tapioka_bb.' Kg (Tapioka), '.$data->ragi_bb.' Gr (Ragi)'; ?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_bu)).', '.$data->bwgputih_bu.' gr (Bwg Putih), '.$data->kemiri_bu.' gr (Kemiri), '.$data->penyedap_bu.' gr (Penyedap), '.$data->tepungberas_bu.' gr (Tepung Beras), '.$data->air_bu.' ml (Air)'; ?></td>
                        <td><?= $levelStatus[$data->level].' - '.$data->name; ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('thpproduk/edit/'.$data->tp_id)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Update
                            </a>
                            <a href="<?=site_url('thpproduk/del/'.$data->tp_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
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