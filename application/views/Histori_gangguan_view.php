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

    <div class="box">
        <div class="box-header with-border">
            <div class="box-title">Data Pelanggan</div>
        </div>
        <div class="box-body">
            <div class="form-group col-md-4">
                <label>ID Pelanggan</label>
                <select class="form-control kode_pelanggan_select" id="kode_pelanggan" name="kode_pelanggan">
                    <?php foreach ($pelanggan as $row):?>
                        <option value="<?= $row->kode_pelanggan?>"><?= $row->kode_pelanggan?> - <?= $row->nama_pelanggan?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Nomor Meter</label>
                <input type="text" class="form-control" name="no_meter" id="no_meter" readonly placeholder="Nomor Meter">
            </div>
            <div class="form-group col-md-4">
                <label>Nama Pelanggan</label>
                <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" readonly placeholder="Nama Pelanggan">
            </div>
            <div class="form-group col-md-4">
                <label>Alamat Pelanggan</label>
                <input type="text" class="form-control" name="alamat_pelanggan" id="alamat_pelanggan" readonly placeholder="Alamat Pelanggan">
            </div>
            <div class="form-group col-md-4">
                <label>Tarif</label>
                <input type="text" class="form-control" name="tarif" id="tarif" readonly placeholder="Tarif">
            </div>
            <div class="form-group col-md-4">
                <label>Daya</label>
                <input type="text" class="form-control" name="daya" id="daya" readonly placeholder="Daya">
            </div>
            <div class="form-group col-md-4">
                <label>Jenis Pelanggan</label>
                <input type="text" class="form-control" name="jenis_pelanggan" id="jenis_pelanggan" readonly placeholder="Jenis Pelanggan">
            </div>
        </div>
    </div>

    <!-- Default box -->
    <div class="box">
            <div class="box-header">
                <div class="input-group col-md-3" style="float: left">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" autocomplete="off" class="form-control pull-right" id="dateSearch" placeholder="Tanggal">
                </div>
                <input type="button" class="btn btn-danger" id="clear" value="Clear">
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
              <th>Tanggal</th>
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
                        <td class="created_at"><?php echo date("Y-m-d", strtotime($row->created_at));?></td>

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
//        dom: 'Bfrtip',
//        buttons: [
//            'copyHtml5',
//            'excelHtml5',
//            'csvHtml5',
//            'pdfHtml5'
//        ]
    });

      var table = $('#datatable').DataTable();
      $("#kode_pelanggan").val(null).trigger('change');
      $(".kode_pelanggan_select").select2({
          allowClear : true,
          placeholder: "ID Pelanggan"
      });

      $('#dateSearch').daterangepicker({
          locale: {
              format: 'YYYY-MM-DD'
          }

      });
      $("#clear").click(function () {
          $('#dateSearch').val("");
          table.draw()
      });

      $('#dateSearch').val("");

      $('#kode_pelanggan').on( 'keyup change clear', function () {
          if ( table.search() !== this.value ) {
              table
                  .columns(1)
                  .search( this.value )
                  .draw();
          }
          else{
              table
                  .columns()
                  .search('')
                  .draw();
          }
      } );

      $.fn.dataTable.ext.search.push(
          function( settings, data, dataIndex ) {
              date = $('#dateSearch').val().split(" - ");
              var min = new Date(date[0]);
              var max = new Date(date[1]);
              date = new Date(data[4]);
//              console.log(date);

              if ( ( isNaN( min ) && isNaN( max ) ) ||
                  ( isNaN( min ) && date <= max ) ||
                  ( min <= date && isNaN( max ) ) ||
                  ( min <= date && date <= max ) )
              {
                  return true;
              }
              return false;
          }
      );

      $('#dateSearch').on( 'keyup change clear', function () {
          var daterange = $('#dateSearch').val();
          if (daterange != "")
              table.draw();
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

      $(".kode_pelanggan_select").on("keyup change clear", function (e) {
          var kode_pelanggan = $("#kode_pelanggan").val();
          if (kode_pelanggan){
              $.ajax({
                  url: "<?php echo site_url("/Wo_gangguan_ctrl/getDataPelanggan/");?>",
                  dataType: 'text',
                  type: "POST",
                  contentType: 'application/x-www-form-urlencoded',
                  data: {"kode_pelanggan": kode_pelanggan},
                  success: function (result) {
                      var result = JSON.parse(result);
                      $("#no_meter").val(result.no_meter);
                      $("#nama_pelanggan").val(result.nama_pelanggan);
                      $("#alamat_pelanggan").val(result.alamat_pelanggan);
                      $("#tarif").val(result.tarif);
                      $("#daya").val(result.daya);
                      var jenis_pelanggan = result.daya == 1 ? "Prabayar" : "Pascabayar";
                      $("#jenis_pelanggan").val(jenis_pelanggan);
                  }
              });
          }
          else{
              $("#no_meter").val("");
              $("#nama_pelanggan").val("");
              $("#alamat_pelanggan").val("");
              $("#tarif").val("");
              $("#daya").val("");
              $("#jenis_pelanggan").val("");
          }
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