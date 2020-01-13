<?php 
$this->load->view('template/head');
$this->load->view('template/side');
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>List User Login</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gear"></i> Pengaturan</a></li>
        <li class="active">User</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('User_ctrl/update')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">User</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
				
				 <?php
				  if (($_SESSION['kode_cabang'] == 1) || ($_SESSION['kode_cabang'] == 2))
				  {
				  ?>
				   <div class="form-group">
                    <label  class="col-sm-2 control-label">Cabang</label>
                    <div class="col-sm-10">
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
                    <label  class="col-sm-2 control-label">Hak Akses</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="kode_akses" name="kode_akses">
                          <?php foreach ($akses as $rowa):?>
                          <option value="<?php echo $rowa->kode_akses;?>"><?php echo $rowa->hak_akses;?></option>
                          <?php endforeach?>
                      </select>
                    </div>
                  </div>
				  
                 
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input required autocomplete=off type="text" class="form-control" id="nama" name="nama" placeholder="Nama" >
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input required autocomplete=off type="text" class="form-control" id="username" name="username" placeholder="username">
                    </div>
                  </div>
				  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                  </div>
                  
                    
                </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="action" id="action" value="add">
            <input type="hidden" name="kode_user" id="kode_user" value="">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btnSave">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div> 

    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- form start -->
          <form class="form-horizontal" action="<?php echo site_url('User_ctrl/update')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">User</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                 				  
				  <div class="form-group">
                    <label  class="col-sm-2 control-label">Cabang</label>
                    <div class="col-sm-10" id="cabang_info"></div>
                  </div>
				  
				  <div class="form-group">
                    <label  class="col-sm-2 control-label">Hak Akses</label>
                    <div class="col-sm-10" id="hak_akses_info"></div>
                  </div>
				  
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10" id="nama_info">
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10" id="username_info"></div>
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
          <form class="form-horizontal" action="<?php echo site_url('User_ctrl/inactive')?>" method="post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">User</h4>
          </div>
          <div class="modal-body">              
                <div class="box-body">
                    <div id="username_delete"></div>
                </div>
          </div>
          <div class="modal-footer">
			<input type="hidden" id="kode_user_delete" name="kode_user_delete">
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
		  <?php if ($this->session->userdata("6insert")=="1"){?>
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
              <th>No</th>
              <th>Username</th>
              <th>Cabang</th>
              <th>Akses</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php 
				$no=1;
				foreach ($data as $row):
				?>
                    <tr>
						<td class="no"><?php echo $no?></td>
                        <td class="username">
                            <?php echo $row->username; ?>
                            <input type="hidden" id="kode_user" value="<?php echo $row->kode_user;?>">
                            <input type="hidden" id="password" value="<?php echo $row->password;?>">
                        </td>
                        <td class="nama_cabang">
                            <?php echo $row->nama_cabang; ?>
                            <input type="hidden" id="kode_cabang" value="<?php echo $row->kode_cabang;?>">
                        </td>
                        <td class="hak_akses">
                            <?php echo $row->hak_akses; ?>
                            <input type="hidden" id="kode_akses" value="<?php echo $row->kode_akses;?>">
                        </td>
                        <td class="nama"><?php echo $row->nama;?></td>
                        <td align="center">
						
							 <a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='View'>
                                <button class='btn btn-info btn-xs btnEdit' data-title='View' data-toggle='modal' data-target='#infoModal' id="btnView">
                                <span class='glyphicon glyphicon-ok'></span>
                                </button>
                            </a>
							  <?php if ($this->session->userdata("6edit")=="1"){?>
								<a href='#'>
                                <span data-placement='top' data-toggle='tooltip' title='Edit'>
                                <button class='btn btn-warning btn-xs btnEdit' data-title='Edit' data-toggle='modal' data-target='#myModal' id="btnEdit">
                                <span class='glyphicon glyphicon-pencil'></span>
                                </button>
								</a>
								<?php }?>

                            
							<?php if ($this->session->userdata("6delete")=="1"){?>
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
        $("#kode_user").val("");
        $("#username").val("");
        $("#nama").val("");
        $("#password").val("");
    });
    $('#datatable').on('click', '[id^=btnEdit]', function() {
        var $item = $(this).closest("tr");     
        $("#kode_user").val($item.find("input[id$='kode_user']:hidden:first").val());
        $("#kode_akses").val($item.find("input[id$='kode_akses']:hidden:first").val());
        $("#kode_cabang").val($item.find("input[id$='kode_cabang']:hidden:first").val());
        $("#username").val($.trim($item.find(".username").text()));
        $("#nama").val($item.find(".nama").text());
        $("#password").val($item.find("input[id$='password']:hidden:first").val());
        $("#action").val("edit");
    });
	
    $('#datatable').on('click', '[id^=btnView]', function() {
        var $item = $(this).closest("tr");     
		//console.log($item.find(".nama").text());
		//console.log($item.find(".hak_akses").text());
        $("#cabang_info").text($item.find(".nama_cabang").text());
        $("#hak_akses_info").text($item.find(".hak_akses").text());
        $("#username_info").text($item.find(".username").text());
        $("#nama_info").text($item.find(".nama").text());
    });
	$('#datatable').on('click', '[id^=btnDelete]', function() {
        var $item = $(this).closest("tr");
        $("#username_delete").text('Are You Sure to Delete User "'+$item.find(".username").text() + '" ?');
		$("#kode_user_delete").val($item.find("input[id$='kode_user']:hidden:first").val());
    });
  });
</script>   
<?php
$this->load->view('template/endbody');
?>