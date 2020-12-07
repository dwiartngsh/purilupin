<section class="content-header">
    <h1>Barang Masuk</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Barang Masuk</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Barang Masuk</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('brgmasuk')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>    
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('brgmasuk/process')?>" method="post">
                        <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Tanggal</label> 
                            <input type="date" name="tanggal" value="<?=$row->tanggal_bm?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Barang Masuk *</label>
                            <input type="text" name="nama" value="<?=$row->nama_bm?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah *</label>
                            <input type="number" name="jumlah" value="<?=$row->jumlah_bm?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control"><?=$row->keterangan_bm?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Surat Jalan *</label>
                            <select name="kode_sj" class="form-control">
							<?php
								foreach($this->db->get('surat_jalan')->result() as $suratJalan){
									echo '<option value="'.$suratJalan->sj_id.'">'.$suratJalan->sj_id.' - '.$suratJalan->tanggal_sj.' - '.$suratJalan->jumlahberat_sj.' Kg</option>';
								}
							?>                            
							</select>
                        </div>
                        <div class="form-group">
                            <label>Bahan Baku *</label>
                            <select name="kode_bb" class="form-control">
							<?php
								foreach($this->db->get('master_bhnbaku')->result() as $bahanBaku){
                                    echo '<option value="'.$bahanBaku->bb_id.'">'.date('j-F-Y', strtotime($bahanBaku->tanggal_bb)).', '.$bahanBaku->lupin_bb.' Kg (Lupin)</option>';
                                }
							?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Permintaan Bahan Baku *</label>
                            <select name="kode_pbb" class="form-control">
							<?php
								foreach($this->db->get('transaksi_pbb')->result() as $Pbb){
									echo '<option value="'.$Pbb->pbb_id.'">'.$Pbb->pbb_id.' - '.$Pbb->tanggal_pbb.' - '.$Pbb->kacanglupin_pbb.' Kg (Lupin)</option>';
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
