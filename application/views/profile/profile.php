<section class="content-header">
    <h1>Profile
        <small>Profil</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Profil</li>
    </ol>
</section>

<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Profil</h3>
        </div>
        <div class="box-body table-responsive">
            <form method="POST" enctype="multipart/form-data" id="uploadFoto">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td align="center" colspan="2">
                            <label id="avatar">
                                <?php if ($this->fungsi->user_login()->avatar == "") { ?>
                                    <img src="<?= base_url(''); ?>/assets/img/logo_2.png" style="width:200px;height:200px;" id="avatar" />
                                <?php } else { ?>
                                    <img src="<?= base_url($this->fungsi->user_login()->avatar); ?>" style="width:200px;height:200px;" id="avatar" />
                                <?php } ?>
                                <input type="file" id="avatar" required="" name="foto" style="display:none;" accept="image/*" onchange="document.getElementById('uploadFoto').submit();">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>Username :</td>
                        <td><?= $this->fungsi->user_login()->username; ?></td>
                    </tr>
                    <tr>
                        <td>Name :</td>
                        <td><?= $this->fungsi->user_login()->name; ?></td>
                    </tr>
                    <tr>
                        <td>Address :</td>
                        <td><?= $this->fungsi->user_login()->address; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><b>Informasi : Kalau mau ganti foto profil, klik gambar dulu dan ubah sesuai keinginan</h2>
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</section>