<section class="content-header">
    <h1>Tahap Produk</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Tahap Produk</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Tahap Produk</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('thpproduk')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>    
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('thpproduk/process')?>" method="post">
                        <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Tanggal</label> 
                            <input type="date" name="tanggal" value="<?=$row->tanggal_tp?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Tahap Produk *</label>
                            <input type="text" name="nama" value="<?=$row->nama_tp?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Perendaman (KG) *</label>
                            <input type="number" name="perendaman" value="<?=$row->perendaman_tp?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Perebusan (KG) *</label>
                            <input type="number" name="perebusan" value="<?=$row->perebusan_tp?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Peragian (KG) *</label>
                            <input type="number" name="peragian" value="<?=$row->peragian_tp?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Pemotongan (KG) *</label>
                            <input type="number" name="pemotongan" value="<?=$row->pemotongan_tp?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Penggorengan (KG) *</label>
                            <input type="number" name="penggorengan" value="<?=$row->penggorengan_tp?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control"><?=$row->keterangan_tp?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Bahan Baku *</label>
                            <select name="kode_bb" class="form-control">
							<?php
								foreach($this->db->get('master_bhnbaku')->result() as $bahanBaku){
                                    echo '<option value="'.$bahanBaku->bb_id.'">'.date('j-F-Y', strtotime($bahanBaku->tanggal_bb)).', '.$bahanBaku->lupin_bb.' Kg (Lupin), '.$bahanBaku->tapioka_bb.' Kg (Tapioka), '.$bahanBaku->ragi_bb.' Gr (Ragi)</option>';
                                }
							?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bumbu *</label>
                            <select name="kode_bu" class="form-control">
							<?php
								foreach($this->db->get('master_bumbu')->result() as $bumbu){
                                    echo '<option value="'.$bumbu->bu_id.'">'.date('j-F-Y', strtotime($bumbu->tanggal_bu)).', '.$bumbu->bwgputih_bu.' gr (Bwg Putih), '.$bumbu->kemiri_bu.' gr (Kemiri), '.$bumbu->penyedap_bu.' gr (Penyedap), '.$bumbu->tepungberas_bu.' gr (Tepung Beras), '.$bumbu->air_bu.' ml (Air)</option>';
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
