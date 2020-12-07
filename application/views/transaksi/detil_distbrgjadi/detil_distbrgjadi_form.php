<section class="content-header">
    <h1>Distribusi Barang Jadi</h1>
    <ol class="breadcrumb">
        <li><a href="http://localhost/purilupin/dashboard"><i class="fa fa-dashboard"></i></a></li>
        <li class="active"> Distribusi Barang Jadi</li>
    </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page) ?>  Distribusi Barang Jadi</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?= site_url('detil_distbrgjadi') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('detil_distbrgjadi/process') ?>" method="post">
                            <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Barang Jadi *</label>
                            <select name="brgjadi" class="form-control">
                            <?php
                                foreach($this->db->get('master_brgjadi')->result() as $brgJadi){
                                    echo '<option value="'.$brgJadi->bj_id.'">'.date('j-F-Y', strtotime($brgJadi->tanggal_bj)).', '.$brgJadi->nama_bj.'</option>';
                                }
                            ?>
                            </select>                        
                            </div>
                        <div class="form-group">
                            <label>QTY *</label>
                            <input type="number" name="qty" value="<?=$row->qty?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing 50 Gr *</label>
                            <input type="number" name="packing50gr" value="<?=$row->packing50gr_dbj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing 75 Gr *</label>
                            <input type="number" name="packing75gr" value="<?=$row->packing50gr_dbj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing 150 Gr *</label>
                            <input type="number" name="packing150gr" value="<?=$row->packing50gr_dbj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing Tabung *</label>
                            <input type="number" name="packingtabung" value="<?=$row->packingtabung_dbj?>" class="form-control" required>
                        </div>                    
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" value="<?= $this->uri->segment(3); ?>" class="btn btn-success btn-flat">
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