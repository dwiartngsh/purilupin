<!DOCTYPE html>
<html>
<head>
    <title>Laporan Permintaan Bahan Baku</title>
    <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript">
        self.print();
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center">Laporan Permintaan Bahan Baku</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td><b>Kode Permintaan Bahan Baku</b></td>
                    <td><b>Tanggal</b></td>
                    <td><b>Kacang Lupin (KG)</b></td>
                    <td><b>Keterangan</b></td>
                    <td><b>Bahan Baku</b></td>
                    <td><b>Nama User</b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $tgl_awal = date('Y-m-d', strtotime($this->uri->segment(3)));
                    $tgl_akhir = date('Y-m-d', strtotime($this->uri->segment(4)));
                    foreach($this->db->where(' transaksi_pbb.bb_id=master_bhnbaku.bb_id AND transaksi_pbb.user_id=user.user_id AND tanggal_pbb >= "'.$tgl_awal.'" AND tanggal_pbb <= "'.$tgl_akhir.'" ')->order_by('tanggal_pbb','ASC')->get('transaksi_pbb, master_bhnbaku, user')->result() as $data){
                ?>
                <tr>
                    <td><?= $data->pbb_id; ?></td>
                    <td><?= $data->tanggal_pbb; ?></td>
                    <td><?= $data->kacanglupin_pbb; ?></td>
                    <td><?= $data->keterangan_pbb; ?></td>
                    <td><?= date('j-F-Y', strtotime($data->tanggal_bb)).', '.$data->lupin_bb.' Kg (Lupin)'; ?></td>
                    <td><?= $data->name; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>