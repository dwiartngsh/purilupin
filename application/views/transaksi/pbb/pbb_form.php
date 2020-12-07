<section class="content-header">
    <h1>Permintaan Bahan Baku</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Permintaan Bahan Baku</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> PBB</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('pbb')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>    
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('pbb/process')?>" method="post">
                            <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Tanggal</label> 
                            <input type="date" name="tanggal" value="<?=$row->tanggal_pbb?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kacang Lupin (KG) *</label>
                            <input type="number" name="kacang" value="<?=$row->kacanglupin_pbb?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control"><?=$row->keterangan_pbb?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kode Bahan Baku *</label>
                            <select name="kode_bb" class="form-control">
                            <?php
                                foreach($this->db->get('master_bhnbaku')->result() as $bahanBaku){
                                    echo '<option value="'.$bahanBaku->bb_id.'">'.date('j-F-Y', strtotime($bahanBaku->tanggal_bb)).', '.$bahanBaku->lupin_bb.' Kg (Lupin)</option>';
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama User *</label>
                            <select name="kode_user" class="form-control">
                            <?php
                                $levelStatus = array('','Kepala Staff Produksi','Staff Produksi','Kepala Staff Pengolahan','Staff Pengolahan','Direktur Utama');
                                foreach($this->db->get('user')->result() as $User){
                                    echo '<option value="'.$User->user_id.'">'.$levelStatus[$User->level].' - '.$User->name.'</option>';
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
