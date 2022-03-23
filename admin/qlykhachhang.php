

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
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
      

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Quản lý khách hàng</h3>
                </div>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Email</th>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>Tác Vụ</th>
                      </tr>
                    </thead>
                    <tbody>  
                    <?php
                         require '../inc/config.php';
                         $sql="SELECT email,HoTen,DienThoai from user Order by HoTen  ";
                         $result = $conn->query($sql); 
                         if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                      ?>       
                        <tr>           
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["HoTen"] ?></td>
                        <td><?php echo $row["DienThoai"] ?></td>
                        <td><a class="btn btn-primary" href="suauser.php?email=<?php echo $row["email"] ?>">
                    <i class="fa fa-edit fa-lg"<acronym title="Chỉnh sửa"></acronym></i>
                       </a> 
                        <a class="btn btn-danger" onclick="return confirm('Bạn có thật sự muốn xóa không ?');" href="xoauser.php?email=<?php  echo $row["email"]  ?>" onclick="myFunction()">
                        <i class="fa fa-trash-o fa-lg" <acronym title="Xóa">
                         </acronym></i></a></td>      
                        </tr>
                        <?php
                          }
                        }
                         ?>
                     
                      
                    </tbody>                   
                  </table>
                  <div  style="text-align:left">
                <a class="btn btn-primary "href="themkhachhang.php">
                    Thêm Khách hàng</a>
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
    </div>

    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/demo.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <script>
function myFunction() {
    alert("Xóa thành công");
}
</script>
  </body>
</html>
