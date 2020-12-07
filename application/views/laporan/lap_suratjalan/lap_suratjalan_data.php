<!DOCTYPE html>
<html>
<head>
    <title>Laporan Surat Jalan</title>
    <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript">
        self.print();
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center">Laporan Surat Jalan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td><b>Kode</b></td>
                    <td><b>Tanggal</b></td>
                    <td><b>QTY (Jumlah Karung)</b></td>
                    <td><b>Berat</b></td>
                    <td><b>Jumlah Berat</b></td>
                    <td><b>Keterangan</b></td>
                    <td><b>Permintaan Bahan Baku</b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $tgl_awal = date('Y-m-d', strtotime($this->uri->segment(3)));
                    $tgl_akhir = date('Y-m-d', strtotime($this->uri->segment(4)));
                    foreach($this->db->where(' surat_jalan.pbb_id=transaksi_pbb.pbb_id ')->get('surat_jalan, transaksi_pbb')->result() as $data) { ?>
                        <tr>
                        <td><?=$data->sj_id?></td>
                        <td><?=$data->tanggal_sj?></td>
                        <td><?=$data->qty_sj?></td>
                        <td><?=$data->berat_sj?></td>
                        <td><?=$data->jumlahberat_sj?></td>
                        <td><?=$data->keterangan_sj?></td>
                        <td><?= date('j-F-Y', strtotime($data->tanggal_pbb)).', '.$data->kacanglupin_pbb.' Kg (Lupin)'; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>