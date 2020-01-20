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
        <small>List Gangguan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gear"></i> Gangguan</a></li>
        <li class="active">WO Gangguan</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('Wo_gangguan_ctrl/update')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">WO Gangguan</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Nomor Meter</label>
                    <div class="col-sm-10">
                      <input autocomplete="off" type="text" readonly class="form-control" id="no_meter" name="no_meter" placeholder="Nomor Meter">
                    </div>
                  </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">ID Pelanggan</label>
                        <div class="col-sm-10">
                            <select class="form-control kode_pelanggan_select" id="kode_pelanggan" name="kode_pelanggan">
                                <?php foreach ($pelanggan as $row):?>
                                <option value="<?= $row->kode_pelanggan?>"><?= $row->kode_pelanggan?> - <?= $row->nama_pelanggan?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

<!--                  <div class="form-group">-->
<!--                    <label  class="col-sm-2 control-label">ID Pelanggan</label>-->
<!--                    <div class="col-sm-10">-->
<!--                      <input autocomplete="off" type="text" class="form-control" id="kode_pelanggan" name="kode_pelanggan" placeholder="ID Pelanggan">-->
<!--                    </div>-->
<!--                  </div>-->

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Nomor Lapor</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="no_lapor" name="no_lapor" placeholder="Nomor Lapor">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Nama Pelapor</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="Nama Pelapor">
                        </div>
                    </div>

                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Nomor Hp</label>
                    <div class="col-sm-10">
                      <input autocomplete="off" type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon">
                    </div>
                  </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Alamat Gangguan</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="alamat_gangguan" name="alamat_gangguan" placeholder="Alamat Gangguan">
                        </div>
                    </div>


                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Pembatas Daya</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="pembatas_daya" name="pembatas_daya" placeholder="Pembatas Daya">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Permasalahan</label>
                        <div class="col-sm-10">
                            <select class="form-control permasalahan_select" id="permasalahan" name="permasalahan">
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
                    </div>

<!--                    <div class="form-group hidden" id="permasalahan_lain_input">-->
<!--                        <label  class="col-sm-2 control-label">Permasalahan Lain</label>-->
<!--                        <div class="col-sm-10">-->
<!--                            <input autocomplete="off" type="text" class="form-control" id="permasalahan_lain" name="permasalahan_lain" placeholder="Permasalahan Lain">-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Kondisi</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="kondisi" name="kondisi">
                                <option value="Tidak Sambung Langsung">Tidak Sambung Langsung</option>
                                <option value="Sambung Langsung">Sambung Langsung</option>
                                <option value="Selesai Diperbaiki">Selesai Diperbaiki</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Tang Ampere</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="tang_ampere" name="tang_ampere" placeholder="Hasil Pengukuran Tang Ampere">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Perbaikan</label>
                        <div class="col-sm-10">
                            <select class="form-control perbaikan_select" id="perbaikan" name="perbaikan">
                                <option value="Penormalan CT">Penormalan CT</option>
                                <option value="WO Ganti kWh Meter Macet">WO Ganti kWh Meter Macet</option>
                                <option value="WO Ganti Kabel Wiring kWh Mater Terbakar">WO Ganti Kabel Wiring kWh Mater Terbakar</option>
                                <option value="WO Ganti NH Fuse Terbakar">WO Ganti NH Fuse Terbakar</option>
                                <option value="WO Ganti MCB Terbakar">WO Ganti MCB Terbakar</option>
                                <option value="WO Ganti MCCB Terbakar">WO Ganti MCCB Terbakar</option>
                                <option value="WO Ganti Panel APP Keropos">WO Ganti Panel APP Keropos</option>
                                <option value="WO Ganti CT Terbakar">WO Ganti CT Terbakar</option>
                                <option value="WO Ganti PT Terbakar">WO Ganti PT Terbakar</option>
                                <option value="WO Ganti Relay Mati">WO Ganti Relay Mati</option>
                                <option value="WO Gani Kubik Rusak">WO Gani Kubik Rusak</option>
                            </select>
                        </div>
                    </div>

<!--                    <div class="form-group hidden" id="perbaikan_lain_input">-->
<!--                        <label  class="col-sm-2 control-label">Perbaikan Lain</label>-->
<!--                        <div class="col-sm-10">-->
<!--                            <input autocomplete="off" type="text" class="form-control" id="perbaikan_lain" name="perbaikan_lain" placeholder="Perbaikan Lain">-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Nama Petugas 1</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="nama_petugas1" name="nama_petugas1" placeholder="Nama Petugas 1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Nama Petugas 2</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="nama_petugas2" name="nama_petugas2" placeholder="Nama Petugas 2">
                        </div>
                    </div>

                </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="action" id="action" value="add">
            <input type="hidden" name="kode_gangguan" id="kode_gangguan" value="">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btnSave">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>    

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

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Nomor Meter</label>
                        <div class="col-sm-8" id="no_meter_info"></div>
                    </div>

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
                        <label  class="col-sm-4 control-label">Alamat Gangguan</label>
                        <div class="col-sm-8" id="alamat_gangguan_info"></div>
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

	<!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('Wo_gangguan_ctrl/inactive')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">WO Gangguan</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                    <div id="wo_gangguan_delete"></div>
                </div>
          </div>
          <div class="modal-footer">
			<input type="hidden" id="kode_gangguan_delete" name="kode_gangguan_delete">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Delete</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Add User -->
    <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- form start -->
                <form class="form-horizontal" action="<?php echo site_url('Wo_gangguan_ctrl/addUser')?>" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">WO Gangguan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Pilih Delegasi</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="kode_user" name="kode_user">
                                        <option value="0">-</option>
                                        <?php foreach ($user as $row):?>
                                        <option value="<?= $row->kode_user; ?>"><?= $row->hak_akses." - ".$row->nama; ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="kode_gangguan_user" name="kode_gangguan_user">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Default box -->
    <div class="box">        
        <div class="box-header">
          <h3 class="box-title">

		  <?php if ($this->session->userdata("39insert")=="1"){?>
              <button type="button" class="btn btn-primary" id="btnNew" data-toggle="modal" data-target="#myModal">New</button>
			<?php } ?>

          </h3>
          <?php if (isset($_SESSION['msg'])) {?>  
          <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fa fa-ban"></i> Info!</h5>
                <?php echo $_SESSION['msg'];?>
          </div>
          <?php } ?>
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
                        <input type="hidden" class="alamat_gangguan" value="<?php echo $row->alamat_gangguan;?>">
                        <input type="hidden" class="pembatas_daya" value="<?php echo $row->pembatas_daya;?>">
                        <input type="hidden" class="permasalahan" value="<?php echo $row->permasalahan;?>">
                        <input type="hidden" class="keterangan" value="<?php echo $row->keterangan;?>">
                        <input type="hidden" class="kondisi" value="<?php echo $row->kondisi;?>">
                        <input type="hidden" class="tang_ampere" value="<?php echo $row->tang_ampere;?>">
                        <input type="hidden" class="perbaikan" value="<?php echo $row->perbaikan;?>">
                        <input type="hidden" class="nama_petugas1" value="<?php echo $row->nama_petugas1;?>">
                        <input type="hidden" class="nama_petugas2" value="<?php echo $row->nama_petugas2;?>">

                        <td align="center">

                            <!-- Must be admin! -->
                            <?php if ($this->session->userdata("39edit")=="1" && $_SESSION['kode_akses'] == 6){?>
                                <a href='#'>
                                    <?php $status = $row->kode_user ? "success" : "default"; ?>
                                    <span data-placement='top' data-toggle='tooltip' title='User'>
                                    <button class='btn btn-<?= $status; ?> btn-xs btnUser' data-title='User' data-toggle='modal' data-target='#userModal' id="btnUser">
                                        <span class='glyphicon glyphicon-user'></span>
                                    </button>
                                </a>
                            <?php }?>

                             <?php if ($this->session->userdata("39view")=="1"){?>
                                <a href='#'>
                                    <span data-placement='top' data-toggle='tooltip' title='Info'>
                                    <button class='btn btn-info btn-xs btnInfo' data-title='Info' data-toggle='modal' data-target='#infoModal' id="btnInfo">
                                    <span class='glyphicon glyphicon-ok'></span>
                                    </button>
                                </a>
                            <?php }?>

                            <?php if ($this->session->userdata("39edit")=="1"){?>
                                <a href='#'>
                                    <span data-placement='top' data-toggle='tooltip' title='Edit'>
                                    <button class='btn btn-warning btn-xs btnEdit' data-title='Edit' data-toggle='modal' data-target='#myModal' id="btnEdit">
                                    <span class='glyphicon glyphicon-pencil'></span>
                                    </button>
                                </a>

                            <?php }?>

							<?php if ($this->session->userdata("39delete")=="1"){?>
                                <a href='#'>
                                    <span data-placement='top' data-toggle='tooltip' title='Delete'>
                                    <button class='btn btn-danger btn-xs btnDelete' data-title='Delete' data-toggle='modal' data-target='#deleteModal' id="btnDelete">
                                    <span class='glyphicon glyphicon-remove'></span>
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

    $(".kode_pelanggan_select").select2({
        width : '100%',
        tags: true,
        allowClear : true,
        placeholder: "ID Pelanggan",
        dropdownParent: $("#myModal")
    });

      $(".permasalahan_select").select2({
          width : '100%',
          tags: true,
          allowClear : true,
          placeholder: "Permasalahan",
          dropdownParent: $("#myModal")
      });

      $(".perbaikan_select").select2({
          width : '100%',
          tags: true,
          allowClear : true,
          placeholder: "Perbaikan",
          dropdownParent: $("#myModal")
      });

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

    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-sucess").slideUp(500);
    });
    $(".btnSave").click(function (){ 
        $('#form-horizontal').submit(function () {
            return false;
           });
    });

//    $("#permasalahan").change(function () {
//        if($("#permasalahan").val() == "Lain-lain")
//            $("#permasalahan_lain_input").removeClass("hidden");
//        else
//            $("#permasalahan_lain_input").addClass("hidden");
//    });
//
//      $("#perbaikan").change(function () {
//          if($("#perbaikan").val() == "Lain-lain")
//              $("#perbaikan_lain_input").removeClass("hidden");
//          else
//              $("#perbaikan_lain_input").addClass("hidden");
//      });

	 $("#btnNew").click(function (){ 
		$("#action").val("add");
         $("#kode_gangguan").val("");
         $("#kode_pelanggan").val(null).trigger('change');
         $("#no_meter").val("");
         $("#no_lapor").val("");
         $("#nama_pelapor").val("");
         $("#no_hp").val("");
         $("#alamat_gangguan").val("");
         $("#pembatas_daya").val("");
         $("#permasalahan").val(null).trigger('change');
         $("#keterangan").text("");
         $("#kondisi").val("");
         $("#tang_ampere").val("");
         $("#perbaikan").val(null).trigger('change');
         $("#nama_petugas1").val("");
         $("#nama_petugas2").val("");
    });
    $('#datatable').on('click', '[id^=btnEdit]', function() {
        var $item = $(this).closest("tr");     
        $("#kode_gangguan").val($item.find(".kode_gangguan").val());
        $("#kode_pelanggan").val($item.find(".kode_pelanggan").text());
        $("#no_meter").val($item.find(".no_meter").text());
        $("#no_lapor").val($item.find(".no_lapor").text());
        $("#nama_pelapor").val($item.find(".nama_pelapor").text());
        $("#no_hp").val($item.find(".no_hp").val());
        $("#alamat_gangguan").val($item.find(".alamat_gangguan").val());
        $("#pembatas_daya").val($item.find(".pembatas_daya").val());

        var data = {
            val: $item.find(".permasalahan").val(),
            text: $item.find(".permasalahan").val()
        };

        var newOption = new Option(data.text, data.val, false, false);
        $('.permasalahan_select').append(newOption).trigger('change').val(data.text);

        $("#keterangan").text($item.find(".keterangan").val());
        $("#kondisi").val($item.find(".kondisi").val());
        $("#tang_ampere").val($item.find(".tang_ampere").val());

        var data = {
            val: $item.find(".perbaikan").val(),
            text: $item.find(".perbaikan").val()
        };

        var newOption = new Option(data.text, data.val, false, false);
        $('.perbaikan_select').append(newOption).trigger('change').val(data.text);

        $("#nama_petugas1").val($item.find(".nama_petugas1").val());
        $("#nama_petugas2").val($item.find(".nama_petugas2").val());
        $("#action").val("edit");
    });
	$('#datatable').on('click', '[id^=btnInfo]', function() {
        var $item = $(this).closest("tr");
        $("#kode_pelanggan_info").text($item.find(".kode_pelanggan").text());
        $("#no_meter_info").text($item.find(".no_meter").text());
        $("#no_lapor_info").text($item.find(".no_lapor").text());
        $("#nama_pelapor_info").text($item.find(".nama_pelapor").text());
        $("#no_hp_info").text($item.find(".no_hp").val());
        $("#alamat_gangguan_info").text($item.find(".alamat_gangguan").val());
        $("#pembatas_daya_info").text($item.find(".pembatas_daya").val());
        $("#permasalahan_info").text($item.find(".permasalahan").val());
        $("#keterangan_info").text($item.find(".keterangan").val());
        $("#kondisi_info").text($item.find(".kondisi").val());
        $("#tang_ampere_info").text($item.find(".tang_ampere").val());
        $("#perbaikan_info").text($item.find(".perbaikan").val());
        $("#nama_petugas1_info").text($item.find(".nama_petugas1").val());
        $("#nama_petugas2_info").text($item.find(".nama_petugas2").val());
    });
	$('#datatable').on('click', '[id^=btnDelete]', function() {
        var $item = $(this).closest("tr");
        $("#wo_gangguan_delete").text('Yakin menghapus data WO Gangguan dari '+ $item.find(".nama_pelapor").text() + ' nomor meter ' + $item.find(".no_meter").text() + ' ?');
		$("#kode_gangguan_delete").val($item.find(".kode_gangguan").val());
    });
      $('#datatable').on('click', '[id^=btnUser]', function() {
          var $item = $(this).closest("tr");
          $("#kode_user").val($item.find(".kode_user").val());
          console.log($item.find(".kode_user").val());
          $("#kode_gangguan_user").val($item.find(".kode_gangguan").val());
      });
  });
</script>   
<?php
$this->load->view('template/endbody');
?>