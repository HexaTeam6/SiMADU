<?php 
$this->load->view('template/head');
$this->load->view('template/side');
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hak Akses
        <small>List Hak Akses</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gear"></i> Pengaturan</a></li>
        <li class="active">Hak Akses</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('Hak_akses_ctrl/update')?>" method="post">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Hak Akses</h4>
			  </div>
			  <div class="modal-body">              
					<div class="box-body">
					  <!-- ISI & TAMPILAN MODAL BOX-->
					   <?php
						  if (($_SESSION['kode_cabang'] == 1) || ($_SESSION['kode_cabang'] == 2))
						  {
						  ?>
						   <div class="form-group">
							<label  class="col-sm-4 control-label">Cabang</label>
							<div class="col-sm-8">
							  <select class="form-control" id="kode_cabang" name="kode_cabang">
								  <?php foreach ($cabang as $rowc):?>
								  <option value="<?php echo $rowc->kode_cabang;?>"><?php echo $rowc->nama_cabang;?></option>
								  <?php endforeach?>
							  </select>
							</div>
						  </div>
						  <?php
						  }
						  else
						  {
							$kode_cabang = $_SESSION['kode_cabang'] ;
						  ?>
						  
							   <input type="hidden" class="form-control" id="kode_cabang" name="kode_cabang" value="<?php echo $kode_cabang ;?>">
						 
						  <?php
						  }
						  ?>
				  
					  <div class="form-group">
						<label  class="col-sm-4 control-label">Hak Akses</label>
						<div class="col-sm-8">
						  <input required autocomplete =off type="text" class="form-control" id="hak_akses" name="hak_akses" placeholder="Nama Hak Akses">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label  class="col-sm-4 control-label">Keterangan</label>
						<div class="col-sm-8">
						  <input  autocomplete =off type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
						</div>
					  </div>
										  
					</div>
			  </div>
			  <div class="modal-footer">
				<input type="hidden" name="action" id="action" value="add">
				<input type="hidden" name="kode_akses" id="kode_akses" value="">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btnSave">Save changes</button>
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
          <form class="form-horizontal" action="<?php echo site_url('Hak_akses_ctrl/inactive')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Hak Akses</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                    <div id="hak_akses_delete"></div>
                </div>
          </div>
          <div class="modal-footer">
			<input type="hidden" id="kode_akses_delete" name="kode_akses_delete">
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
		  <?php if ($this->session->userdata("4insert")=="1"){?>
             <button type="button" id="btnNew" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New</button>
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
              <th>Hak Akses</th>
              <th>Keterangan</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php 
					$no = 1;
					foreach ($data as $row):
				?>
                    <tr>
                        
                        <td class="no"><?php echo $no;?></td>
						
						 <td class="kode_cabang">
                            <?php echo $row->nama_cabang; ?>
                            <input type="hidden" id="kode_cabang" value="<?php echo $row->kode_cabang;?>">
                        </td>
						
                        <td class="hak_akses">
						<?php echo $row->hak_akses;?>
						<input type="hidden" id="kode_akses" value="<?php echo $row->kode_akses;?>">
						</td>
						
						 <td class="keterangan"><?php echo $row->keterangan;?></td>
						
                        <td align=center>
<!--                             --><?php //if ($this->session->userdata("9edit")=="1"){?>
								<a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='Edit'>
                                <button class='btn btn-warning btn-xs btnEdit' data-title='Edit' data-toggle='modal' data-target='#myModal' id="btnEdit">
                                <span class='glyphicon glyphicon-pencil'></span>
                                </button>
                            </a>
<!--							--><?php //}?>
<!--						    --><?php //if ($this->session->userdata("9delete")=="1"){?>
							<a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='Delete'>
                                <button class='btn btn-danger btn-xs btnDelete' data-title='Delete' data-toggle='modal' data-target='#deleteModal' id="btnDelete">
                                <span class='glyphicon glyphicon-remove'></span>
                                </button>
                            </a>
<!--							--><?php //}?>
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
        $("#kode_akses").val("");
        $("#hak_akses").val("");
        $("#keterangan").val("");
    });
    $('#datatable').on('click', '[id^=btnEdit]', function() {
        var $item = $(this).closest("tr");     
        $("#kode_akses").val($item.find("input[id$='kode_akses']:hidden:first").val());
        $("#kode_cabang").val($item.find("input[id$='kode_cabang']:hidden:first").val());
        $("#hak_akses").val($.trim($item.find(".hak_akses").text()));
        $("#keterangan").val($.trim($item.find(".keterangan").text()));
        $("#action").val("edit");
    });
	$('#datatable').on('click', '[id^=btnDelete]', function() {
        var $item = $(this).closest("tr");
        $("#hak_akses_delete").text('Are You Sure to Delete Hak Akses "'+$item.find(".hak_akses").text() + '" ?');
		$("#kode_akses_delete").val($item.find("input[id$='kode_akses']:hidden:first").val());
    });
  });
</script>   
<?php
$this->load->view('template/endbody');
?>