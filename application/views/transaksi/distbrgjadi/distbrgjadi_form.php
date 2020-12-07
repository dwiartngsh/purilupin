<section class="content-header">
    <h1>Distribusi Barang Jadi</h1>
    <ol class="breadcrumb">
        <li><a href="http://localhost/purilupin/dashboard"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Distribusi Barang Jadi</li>
    </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page) ?> Distribusi Barang Jadi</h3>
            <!-- buat tambah button sebelah kanan mulai dari sini -->
            <div class="pull-right">
                <a href="<?= site_url('distbrgjadi') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('distbrgjadi/process') ?>" method="post">
                            <!-- kiri post, kanan database -->
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" value="<?= $row->tanggal_dbj ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Distribusi Barang Jadi *</label>
                            <input type="text" name="nama" value="<?= $row->nama_dbj ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing 50gr *</label>
                            <input type="text" name="packing50gr_dbj" value="<?= $row->packing50gr_dbj ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing 75gr *</label>
                            <input type="text" name="packing75gr_dbj" value="<?= $row->packing75gr_dbj ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing 150gr *</label>
                            <input type="text" name="packing150gr_dbj" value="<?= $row->packing150gr_dbj ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Packing Tabung *</label>
                            <input type="text" name="packingtabung_dbj" value="<?= $row->packingtabung_dbj ?>" class="form-control" required>
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