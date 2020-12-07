<section class="content-header">
    <h1>Bahan Baku</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Bahan Baku</li>
     </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Bahan Baku</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?=site_url('bhnbaku')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('bhnbaku/process')?>" method="post">
                        <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Tanggal</label> 
                            <input type="date" name="tanggal" value="<?=$row->tanggal_bb?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kacang Lupin (KG) *</label>
                            <input type="number" name="lupin" value="<?=$row->lupin_bb?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tapioka (KG) *</label>
                            <input type="number" name="tapioka" value="<?=$row->tapioka_bb?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Ragi (Gr) *</label>
                            <input type="number" name="ragi" value="<?=$row->ragi_bb?>" class="form-control" required>
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
