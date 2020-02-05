<?php 
$this->load->view('template/head');
$this->load->view('template/side');
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pelanggan
        <small>List Pelanggan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gear"></i> Master</a></li>
        <li class="active">Pelanggan</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('Pelanggan_ctrl/update')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Pelanggan</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">ID Pelanggan</label>
                        <div class="col-sm-10">
                            <input required autocomplete="off" type="text" class="form-control" id="kode_pelanggan" name="kode_pelanggan" placeholder="ID Pelanggan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Nomor Meter</label>
                        <div class="col-sm-10">
                            <input required autocomplete="off" type="text" class="form-control" id="no_meter" name="no_meter" placeholder="Nomor Meter">
                        </div>
                    </div>
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Pelanggan</label>
                    <div class="col-sm-10">
                      <input required autocomplete="off" type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan">
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input required autocomplete="off" type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" placeholder="Alamat">
                    </div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <input required autocomplete="off" type="text" class="form-control" id="telp_pelanggan" name="telp_pelanggan" placeholder="Nomor Telepon">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Tarif</label>
                    <div class="col-sm-10">
                      <input required autocomplete="off" type="text" class="form-control" id="tarif" name="tarif" placeholder="Tarif">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label  class="col-sm-2 control-label">Daya</label>
                    <div class="col-sm-10">
                      <input required autocomplete="off" type="text" class="form-control" id="daya" name="daya" placeholder="Daya">
                    </div>
                  </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Jenis Pelanggan</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="jenis_pelanggan" name="jenis_pelanggan">
                                <option value="1">Prabayar</option>
                                <option value="2">Pascabayar</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Longitude</label>
                        <div class="col-sm-10">
                            <input required autocomplete="off" type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Latitude</label>
                        <div class="col-sm-10">
                            <input required autocomplete="off" type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude">
                        </div>
                    </div>
                    
                </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="action" id="action" value="add">
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
            <h4 class="modal-title" id="myModalLabel">Pelanggan</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">

                    <div class="form-group">
                        <label  class="col-sm-4 control-label" for="no_meter_info">ID Pelanggan</label>
                        <div class="col-sm-8" id="kode_pelanggan_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label" for="no_meter_info">Nomor Meter</label>
                        <div class="col-sm-8" id="no_meter_info"></div>
                    </div>

                  <div class="form-group">
                    <label  class="col-sm-4 control-label">Nama Pelanggan</label>
                    <div class="col-sm-8" id="nama_pelanggan_info"></div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-4 control-label">Alamat Pelanggan</label>
                    <div class="col-sm-8" id="alamat_pelanggan_info"></div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-4 control-label">Nomer Telepon</label>
                    <div class="col-sm-8" id="telp_pelanggan_info"></div>
                  </div>

                  <div class="form-group">
                    <label  class="col-sm-4 control-label">Tarif</label>
					<div class="col-sm-8" id="tarif_info"></div>
                  </div>

				  <div class="form-group">
                    <label  class="col-sm-4 control-label">daya</label>
                    <div class="col-sm-8" id="daya_info"></div>
                  </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Jenis Pelanggan</label>
                        <div class="col-sm-8" id="jenis_pelanggan_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Longitude</label>
                        <div class="col-sm-8" id="longitude_info"></div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-4 control-label">Latitude</label>
                        <div class="col-sm-8" id="latitude_info"></div>
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
          <form class="form-horizontal" action="<?php echo site_url('Pelanggan_ctrl/inactive')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Pelanggan</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                    <div id="nama_pelanggan_delete"></div>
                </div>
          </div>
          <div class="modal-footer">
			<input type="hidden" id="kode_pelanggan_delete" name="kode_pelanggan_delete">
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
		  <?php if ($this->session->userdata("57insert")=="1"){?>
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
              <th>Nama</th>
              <th>Alamat</th>
              <th>Jenis Pelanggan</th>
              <th>Action</th>
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
                        <td class="no_meter"><?php echo $row->no_meter; ?></td>
                        <td class="nama_pelanggan"><?php echo $row->nama_pelanggan; ?></td>
                        <td class="alamat_pelanggan"><?php echo $row->alamat_pelanggan; ?></td>
                        <td><?php echo $row->jenis_pelanggan=="1"? "Prabayar" : "Pascabayar";?></td>

                        <input type="hidden" class="telp_pelanggan" value="<?php echo $row->telp_pelanggan;?>">
                        <input type="hidden" class="jenis_pelanggan" value="<?php echo $row->jenis_pelanggan;?>">
                        <input type="hidden" class="tarif" value="<?php echo $row->tarif;?>">
                        <input type="hidden" class="daya" value="<?php echo $row->daya;?>">

                        <?php if ($row->long_lat != ""){
                        $exp = explode(",", $row->long_lat); ?>
                        <input type="hidden" class="longitude" value="<?php echo $exp[0]; ?>">
                        <input type="hidden" class="latitude" value="<?php echo $exp[1]; ?>">
                        <?php }?>

                        <td align="center">
						 <?php if ($this->session->userdata("57view")=="1"){?>
							<a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='Info'>
                                <button class='btn btn-info btn-xs btnInfo' data-title='Info' data-toggle='modal' data-target='#infoModal' id="btnInfo">
                                <span class='glyphicon glyphicon-ok'></span>
                                </button>
                            </a>
						<?php }?>
           
							
							 <?php if ($this->session->userdata("57edit")=="1"){?>
                            <a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='Edit'>
                                <button class='btn btn-warning btn-xs btnEdit' data-title='Edit' data-toggle='modal' data-target='#myModal' id="btnEdit">
                                <span class='glyphicon glyphicon-pencil'></span>
                                </button>
                            </a>
						<?php }?>
							<?php if ($this->session->userdata("57delete")=="1"){?>
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
        $("#kode_pelanggan").removeAttr('readonly');
        $("#kode_pelanggan").val("");
        $("#no_meter").val("");
        $("#nama_pelanggan").val("");
        $("#alamat_pelanggan").val("");
        $("#telp_pelanggan").val("");
        $("#tarif").val("");
        $("#daya").val("");
        $("#jenis_pelanggan").val("");
        $("#longitude").val("");
        $("#latitude").val("");
    });
    $('#datatable').on('click', '[id^=btnEdit]', function() {
        var $item = $(this).closest("tr");     
        $("#kode_pelanggan").attr('readonly', 'true');
        $("#kode_pelanggan").val($item.find(".kode_pelanggan").text());
        $("#no_meter").val($.trim($item.find(".no_meter").text()));
        $("#nama_pelanggan").val($.trim($item.find(".nama_pelanggan").text()));
        $("#alamat_pelanggan").val($.trim($item.find(".alamat_pelanggan").text()));
        $("#telp_pelanggan").val($.trim($item.find(".telp_pelanggan").val()));
        $("#tarif").val($.trim($item.find(".tarif").val()));
        $("#daya").val($.trim($item.find(".daya").val()));
        $("#jenis_pelanggan").val($.trim($item.find(".jenis_pelanggan").val()));
        $("#longitude").val($.trim($item.find(".longitude").val()));
        $("#latitude").val($.trim($item.find(".latitude").val()));
        $("#action").val("edit");
    });
	$('#datatable').on('click', '[id^=btnInfo]', function() {
        var $item = $(this).closest("tr");
        $("#kode_pelanggan_info").text($.trim($item.find(".kode_pelanggan").text()));
        $("#no_meter_info").text($.trim($item.find(".no_meter").text()));
        $("#nama_pelanggan_info").text($.trim($item.find(".nama_pelanggan").text()));
        $("#alamat_pelanggan_info").text($.trim($item.find(".alamat_pelanggan").text()));
        $("#telp_pelanggan_info").text($.trim($item.find(".telp_pelanggan").val()));
        $("#tarif_info").text($.trim($item.find(".tarif").val()));
        $("#daya_info").text($.trim($item.find(".daya").val()));
        $("#jenis_pelanggan_info").text($.trim($item.find(".jenis_pelanggan").text()));
        $("#longitude_info").text($.trim($item.find(".longitude").val()));
        $("#latitude_info").text($.trim($item.find(".latitude").val()));
    });
	$('#datatable').on('click', '[id^=btnDelete]', function() {
        var $item = $(this).closest("tr");
        $("#nama_pelanggan_delete").text('Are You Sure to Delete Pelanggan "'+$item.find(".nama_pelanggan").text() + '" ?');
		$("#kode_pelanggan_delete").val($.trim($item.find(".kode_pelanggan").text()));
    });
  });
</script>   
<?php
$this->load->view('template/endbody');
?>