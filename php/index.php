<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>ລະບົບບັນທຶກເລກທີບໍລິສັດເທັກອາດ</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <br>
                    <h3>ລາຍການບັນທຶກເລກທີເອກະສານ<a href="formAdd.php" class="btn btn-info">+ເພີ່ມເລກທີ</a> </h3>
                    <table id="myTable" class="table table-striped  table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">ລຳດັບ</th>
                                <th width="20%">ລະຫັດເອກະສານ</th>
                                <th width="45%">ຊື່ເອກະສານ</th>
                                <th width="20%">ວັນທີເພີ່ມເອກະສານ</th>
                                <th width="5%">ແກ້ໄຂ</th>
                                <th width="5%">ລົບ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'connect.php';
                            $stmt = $conn->prepare("SELECT* FROM tbl_member");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $k) {
                            ?>
                            <tr>
                                <td class="namber";><?php echo $i++ ?></td>
                                <td><?= $k['name'];?></td>
                                <td><?= $k['surname'];?></td>
                                <td><?= $k['datetime'];?></td>
                                <td><a href="formEdit.php?id=<?= $k['id'];?>" class="btn btn-warning btn-sm">ແກ້ໄຂ</a></td>
                                <td><a href="del.php?id=<?= $k['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ລົບ</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      

        <center>Basic CRUD PHP PDO by devbanban.com 2021</center>

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
        <script>

let table = new DataTable('#myTable');
        </script>
    </body>
</html>