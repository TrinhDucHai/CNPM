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
   $sodh = $_GET["sodh"];
   $query="SELECT * from hoadon
	WHERE  sodh =".$sodh;
   $result = $conn->query($query);
$row = $result->fetch_assoc();

?>
        <section class="content-header">
          <h1>
            Thông tin
            <small>hóa đơn</small>
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-md-12" >
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title" style="text-align: center"> Thông tin hóa đơn</h3>
                </div>
                <form class="form-horizontal" >
                  <div class="box-body" >
                  <div class="form-group">
                      <label  class="col-sm-2">Số đơn hàng:</label>
                      <div class="col-sm-5">
                      <p><?php echo $row["sodh"] ?></p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2">Tên khách hàng:</label>
                      <div class="col-sm-5">
                      <p><?php echo $row["tenkh"] ?></p>
                      </div>
                    </div>
                    <div class="form-group">
                    <label  class="col-sm-2 ">Email khách hàng:</label>
                    <div class="col-sm-5">
                      <p><?php echo $row["emailkh"] ?></p>
                      </div> 
                    </div>    
                    <div class="form-group">
                    <label  class="col-sm-2 ">Địa chỉ giao hàng:</label>
                    <div class="col-sm-5">
                      <p><?php echo $row["diachi"] ?></p>
                      </div> 
                    </div> 
                    <div class="form-group">
                    <label  class="col-sm-2 ">Điện thoại khách hàng:</label>
                    <div class="col-sm-5">
                      <p><?php echo $row["dienthoai"] ?></p>
                      </div> 
                    </div> 
                    <div class="form-group">
                    <label  class="col-sm-2 ">Hình thức thanh toán:</label>
                    <div class="col-sm-5">
                      <p><?php echo $row["hinhthucthanhtoan"] ?></p>
                      </div> 
                    </div>               
                  </div>
                  <div class="box-footer">
                  <a href="quanlyhoadon.php"><button type="button" name="cancel" class="btn btn-default">Cancel</button></a>
                  
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

</div>

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


