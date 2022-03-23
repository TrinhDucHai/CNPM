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
   $query="SELECT HoTen,DienThoai from user 
	WHERE  email = ".$email;
   $result = $conn->query($query);
$row = $result->fetch_assoc();

?>
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
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
                                        <input type="text" class="form-control" name="email" value="<?php echo $row["email"] ?>" required>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="qlysanpham.php"><button type="button" name="cancel" class="btn btn-default">Cancel</button></a>
                                    <button type="submit" name="Edit" class="btn btn-info pull-right">Edit</button>
                                </div>
                            </div>
                        </form>
        </section>