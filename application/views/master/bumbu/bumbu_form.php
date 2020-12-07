<section class="content-header">
    <h1>Bumbu</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Bumbu</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Bumbu</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('bumbu')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('bumbu/process')?>" method="post">
                        <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Tanggal</label> 
                            <input type="date" name="tanggal" value="<?=$row->tanggal_bu?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Bawang Putih (Gr) *</label>
                            <input type="number" name="bawang" value="<?=$row->bwgputih_bu?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kemiri (Gr) *</label>
                            <input type="number" name="kemiri" value="<?=$row->kemiri_bu?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Penyedap Rasa (Gr) *</label>
                            <input type="number" name="penyedap" value="<?=$row->penyedap_bu?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tepung Beras (Gr) *</label>
                            <input type="number" name="tepung" value="<?=$row->tepungberas_bu?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Air (Ml) *</label>
                            <input type="number" name="air" value="<?=$row->air_bu?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Pembelian Bumbu *</label>
                            <select name="kode_pb" class="form-control">
							<?php
								foreach($this->db->get('transaksi_belibumbu')->result() as $belibumbu){
                                    echo '<option value="'.$belibumbu->pb_id.'">'.date('j-F-Y', strtotime($belibumbu->tanggal_pb)).', '.$belibumbu->bwgputih_pb.' gr (Bwg Putih), '.$belibumbu->kemiri_pb.' gr (Kemiri), '.$belibumbu->penyedap_pb.' gr (Penyedap), '.$belibumbu->tepungberas_pb.' gr (Tepung Beras)</option>';
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
