<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembelian Bumbu</title>
    <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript">
        self.print();
    </script>
</head>
<body>
    <div class="container">
        <h2 align="center">Laporan Pembelian Bumbu</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td><b>Kode Pembelian Bumbu</b></td>
                    <td><b>Tanggal</b></td>
                    <td><b>Bawang Putih (Gr)</b></td>
                    <td><b>Kemiri (Gr)</b></td>
                    <td><b>Penyedap Rasa (Gr)</b></td>
                    <td><b>Tepung Beras (Gr)</b></td>
                    <td><b>Harga (Rp)</b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $tgl_awal = date('Y-m-d', strtotime($this->uri->segment(3)));
                    $tgl_akhir = date('Y-m-d', strtotime($this->uri->segment(4)));
                    foreach($this->db->where(' tanggal_pb >= "'.$tgl_awal.'" AND tanggal_pb <= "'.$tgl_akhir.'" ')->order_by('tanggal_pb','ASC')->get('transaksi_belibumbu')->result() as $data){
                ?>
                <tr>
                <td><?=$data->pb_id?></td>
                <td><?=$data->tanggal_pb?></td>
                <td><?=$data->bwgputih_pb?></td>
                <td><?=$data->kemiri_pb?></td>
                <td><?=$data->penyedap_pb?></td>
                <td><?=$data->tepungberas_pb?></td>                      
                <td><?=$data->harga?></td>   
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>