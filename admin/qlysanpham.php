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
            <small>Sách</small>
          </h1>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
        
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Hình ảnh</th>
                        <th>Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>  
                    <?php
                         require '../inc/config.php';
                         $sql="SELECT s.ID,s.Ten,s.Gia,s.HinhAnh,s.tacgia,s.Mota, n.Ten as Tennhasx
                         from sanpham s 
                         LEFT JOIN nhaxuatban n on n.ID = s.Manhasx ORDER BY s.Ten  ";
                         $result = $conn->query($sql); 
                         if ($result->num_rows>0) {
                          while($row = $result->fetch_assoc()) {
                      ?>       
                        <tr>           
                        <td ><a href ="chitietsp.php?id=<?php echo $row["ID"]?>" style="color:black"><?php echo $row["Ten"] ?></a></td>
                        <td><?php echo $row["Gia"] ?></td>
                        <td><img src="../images/<?php echo $row["HinhAnh"]?>" style="width:100px;height:100px"></td>
                        <td><a class="btn btn-primary" href="suasp.php?id=<?php echo $row["ID"] ?>">
                    <i class="fa fa-edit fa-lg"<acronym title="Chỉnh sửa"></acronym></i>
                       </a>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có thật sự muốn xóa không ?');" href="xoasp.php?id=<?php  echo $row["ID"]  ?>" onclick="myFunction()">
                        <i class="fa fa-trash-o fa-lg" <acronym title="Xóa">
                         </acronym></i></a></td>
                        </td>
                        <?php
                          }
                        }
                         ?>                                     
                    </tbody>                   
                  </table>
                          <div  style="text-align:left">
                <a class="btn btn-primary "href="themsp.php">
                Thêm Sách</a>
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

<script>
function myFunction() {
    alert("Xóa thành công");
}
</script>
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
  </body>
</html>
