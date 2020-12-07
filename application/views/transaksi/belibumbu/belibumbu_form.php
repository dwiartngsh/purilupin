<section class="content-header">
    <h1>Pembelian bumbu</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Pembelian bumbu</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Pembelian bumbu</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('belibumbu')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('belibumbu/process')?>" method="post">
                        <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Tanggal</label> 
                            <input type="date" name="tanggal" value="<?=$row->tanggal_pb?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Bawang Putih (Gr) *</label>
                            <input type="number" name="bawang" value="<?=$row->bwgputih_pb?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kemiri (Gr) *</label>
                            <input type="number" name="kemiri" value="<?=$row->kemiri_pb?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Penyedap Rasa (Gr) *</label>
                            <input type="number" name="penyedap" value="<?=$row->penyedap_pb?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tepung Beras (Gr) *</label>
                            <input type="number" name="tepung" value="<?=$row->tepungberas_pb?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Harga (Rp) *</label>
                            <input type="number" name="harga" value="<?=$row->harga?>" class="form-control" required>
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
