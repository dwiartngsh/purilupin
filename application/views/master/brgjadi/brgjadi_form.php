<section class="content-header">
    <h1>Barang Jadi</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Barang Jadi</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Barang Jadi</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('brgjadi')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('brgjadi/process')?>" method="post">
                        <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Tanggal</label> 
                            <input type="date" name="tanggal" value="<?=$row->tanggal_bj?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Barang Jadi *</label>
                            <input type="text" name="nama" value="<?=$row->nama_bj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing 50 Gr *</label>
                            <input type="number" name="packing50gr" value="<?=$row->packing50gr_bj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing 75 Gr *</label>
                            <input type="number" name="packing75gr" value="<?=$row->packing50gr_bj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing 150 Gr *</label>
                            <input type="number" name="packing150gr" value="<?=$row->packing50gr_bj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing Tabung *</label>
                            <input type="number" name="packingtabung" value="<?=$row->packingtabung_bj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tahap Produk *</label>
                            <select name="kode_tp" class="form-control">
                            <?php
                                foreach($this->db->get('transaksi_thpproduk')->result() as $tahapProduk){
                                    echo '<option value="'.$tahapProduk->tp_id.'">'.date('j-F-Y', strtotime($tahapProduk->tanggal_tp)).', '.$tahapProduk->nama_tp.'</option>';
                                }
                            ?>
                            </select>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" value="<?= $this->uri->segment(3); ?>" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="reset" class="btn btn-flat">reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 

</section>
