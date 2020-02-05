<?php 
$this->load->view('template/head');
$this->load->view('template/side');
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Selamat Datang
                <small>SiMadu</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-4">
                    <!-- Info Boxes Style 2 -->
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="ion ion-android-warning"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Ganguan</span>
                            <span class="info-box-number"><?= $total->total;?></span>

                            <div class="progress">
                                <div class="progress-bar" style="width: <?php
                                if($total->total)
                                    echo round($total->selesai/$total->total*100);
                                else echo 0 ?>%"></div>
                            </div>
                            <span class="progress-description">
                                <?php if($total->total)
                                    echo round($total->selesai/$total->total*100);
                                else echo 0 ?>% (<?= $total->selesai; ?>) Gangguan selesai
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- /.info-box -->
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="ion ion-android-add"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Gangguan hari ini</span>
                            <span class="info-box-number"><?= $today->total;?></span>

                            <div class="progress">
                                <div class="progress-bar" style="width: <?php
                                if($today->total)
                                    echo round($today->selesai/$today->total*100);
                                else echo 0 ?>%"></div>
                            </div>
                            <span class="progress-description">
                                <?php if($today->total)
                                    echo round($today->selesai/$today->total*100);
                                else echo 0 ?>% (<?= $today->selesai; ?>) Gangguan selesai
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <center><h3>Grafik Total Gangguan per Bulan</h3></center>
                                    <canvas id="lineGangguan"></canvas>
                                    <!-- /.chart-responsive -->
                                </div>
                                <div class="col-md-5">
                                    <center><h3>Grafik Total Gangguan per Unit</h3></center>
                                    <canvas id="pieGangguan"></canvas>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer">

                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
<?php
$this->load->view('template/foot');
$this->load->view('template/controlside');
$this->load->view('template/js');
?>

<?php
//random hex color
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

//lineGangguan
$month = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
$labelLine = [];
$dataLine = [];
$i=0;
foreach ($monthly as $row){
    $labelLine[$i] = $month[$row->bulan-1];
    $dataLine[$i] = (int)$row->jumlah;
    $i++;
}

//pieGangguan
$labelPie = [];
$dataPie = [];
$color = [];
$i=0;
foreach ($unit as $row){
    $labelPie[$i] = $row->nama;
    $dataPie[$i] = (int)$row->jumlah;
    $color[$i] = "#".random_color();
    $i++;
}
?>

<script>
    $(function () {
        var ctx = $("#lineGangguan");
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: [<?php echo '"'.implode('","',  $labelLine ).'"' ?>],
                datasets: [{
                    label: 'Total Gangguan',
                    backgroundColor: '#f39c12',
                    borderColor: '#f39c12',
                    data: [<?php echo '"'.implode('","',  $dataLine ).'"' ?>]
                }]
            },
            options: {
                responsive: true
            }
        });

        var ctx = $("#pieGangguan");
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'pie',

            // The data for our dataset
            data: {
                labels: [<?php echo '"'.implode('","',  $labelPie ).'"' ?>],
                datasets: [{
                    backgroundColor: [<?php echo '"'.implode('","',  $color ).'"' ?>],
//                    borderColor: '#f39c12',
                    data: [<?php echo '"'.implode('","',  $dataPie ).'"' ?>]
                }]
            }
        });
    });
</script>
