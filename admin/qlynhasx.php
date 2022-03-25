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
            Quản lý
            <small>Nhà xuất bản</small>
          </h1>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead >
                      <tr>
                        <th>Tên</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody> 
                    <?php
                         require '../inc/config.php';
                         $sql="SELECT ID,Ten from nhaxuatban ";
                         $result = $conn->query($sql); 
                         if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                      ?>      
                        <tr>                
                        <td><?php echo $row["Ten"] ?></td>
                        <td><a class="btn btn-primary" href="suanhasx.php?id=<?php  echo $row["ID"]  ?>">
                        <i class="fa fa-edit fa-lg"<acronym title="Chỉnh sửa"></acronym></i></a>               
                         <a class="btn btn-danger" onclick="return confirm('Bạn có thật sự muốn xóa không ?');" href="xoanhasx.php?id=<?php  echo $row["ID"]  ?>">                   <i class="fa fa-trash-o fa-lg" <acronym title="Xóa">
                         </acronym></i></a></td>
                      </tr>  
                      <?php
                          }
                        }
                       ?>              
                    </tbody>                   
                  </table>         
                  <div  style="text-align:left">
                <a class="btn btn-primary "href="themnhasx.php">
                    Thêm Nhà xuất bản</a>
                </div>         
                </div>
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

    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
        <script>
function myFunction() {
    alert("Xóa thành công");
}
</script>
  </body>
</html>
