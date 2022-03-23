<?php
ob_start();
?>
<?php 
include "head.php";

?>
 <body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">
   <?php 
include "Header.php";
?> 
   <?php 
include "aside.php";
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Thêm
            <small>Khách hàng</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->

            <!-- right column -->
  
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Thêm Khách hàng</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="<?php include 'xulyluukhachhang.php' ?>">
                  <div class="box-body">
                    <div class="form-group">
                    <label for="inputEmail3"  class="col-sm-2 control-label">Tên Khách hàng</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3"  class="col-sm-2 control-label">Email Khách hàng</label>
                      <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3"  class="col-sm-2 control-label">Mật khẩu</label>
                      <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3"  class="col-sm-2 control-label">Số điện thoại</label>
                      <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                  <a href="qlykhachhang.php"><button type="button" name="cancel" class="btn btn-default">Hủy</button></a>
                    <button type="submit" name="create" class="btn btn-info pull-right">Lưu lại</button>
                  </div>
                </form>
              </div>
         
            </div>
          </div>   
        </section>
      </div>
      <?php 
      include "footer.php";
     ?>
  
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>
