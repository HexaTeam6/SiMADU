<?php 
$this->load->view('template/head');
$this->load->view('template/side');
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gangguan
        <small>Histori Gangguan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gear"></i> Gangguan</a></li>
        <li class="active">Histori Gangguan</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">

	<!-- Modal Info -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- form start -->
          <form class="form-horizontal">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">WO Gangguan</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">

<!--                    <div class="form-group">-->
<!--                        <label  class="col-sm-4 control-label">Nomor Meter</label>-->
<!--                        <div class="col-sm-8" id="no_meter_info"></div>-->
<!--                    </div>-->

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">ID Pelanggan</label>
                        <div class="col-sm-8" id="kode_pelanggan_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Nomor Lapor</label>
                        <div class="col-sm-8" id="no_lapor_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Nama Pelapor</label>
                        <div class="col-sm-8" id="nama_pelapor_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Nomor Hp</label>
                        <div class="col-sm-8" id="no_hp_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Pembatas Daya</label>
                        <div class="col-sm-8" id="pembatas_daya_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Permasalahan</label>
                        <div class="col-sm-8" id="permasalahan_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Keterangan</label>
                        <div class="col-sm-8" id="keterangan_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Kondisi</label>
                        <div class="col-sm-8" id="kondisi_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Tang Ampere</label>
                        <div class="col-sm-8" id="tang_ampere_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Perbaikan</label>
                        <div class="col-sm-8" id="perbaikan_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Nama Petugas 1</label>
                        <div class="col-sm-8" id="nama_petugas1_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Nama Petugas 2</label>
                        <div class="col-sm-8" id="nama_petugas2_info"></div>
                    </div>
                    
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Default box -->
    <div class="box">        
        <div class="box-header">
          <h3 class="box-title">
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="datatable" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No.</th>
              <th>ID Pelanggan</th>
<!--              <th>Nomor Meter</th>-->
              <th>Nomor Lapor</th>
              <th>Nama Pelapor</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <?php 
				$no = 1;
				foreach ($data as $row):
				?>
                    <tr>
                        
                        <td class="no" width=5% ><?php echo $no ?></td>
                        <td class="kode_pelanggan"><?php echo $row->kode_pelanggan; ?></td>
<!--                        <td class="no_meter">--><?php //echo $row->no_meter;?><!--</td>-->
                        <td class="no_lapor"><?php echo $row->no_lapor;?></td>
                        <td class="nama_pelapor"><?php echo $row->nama_pelapor;?></td>

                        <input type="hidden" class="kode_gangguan" value="<?php echo $row->kode_gangguan;?>">
                        <input type="hidden" class="kode_user" value="<?php echo $row->kode_user;?>">
                        <input type="hidden" class="no_hp" value="<?php echo $row->no_hp;?>">
                        <input type="hidden" class="pembatas_daya" value="<?php echo $row->pembatas_daya;?>">
                        <input type="hidden" class="permasalahan" value="<?php echo $row->permasalahan;?>">
                        <input type="hidden" class="keterangan" value="<?php echo $row->keterangan;?>">
                        <input type="hidden" class="kondisi" value="<?php echo $row->kondisi;?>">
                        <input type="hidden" class="tang_ampere" value="<?php echo $row->tang_ampere;?>">
                        <input type="hidden" class="perbaikan" value="<?php echo $row->perbaikan;?>">
                        <input type="hidden" class="nama_petugas1" value="<?php echo $row->nama_petugas1;?>">
                        <input type="hidden" class="nama_petugas2" value="<?php echo $row->nama_petugas2;?>">

                        <td align="center">
                            <a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='Print'>
                                <button class='btn btn-default btn-xs btnPrint' data-title='Print' id="btnPrint">
                                <span class='glyphicon glyphicon-print'></span>
                                </button>
                            </a>

                             <?php if ($this->session->userdata("39view")=="1"){?>
                                <a href='#'>
                                    <span data-placement='top' data-toggle='tooltip' title='Info'>
                                    <button class='btn btn-info btn-xs btnInfo' data-title='Info' data-toggle='modal' data-target='#infoModal' id="btnInfo">
                                    <span class='glyphicon glyphicon-ok'></span>
                                    </button>
                                </a>
                            <?php }?>
                        </td>
                    </tr>
                <?php 
				$no+=1;
				endforeach
				?>
            </tbody>
          </table>
        </div>
    </div><!-- /.box -->

</section><!-- /.content -->
 

 </div>
  <!-- /.content-wrapper -->
<?php
$this->load->view('template/foot');
$this->load->view('template/controlside');
$this->load->view('template/js');
?>
<script>
  $(function () { 
    $('#datatable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-sucess").slideUp(500);
    });

      $('#datatable').on('click', '[id^=btnPrint]', function() {
          var $item = $(this).closest("tr");
          var url = '<?php echo site_url("/Histori_gangguan_ctrl/laporan_print/");?>' + $item.find(".kode_gangguan").val();
//          console.log(url);
          newwindow=window.open(url,'Print','height=500,width=1100');
          if (window.focus) {newwindow.focus()}
          return false;
      });


      $('#datatable').on('click', '[id^=btnInfo]', function() {
        var $item = $(this).closest("tr");
        $("#kode_pelanggan_info").text($item.find(".kode_pelanggan").text());
//        $("#no_meter_info").text($item.find(".no_meter").text());
        $("#no_lapor_info").text($item.find(".no_lapor").text());
        $("#nama_pelapor_info").text($item.find(".nama_pelapor").text());
        $("#no_hp_info").text($item.find(".no_hp").val());
        $("#pembatas_daya_info").text($item.find(".pembatas_daya").val());
        $("#permasalahan_info").text($item.find(".permasalahan").val());
        $("#keterangan_info").text($item.find(".keterangan").val());
        $("#kondisi_info").text($item.find(".kondisi").val());
        $("#tang_ampere_info").text($item.find(".tang_ampere").val());
        $("#perbaikan_info").text($item.find(".perbaikan").val());
        $("#nama_petugas1_info").text($item.find(".nama_petugas1").val());
        $("#nama_petugas2_info").text($item.find(".nama_petugas2").val());
    });
  });
</script>   
<?php
$this->load->view('template/endbody');
?>