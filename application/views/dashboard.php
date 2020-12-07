<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="http://localhost/purilupin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
  <div class="row">
  <?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?= $this->db->count_all_results('master_bhnbaku'); ?></h3>
          <p>Bahan Baku</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="http://localhost/purilupin/bhnbaku/add" class="small-box-footer">Tambah <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-orange">
        <div class="inner"> 
          <h3><?= $this->db->count_all_results('master_bumbu'); ?>
            <!--<sup style="font-size: 20px"></sup>-->
          </h3>
          <p>Bumbu</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="http://localhost/purilupin/bumbu/add" class="small-box-footer">Tambah <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $this->db->count_all_results('master_brgjadi'); ?></h3>
          <p>Barang Jadi</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="http://localhost/purilupin/brgjadi/add" class="small-box-footer">Tambah <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?= $this->db->count_all_results('transaksi_pbb'); ?></h3>
          <p>Permintaan Bahan Baku</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/pbb/add" class="small-box-footer">Tambah <i class="fa fa-plus"></i></a>
      </div>
    </div>
    <?php } ?>
  <?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-orange">
        <div class="inner"> 
          <h3><?= $this->db->count_all_results('transaksi_belibumbu'); ?>
            <!--<sup style="font-size: 20px"></sup>-->
          </h3>
          <p>Pembelian Bumbu</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="http://localhost/purilupin/belibumbu/add" class="small-box-footer">Tambah <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><?= $this->db->count_all_results('transaksi_brgmasuk'); ?></h3>
          <p>Barang Masuk</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/brgmasuk/add" class="small-box-footer">Tambah <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box white bg-navy">
        <div class="inner">
          <h3><?= $this->db->count_all_results('transaksi_thpproduk'); ?></h3>
          <p>Tahap Produk</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/thpproduk/add" class="small-box-footer">Tambah <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-maroon">
        <div class="inner">
          <h3><?= $this->db->count_all_results('transaksi_distbrgjadi'); ?></h3>
          <p>Distribusi Barang Jadi</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/distbrgjadi/add" class="small-box-footer">Tambah <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 3 || $this->session->userdata('level') == 4) { ?>
    <div class="col-lg-3 col-xs-6 col-md-offset-2">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?= $this->db->count_all_results('surat_jalan'); ?></h3>
          <p>Surat Jalan</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/suratjalan/add" class="small-box-footer">Tambah <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 3 || $this->session->userdata('level') == 4) { ?>
  <div class="col-lg-3 col-xs-6 col-md-offset-1">
      <div class="small-box bg-green">
        <div class="inner">
        <h4><b><center><br> &nbsp; Laporan Surat <br> Jalan</center></b></h4>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/lap_suratjalan" class="small-box-footer">Lihat <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 5) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-blue">
        <div class="inner">
          <h4><b><center>Laporan Permintaan Bahan Baku</center></b></h4>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/lap_pbb" class="small-box-footer">Lihat <i class="fa fa-plus"></i></a>
      </div>
    </div>
    <?php } ?>
  <?php if ($this->session->userdata('level') == 5) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-blue">
        <div class="inner">
          <h4><b><center>Laporan Pembelian Bumbu</center></b></h4>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/lap_belibumbu" class="small-box-footer">Lihat <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 5) { ?>
  <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
        <h4><b><center>Laporan Barang <br> Masuk</center></b></h4>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/lap_brgmasuk" class="small-box-footer">Lihat <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 5) { ?>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
        <h4><b><center>Laporan Tahap <br> Produk</center></b></h4>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/lap_thpproduk" class="small-box-footer">Lihat <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 5) { ?>
  <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-navy">
        <div class="inner">
        <h4><b><center>Laporan Barang <br> Jadi</center></b></h4>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/lap_brgjadi" class="small-box-footer">Lihat <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 5) { ?>
    <div class="col-lg-4 col-xs-4 col-sm-offset-4">
      <div class="small-box bg-red">
        <div class="inner">
        <h4><b><center>Laporan Distribusi Barang Jadi</center></b></h4>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="http://localhost/purilupin/lap_distbrgjadi" class="small-box-footer">Lihat <i class="fa fa-plus"></i></a>
      </div>
    </div>
  <?php } ?>
  </div>
</section>