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
    <div class="content-wrapper">
    <?php
   require '../inc/config.php';
   $email = $_GET["email"];
   $query="SELECT HoTen,DienThoai,email from user  
	WHERE email LIKE '". $email ."';";
   $result = $conn->query($query);
$row = $result->fetch_assoc();

?>
        <section class="content-header">
            <ol class="breadcrumb">
            </ol>
        </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                        <h3 class="box-title">Sửa khách hàng</h3>
                    </div>
                        <form class="form-horizontal"  method="POST" action="<?php include 'xulysuauser.php'?>" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" value="<?php echo $row["email"] ?>" required disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Họ Tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="hoten" value="<?php echo $row["HoTen"] ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Số điện thoại</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="dienthoai" value="<?php echo $row["DienThoai"] ?>" required>
                                    </div>
                                </div>
                                
                                <div class="box-footer">
                                    <a href="qlykhachhang.php"><button type="button" name="cancel" class="btn btn-default">Cancel</button></a>
                                    <button type="submit" name="Edit" class="btn btn-info pull-right">Edit</button>
                                </div>
                            </div>
                        </form>
        </section>
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script>
      $(function () {

        CKEDITOR.replace('editor1');

        $(".textarea").wysihtml5();
      });
    </script>

    <script src="dist/js/demo.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>