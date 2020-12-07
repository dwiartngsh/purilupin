<section class="content-header">
    <h1>Surat Jalan</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Surat Jalan</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Surat Jalan</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('suratjalan')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>    
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('suratjalan/process')?>" method="post">
                        <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Tanggal</label> 
                            <input type="date" name="tanggal" value="<?=$row->tanggal_sj?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>QTY (Jumlah Karung) *</label>
                            <input type="number" name="qty" value="<?=$row->qty_sj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Berat (KG) *</label>
                            <input type="number" name="berat" value="<?=$row->berat_sj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Berat *</label>
                            <input type="number" name="jumlahberat" value="<?=$row->jumlahberat_sj?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control"><?=$row->keterangan_sj?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Permintaan Bahan Baku *</label>
                            <select name="kode_pbb" class="form-control">
                            <?php
								foreach($this->db->get('transaksi_pbb')->result() as $Pbb){
                                    echo '<option value="'.$Pbb->pbb_id.'">'.date('j-F-Y', strtotime($Pbb->tanggal_pbb)).', '.$Pbb->kacanglupin_pbb.' Kg (Lupin)</option>';
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
