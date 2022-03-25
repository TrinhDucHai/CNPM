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
   //lay san pham theo id
   $id = $_GET["id"];
   $query="SELECT s.ID,s.Ten,s.Gia,s.HinhAnh,s.tacgia,s.Mota, n.Ten as Tennhasx,s.Manhasx
   from sanpham s 
   LEFT JOIN nhaxuatban n on n.ID = s.Manhasx
	WHERE  s.id =".$id;
   $result = $conn->query($query);
$row = $result->fetch_assoc();

?>
        <section class="content-header">
          <h1>
            Sửa
            <small>Sách</small>
          </h1>
        </section>
        <section class="content">
          <div class="row">

            <div class="col-md-12">
              <div class="box box-info">
                <form class="form-horizontal"  method="POST" action="<?php include 'xulysuasp.php'?>" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Tên</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="<?php echo $row["Ten"] ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Hình ảnh</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="hinhanh" value="<?php echo $row["HinhAnh"] ?>">
                      </div>
                      </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Tác giả</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="tacgia" value="<?php echo $row["tacgia"] ?>" required>
                      </div>
                    </div>
                      <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Ảnh hiện tại:   </label>
                        <div class="col-sm-10">
                      <img src="../images/<?php echo $row["HinhAnh"]?>" style="width:300px;height:400px">
                        </div>
                      </div>
                      <input type="hidden" class="form-control" name="anh" value="<?php echo $row["HinhAnh"] ?>">
                      <input type="hidden" class="form-control" name="id" value="<?php echo $row["ID"] ?>">
                    </div>
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nhà xuất bản</label>
                    <div class="col-sm-10">
                    <select class="form-control select2" style="width: 100%;" name="manhasx">
                      <option selected="selected" value="<?php echo $row["Manhasx"] ?>"><?php echo $row["Tennhasx"] ?></option>
                      <?php
                         require '../inc/config.php';
                         $sqls="SELECT ID,Ten from nhaxuatban where ID !=".$row["Manhasx"] ;
                         $results = $conn->query($sqls); 
                         if ($results->num_rows > 0) {

                          while($rows = $results->fetch_assoc()) {
                      ?>
                        <option value="<?php echo $rows["ID"] ?>"><?php echo $rows["Ten"] ?></option>
                      <?php 
                          }
                        }
                      ?>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Giá</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"  name="gia" required value="<?php echo $row["Gia"] ?>">
                    </div>
                    </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-10">
                    <textarea id="editor1" name="editor1" name="editor1"  rows="10" cols="80">
                    <?php echo $row["Mota"] ?>
                    </textarea>
                    </div>
                  </div>
               
                  <div class="box-footer">
                  <a href="qlysanpham.php"><button type="button" name="cancel" class="btn btn-default">Cancel</button></a>
                    <button type="submit" name="Edit" class="btn btn-info pull-right">Edit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>  
        </section>
           
      <?php 
      include "footer.php";
     ?>

      </div>
  
      <div class="control-sidebar-bg"></div>
    </div>

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

        CKEDITOR.replace('editor1');

        $(".textarea").wysihtml5();
      });
    </script>

    <script src="dist/js/demo.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>

