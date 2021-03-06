

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
   //lay san pham theo id
   $id = $_GET["id"];
   $query="SELECT s.ID,s.Ten,s.Gia,s.HinhAnh,s.Mota, n.Ten as Tennhasx,s.Manhasx
   from sanpham s 
   LEFT JOIN nhaxuatban n on n.ID = s.Manhasx
	WHERE  s.id =".$id;
   $result = $conn->query($query);
$row = $result->fetch_assoc();

?>
        <section class="content-header">
          <h1>
            Chi tiết
            <small>Sách</small>
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12" >
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Chi tiết Sách</h3>
                </div>
                <form class="form-horizontal" >
                  <div class="box-body" >
                    <div class="form-group">
                      <label  class="col-sm-2">Tên:</label>
                      <div class="col-sm-5">
                      <p><?php echo $row["Ten"] ?></p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2">Hình ảnh:</label>  
                      <div class="col-sm-2">
                      <p><img src="../images/<?php echo $row["HinhAnh"]?>" style="width:300px;height:400px"></p>
                      </div>        
                    </div>
                    <div class="form-group">
                    <label  class="col-sm-2 ">Nhà xuất bản:</label>
                    <div class="col-sm-5">
                      <p><?php echo $row["Tennhasx"] ?></p>
                      </div> 
                    </div>
                    <div class="form-group">
                    <label  class="col-sm-2 ">Giá:</label>  
                    <div class="col-sm-5">
                      <p><?php echo $row["Gia"] ?>.000 VNĐ</p>
                      </div>        
                    </div>
                  <div class="form-group">
                    <label  class="col-sm-2 ">Mô tả: </label>
                    <div class="col-sm-5">
                      <p><?php echo $row["Mota"] ?></p>
                      </div> 
                    
                  </div>
                  </div>
                  <div class="box-footer">
                  <a href="qlysanpham.php"><button type="button" name="cancel" class="btn btn-default">Quay lại</button></a>
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
  
      <div class="control-sidebar-bg">
      </div>
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
    <script src="dist/js/demo.js"></script>
  </body>
</html>


