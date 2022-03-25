

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
            <small>hóa đơn</small>
          </h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
      

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Quản lý hóa đơn</h3>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                       <th>Số đơn hàng</th>
                        <th>Tên Sách</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th> 
                        <th>Ngày giao hàng </th>       
                                   
                      </tr>
                    </thead>
                    <tbody>  
               
                    <?php
                         require '../inc/config.php';
                         $sql="SELECT h.sodh,soluong,dongia,h.thanhtien
                         ,s.Ten as tensanpham,ngaygiao
                         from chitiethoadon c 
                         LEFT JOIN sanpham s on s.ID= c.masp
                         LEFT JOIN hoadon h on h.sodh= c.sodh Order by tensanpham  ";
                         $result = $conn->query($sql); 
                         if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                      ?>       
                        <tr>     
                        <td><?php  echo $row["sodh"] ?></td>                                                   
                        <td ><a href ="chitiethd.php?sodh=<?php echo $row["sodh"]?>" style="color:black"><?php echo $row["tensanpham"] ?>  </a>     
                        </td>
                        <td><?php  echo $row["soluong"] ?></td>
                        <td><?php  echo $row["dongia"] ?>.000 VNĐ</td>
                        <td><?php  echo $row["thanhtien"] ?>0 VNĐ</td>  
                        <td>
                        <?php 
                        $date=date_create($row["ngaygiao"]);
                        echo date_format($date,"d/m/Y");
                         ?></td> 
                         <td></td>  
                         
                        
                              
                        </tr>
           
                        <?php
                        
                          }
                        }
                         ?>

                      
                    </tbody>                   
                  </table>
              
                </div>
             
             
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
