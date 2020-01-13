<?php 
$this->load->view('template/head');
$this->load->view('template/side');
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cabang
        <small>List Cabang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gear"></i> Pengaturan</a></li>
        <li class="active">Cabang</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('Cabang_ctrl/update')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Cabang</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Cabang</label>
                    <div class="col-sm-10">
                      <input required autocomplete="off" type="text" class="form-control" id="nama_cabang" name="nama_cabang" placeholder="Nama Cabang">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input required autocomplete="off" type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Kota</label>
                    <div class="col-sm-10">
                      <input required autocomplete="off" type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label  class="col-sm-2 control-label">Telepon</label>
                    <div class="col-sm-10">
                      <input required autocomplete="off" type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon">
                    </div>
                  </div>
                    
                </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="action" id="action" value="add">
            <input type="hidden" name="kode_cabang" id="kode_cabang" value="">
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
          <form class="form-horizontal" action="<?php echo site_url('Cabang_ctrl/update')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Cabang</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Cabang</label>
                    <div class="col-sm-10" id="nama_cabang_info"></div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10" id="alamat_info"></div>
                  </div>
                  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Kota</label>
					<div class="col-sm-10" id="kota_info"></div>
                  </div>
				  
				  <div class="form-group">
                    <label  class="col-sm-2 control-label">Telepon</label>
                    <div class="col-sm-10" id="telepon_info"></div>
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
          <form class="form-horizontal" action="<?php echo site_url('Cabang_ctrl/inactive')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Cabang</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                    <div id="nama_cabang_delete"></div>
                </div>
          </div>
          <div class="modal-footer">
			<input type="hidden" id="kode_cabang_delete" name="kode_cabang_delete">
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
		  <?php if ($this->session->userdata("3insert")=="1"){?>
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
              <th>Cabang</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Telepon</th>
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
                        <td class="nama_cabang">
                            <?php echo $row->nama_cabang; ?>
                            <input type="hidden" id="kode_cabang" value="<?php echo $row->kode_cabang;?>">
                        </td>
                        
                        <td class="alamat"><?php echo $row->alamat;?></td>
                        <td class="kota"><?php echo $row->kota;?></td>
                        <td class="telepon"><?php echo $row->telepon;?></td>
                        
                        <td align="center">
						 <?php if ($this->session->userdata("3view")=="1"){?>
							<a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='Info'>
                                <button class='btn btn-info btn-xs btnInfo' data-title='Info' data-toggle='modal' data-target='#infoModal' id="btnInfo">
                                <span class='glyphicon glyphicon-ok'></span>
                                </button>
                            </a>
						<?php }?>
           
							
							 <?php if ($this->session->userdata("3edit")=="1"){?>
                            <a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='Edit'>
                                <button class='btn btn-warning btn-xs btnEdit' data-title='Edit' data-toggle='modal' data-target='#myModal' id="btnEdit">
                                <span class='glyphicon glyphicon-pencil'></span>
                                </button>
                            </a>
						<?php }?>
							<?php if ($this->session->userdata("3delete")=="1"){?>
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
        $("#kode_cabang").val("");
        $("#nama_cabang").val("");
        $("#alamat").val("");
        $("#kota").val("");
        $("#telepon").val("");
    });
    $('#datatable').on('click', '[id^=btnEdit]', function() {
        var $item = $(this).closest("tr");     
        $("#kode_cabang").val($item.find("input[id$='kode_cabang']:hidden:first").val());
        $("#nama_cabang").val($.trim($item.find(".nama_cabang").text()));
        $("#alamat").val($.trim($item.find(".alamat").text()));
        $("#kota").val($.trim($item.find(".kota").text()));
        $("#telepon").val($.trim($item.find(".telepon").text()));
        $("#action").val("edit");
    });
	$('#datatable').on('click', '[id^=btnInfo]', function() {
        var $item = $(this).closest("tr");
        $("#nama_cabang_info").text($item.find(".nama_cabang").text());
        $("#alamat_info").text($item.find(".alamat").text());
        $("#kota_info").text($item.find(".kota").text());
        $("#telepon_info").text($item.find(".telepon").text());
    });
	$('#datatable').on('click', '[id^=btnDelete]', function() {
        var $item = $(this).closest("tr");
        $("#nama_cabang_delete").text('Are You Sure to Delete Cabang "'+$item.find(".nama_cabang").text() + '" ?');
		$("#kode_cabang_delete").val($item.find("input[id$='kode_cabang']:hidden:first").val());
    });
  });
</script>   
<?php
$this->load->view('template/endbody');
?>