<?php 
$this->load->view('template/head');
$this->load->view('template/side');
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Password
        <small>User Information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Pengaturan</a></li>
        <li class="active">Change Password</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
      
    <!-- Default box -->
    <div class="box">        
        <div class="box-header">          
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
          <?php foreach ($data as $row):?>
          <form class="form-horizontal" action="<?php echo site_url('Change_password_ctrl/update')?>" method="post" id="form">
          
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
                    <div class="col-sm-10">
                      <input readonly type="text" class="form-control" id="username" name="username" placeholder="User Name" value="<?php echo $row->username;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password" value="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Retype New Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="newpassword2" name="newpassword2" placeholder="Retype New Password" value="" required>
                    </div>
                  </div>
          </div>
          
            <input type="hidden" name="action" id="action" value="update">
            <input type="hidden" name="kode_user" id="kode_user" value="<?php echo $row->kode_user;?>">
            <button type="submit" class="btn btn-primary btnSave">Save changes</button> 
          </form>
          <?php endforeach?>
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
    $('#form').submit(function () {
        // Check if empty of not
        if ($('#newpassword').val() != $('#newpassword2').val()) {
            alert('New password and retype password must be same.');
            return false;
        }else{
          return true;
        }
    });
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-sucess").slideUp(500);
    });
    $(".btnSave").click(function (){ 
        $('#form-horizontal').submit(function () {
            return false;
           });
    });
  });
</script>   
<?php
$this->load->view('template/endbody');
?>