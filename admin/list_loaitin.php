<?php
// Step 1: Connect to the database
include('header.php');
include 'connectDBv2.php';

// Step 2: Retrieve all LoaiTin records with TheLoai names
$query = "SELECT LoaiTin.*, TheLoai.tenTL AS TheLoaiName FROM LoaiTin
          INNER JOIN TheLoai ON LoaiTin.idTL = TheLoai.idTL";
$result = mysqli_query($conn, $query);
$loaitinList = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>List LoaiTin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container col-12">
        <h2>Danh sách loại tin</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tên Loại Tin</th>
                    <th>Thứ tự</th>
                    <th>Ẩn hiện</th>
                    <th>Thể loại</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loaitinList as $loaitin): ?>
                    <tr>
                        <td><?php echo $loaitin['Ten']; ?></td>
                        <td><?php echo $loaitin['ThuTu']; ?></td>
                        <td><?php echo $loaitin['AnHien']; ?></td>
                        <td><?php echo $loaitin['TheLoaiName']; ?></td>
                        <td>
                            <a data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal"   class="btn btn-success btn-sm"  href="modal.php?id=<?php echo $loaitin['idLT']; ?>">Edit</a>
                            <a class="btn btn-danger text-white" href="delete_loaitin.php?id=<?php echo $loaitin['idLT']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php include('modal.php'); ?>
                </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
  