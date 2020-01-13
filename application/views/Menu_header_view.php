<?php 
$this->load->view('template/head');
$this->load->view('template/side');
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu Header
        <small>List Menu Header</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gear"></i> Pengaturan</a></li>
        <li class="active">Menu Header</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('Menu_header_ctrl/update')?>" method="post">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Menu Header</h4>
			  </div>
			  <div class="modal-body">              
					<div class="box-body">
					  <!-- ISI & TAMPILAN MODAL BOX-->
					  <div class="form-group">
						<label  class="col-sm-4 control-label">Nama Menu Header</label>
						<div class="col-sm-8">
						  <input required autocomplete =off type="text" class="form-control" id="menu_header" name="menu_header" placeholder="Nama Menu Header">
						</div>
					  </div>
										  
					</div>
			  </div>
			  <div class="modal-footer">
				<input type="hidden" name="action" id="action" value="add">
				<input type="hidden" name="kode_menu_header" id="kode_menu_header" value="">
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
          <form class="form-horizontal" action="<?php echo site_url('Menu_header_ctrl/inactive')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Menu Header</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                    <div id="menu_header_delete"></div>
                </div>
          </div>
          <div class="modal-footer">
			<input type="hidden" id="kode_menu_header_delete" name="kode_menu_header_delete">
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
		  
		  <?php if ($this->session->userdata("1insert")=="1"){?>
			<button type="button" class="btn btn-primary" data-toggle="modal" id="btnNew" data-target="#myModal">New</button>
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
              <th>Menu Header</th>
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
                        <td class="menu_header">
						<?php echo $row->menu_header;?>
						<input type="hidden" id="kode_menu_header" value="<?php echo $row->kode_menu_header;?>">
						</td>
                        <td align=center>
						<?php if ($this->session->userdata("1edit")=="1"){?>
								<a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='Edit'>
                                <button class='btn btn-warning btn-xs btnEdit' data-title='Edit' data-toggle='modal' data-target='#myModal' id="btnEdit">
                                <span class='glyphicon glyphicon-pencil'></span>
                                </button>
                            </a>
						<?php }?>
                            
							<?php if ($this->session->userdata("1delete")=="1"){?>
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
        $("#kode_menu_header").val("");
        $("#menu_header").val("");
    });
    $('#datatable').on('click', '[id^=btnEdit]', function() {
        var $item = $(this).closest("tr");     
        $("#kode_menu_header").val($item.find("input[id$='kode_menu_header']:hidden:first").val());
        $("#menu_header").val($.trim($item.find(".menu_header").text()));
        $("#action").val("edit");
    });
	$('#datatable').on('click', '[id^=btnDelete]', function() {
        var $item = $(this).closest("tr");
        $("#menu_header_delete").text('Are You Sure to Delete Menu Header "'+$item.find(".menu_header").text() + '" ?');
		$("#kode_menu_header_delete").val($item.find("input[id$='kode_menu_header']:hidden:first").val());
    });
  });
</script>   
<?php
$this->load->view('template/endbody');
?>