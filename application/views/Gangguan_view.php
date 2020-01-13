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
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                      <input autocomplete="off" type="text" class="form-control" id="no_meter" name="no_meter" placeholder="Nomor Meter">
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-2 control-label">ID Pelanggan</label>
                    <div class="col-sm-10">
                      <input autocomplete="off" type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" placeholder="ID Pelanggan">
                    </div>
                  </div>

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
                        <label  class="col-sm-2 control-label">Pembatas Daya</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="pembatas_daya" name="pembatas_daya" placeholder="Pembatas Daya">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Permasalahan</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="permasalahan" name="permasalahan">
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
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Permasalahan Lain</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="permasalahan_lain" name="permasalahan_lain" placeholder="Permasalahan Lain">
                        </div>
                    </div>

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
                            <select class="form-control" id="perbaikan" name="perbaikan">
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
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Perbaikan Lain</label>
                        <div class="col-sm-10">
                            <input autocomplete="off" type="text" class="form-control" id="perbaikan_lain" name="perbaikan_lain" placeholder="Perbaikan Lain">
                        </div>
                    </div>

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
            <h4 class="modal-title" id="myModalLabel">Cabang</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Nomor Meter</label>
                        <div class="col-sm-8" id="no_meter_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">ID Pelanggan</label>
                        <div class="col-sm-8" id="id_pelanggan_info"></div>
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
      
    <!-- Default box -->
    <div class="box">        
        <div class="box-header">
          <h3 class="box-title">
		  <?php if ($this->session->userdata("39insert")=="1"){?>
              <button type="button" class="btn btn-primary" id="btnNew" data-toggle="modal" data-target="#myModal">New</button>
			<?php }?>
           
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
              <th>Nomor Meter</th>
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
                        <td class="id_pelanggan"><?php echo $row->id_pelanggan; ?></td>
                        <td class="no_meter"><?php echo $row->no_meter;?></td>
                        <td class="no_lapor"><?php echo $row->no_lapor;?></td>
                        <td class="nama_pelapor"><?php echo $row->nama_pelapor;?></td>

                        <input type="hidden" class="kode_gangguan" value="<?php echo $row->kode_gangguan;?>">
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
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-sucess").slideUp(500);
    });
    $(".btnSave").click(function (){ 
        $('#form-horizontal').submit(function () {
            return false;
           });
    });
	 $("#btnNew").click(function (){ 
		$("#action").val("add");
         $("#kode_gangguan").val("");
         $("#id_pelanggan").val("");
         $("#no_meter").val("");
         $("#no_lapor").val("");
         $("#nama_pelapor").val("");
         $("#no_hp").val("");
         $("#pembatas_daya").val("");
         $("#permasalahan").val("");
         $("#keterangan").text("");
         $("#kondisi").val("");
         $("#tang_ampere").val("");
         $("#perbaikan").val("");
         $("#nama_petugas1").val("");
         $("#nama_petugas2").val("");
    });
    $('#datatable').on('click', '[id^=btnEdit]', function() {
        var $item = $(this).closest("tr");     
        $("#kode_gangguan").val($item.find(".kode_gangguan").val());
        $("#id_pelanggan").val($item.find(".id_pelanggan").text());
        $("#no_meter").val($item.find(".no_meter").text());
        $("#no_lapor").val($item.find(".no_lapor").text());
        $("#nama_pelapor").val($item.find(".nama_pelapor").text());
        $("#no_hp").val($item.find(".no_hp").val());
        $("#pembatas_daya").val($item.find(".pembatas_daya").val());
        $("#permasalahan").val($item.find(".permasalahan").val());
        $("#keterangan").text($item.find(".keterangan").val());
        $("#kondisi").val($item.find(".kondisi").val());
        $("#tang_ampere").val($item.find(".tang_ampere").val());
        $("#perbaikan").val($item.find(".perbaikan").val());
        $("#nama_petugas1").val($item.find(".nama_petugas1").val());
        $("#nama_petugas2").val($item.find(".nama_petugas2").val());
        $("#action").val("edit");
    });
	$('#datatable').on('click', '[id^=btnInfo]', function() {
        var $item = $(this).closest("tr");
        $("#id_pelanggan_info").text($item.find(".id_pelanggan").text());
        $("#no_meter_info").text($item.find(".no_meter").text());
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
	$('#datatable').on('click', '[id^=btnDelete]', function() {
        var $item = $(this).closest("tr");
        $("#wo_gangguan_delete").text('Yakin menghapus data WO Gangguan dari '+ $item.find(".nama_pelapor").text() + ' nomor meter ' + $item.find(".no_meter").text() + ' ?');
		$("#kode_gangguan_delete").val($item.find("input[id$='kode_gangguan']:hidden:first").val());
    });
  });
</script>   
<?php
$this->load->view('template/endbody');
?>