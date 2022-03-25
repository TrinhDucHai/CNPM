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
        <section class="content-header">
          <h1>
            Thêm
            <small>Sách</small>
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Thêm Sách</h3>
                </div>
                <form class="form-horizontal" method="POST" action="<?php include 'xulyluusp.php' ?>" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Tên</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="name" placeholder="Tên" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label" >Hình ảnh</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control"  placeholder="Chọn tiệp" name="hinhanh" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Tác giả</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="tacgia" placeholder="Tác giả" required>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label" >Nhà xuất bản</label>
                    <div class="col-sm-10">
                    <select class="form-control select2" style="width: 100%;" name="manhasx">
                    <option selected="selected" value="3">Chọn Nhà xuất bản</option>
                     <?php
                         require '../inc/config.php';
                         $sql="SELECT ID,Ten from nhaxuatban";
                         $result = $conn->query($sql); 
                         if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                      ?>
                      <option value="<?php echo $row["ID"] ?>"><?php echo $row["Ten"] ?></option>
                      <?php 
                          }
                        }
                      ?>
                    </select>
                    </div>
                    </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label" >Giá</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"  name="gia">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-10">
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            Nhập mô tả
                    </textarea>
                    </div>
                  </div>                 
                  <div class="box-footer">
                   <a href="qlysanpham.php"><button type="button" name="cancel" class="btn btn-default">Hủy</button></a>
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

        CKEDITOR.replace('editor1');

        $(".textarea").wysihtml5();
      });
    </script>

    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>