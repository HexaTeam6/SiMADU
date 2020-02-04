<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SiMADU</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="<?php echo base_url('assets/logo.jpeg')?>">
    <!-- Jquery Confirm -->
    <link rel="stylesheet" href="<?php echo base_url('assets/jquery-confirm/jquery-confirm.min.css')?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.7/bootstrap/css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/ionicons-2.0.1/css/ionicons.min.css')?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.7/plugins/datatables/dataTables.bootstrap.css')?>">
    <!--Select2-->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.7/plugins/select2/select2.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.7/dist/css/AdminLTE.min.css')?>">
    <!--Date Picker-->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.7/plugins/daterangepicker/daterangepicker.css')?>">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.3.7/dist/css/skins/_all-skins.min.css')?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body>
<div class="wrapper">
<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-body">
            <form action="<?php echo site_url('Wo_gangguan_ctrl/update')?>" method="post">
                <div class="form-group">
                    <label>Nomor Meter</label>
                    <input autocomplete="off" type="text" readonly class="form-control" id="no_meter" name="no_meter" placeholder="Nomor Meter">
                </div>

                <div class="form-group">
                    <label>ID Pelanggan</label>
                    <select class="form-control kode_pelanggan_select" id="kode_pelanggan" name="kode_pelanggan">
                        <?php foreach ($pelanggan as $row):?>
                            <option value="<?= $row->kode_pelanggan?>"><?= $row->kode_pelanggan?> - <?= $row->nama_pelanggan?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nomor Lapor</label>
                    <input autocomplete="off" type="text" class="form-control" id="no_lapor" name="no_lapor" placeholder="Nomor Lapor">
                </div>

                <div class="form-group">
                    <label>Nama Pelapor</label>
                    <input autocomplete="off" type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="Nama Pelapor">
                </div>

                <div class="form-group">
                    <label>Nomor Hp</label>
                    <input autocomplete="off" type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon">
                </div>

                <div class="form-group">
                    <label>Alamat Gangguan</label>
                    <input autocomplete="off" type="text" class="form-control" id="alamat_gangguan" name="alamat_gangguan" placeholder="Alamat Gangguan">
                </div>


                <div class="form-group">
                    <label>Pembatas Daya</label>
                    <input autocomplete="off" type="text" class="form-control" id="pembatas_daya" name="pembatas_daya" placeholder="Pembatas Daya">
                </div>

                <div class="form-group">
                    <label>Permasalahan</label>
                    <select class="form-control permasalahan_select" id="permasalahan" name="permasalahan[]" multiple="multiple">
                        <option value="kWh Meter Macet">kWh Meter Macet</option>
                        <option value="kWh Meter Terblokir">kWh Meter Terblokir</option>
                        <option value="Wiring kWh Meter Terbakar">Wiring kWh Meter Terbakar</option>
                        <option value="MCB Terbakar">MCB Terbakar</option>
                        <option value="MCCB Terbakar">MCCB Terbakar</option>
                        <option value="Panel APP Keropos">Panel APP Keropos</option>
                        <option value="CT Terbakar">CT Terbakar</option>
                        <option value="PT Terbakar">PT Terbakar</option>
                        <option value="Relay Mati">Relay Mati</option>
                        <option value="Kubikel Rusak">Kubikel Rusak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan"></textarea>
                </div>

                <div class="form-group">
                    <label>Kondisi</label>
                    <select class="form-control" id="kondisi" name="kondisi">
                        <option value="Tidak Sambung Langsung">Tidak Sambung Langsung</option>
                        <option value="Sambung Langsung kWh Meter">Sambung Langsung kWh Meter</option>
                        <option value="Sambung Langsung MCB">Sambung Langsung MCB</option>
                        <option value="Selesai Diperbaiki">Selesai Diperbaiki</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tang Ampere</label>
                    <input autocomplete="off" type="text" class="form-control" id="tang_ampere" name="tang_ampere" placeholder="Hasil Pengukuran Tang Ampere">
                </div>

                <div class="form-group">
                    <label>Perbaikan</label>
                    <select class="form-control perbaikan_select" id="perbaikan" name="perbaikan[]" multiple="multiple">
                        <option value="Penormalan CT">Penormalan CT</option>
                        <option value="Ganti kWh Meter Macet">Ganti kWh Meter Macet</option>
                        <option value="Ganti Kabel Wiring kWh Mater Terbakar">Ganti Kabel Wiring kWh Mater Terbakar</option>
                        <option value="Ganti NH Fuse Terbakar">Ganti NH Fuse Terbakar</option>
                        <option value="Ganti MCB Terbakar">Ganti MCB Terbakar</option>
                        <option value="Ganti MCCB Terbakar">Ganti MCCB Terbakar</option>
                        <option value="Ganti Panel APP Keropos">Ganti Panel APP Keropos</option>
                        <option value="Ganti CT Terbakar">Ganti CT Terbakar</option>
                        <option value="Ganti PT Terbakar">Ganti PT Terbakar</option>
                        <option value="Ganti Relay Mati">Ganti Relay Mati</option>
                        <option value="Gani Kubik Rusak">Gani Kubik Rusak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Petugas 1</label>
                    <input autocomplete="off" type="text" class="form-control" id="nama_petugas1" name="nama_petugas1" placeholder="Nama Petugas 1">
                </div>

                <div class="form-group">
                    <label>Nama Petugas 2</label>
                    <input autocomplete="off" type="text" class="form-control" id="nama_petugas2" name="nama_petugas2" placeholder="Nama Petugas 2">
                </div>

                <input type="hidden" name="action" id="action" value="add">
                <button type="submit" class="btn btn-primary btnSave">Save changes</button>
            </form>
        </div>
    </div>
</section><!-- /.content -->
</div>
<?php
$this->load->view('template/controlside');
$this->load->view('template/js');
?>
<script>
    $(function () {
        $(".kode_pelanggan_select").select2({
            width : '100%',
            tags: true,
            allowClear : true,
            placeholder: "ID Pelanggan"
        });

        $(".permasalahan_select").select2({
            width : '100%',
            tags: true,
            allowClear : true,
            placeholder: "Permasalahan"
        });

        $(".perbaikan_select").select2({
            width : '100%',
            tags: true,
            allowClear : true,
            placeholder: "Perbaikan"
        });
        $("#kode_pelanggan").val(null).trigger('change');
        $(".kode_pelanggan_select").on("select2:select", function (e) {
            var kode_pelanggan = $("#kode_pelanggan").val();
            $.ajax({
                url: "<?php echo site_url("/Wo_gangguan_ctrl/getDataPelanggan/");?>",
                dataType: 'text',
                type: "POST",
                contentType: 'application/x-www-form-urlencoded',
                data: {"kode_pelanggan": kode_pelanggan},
                success: function (result) {
                    var result = JSON.parse(result);
                    $("#no_meter").val(result.no_meter);
                }
            });
        });
    });
</script>
<?php
$this->load->view('template/endbody');
?>