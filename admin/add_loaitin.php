<?php  
include "header.php";
// Step 1: Connect to the database
include 'connectDBv2.php';
// Step 3: Retrieve TheLoai options
$query = "SELECT idTL, TenTL FROM TheLoai";
$result = mysqli_query($conn, $query);
$theloaiOptions = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Step 4: Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $order = $_POST['thuTu'];
    $visibility = isset($_POST['anHien']) ? 1 : 0;
    $theloaiId = $_POST['theloaiId'];

    // Step 5: Insert the record
    // $query = "INSERT INTO LoaiTin (Ten, thuTu, anHien, idTL) VALUES ('$name', '$order', '$visibility', '$theloaiId')";
    // mysqli_query($conn, $query);
    // echo 'Record added successfully!';
    // header('location:list_loaitin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add LoaiTin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Add LoaiTin</h2>
        <form method="POST" action="add_loaitin.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="order">Order:</label>
                <input type="number" class="form-control" id="order" name="thuTu">
            </div>
            <div class="form-group">
                <label for="visibility">Visibility:</label>
                <input type="checkbox" id="visibility" name="anHien">
            </div>
            <div class="form-group">
                <label for="theloaiId">TheLoai:</label>
                <select class="form-control" id="theloaiId" name="theloaiId">
                    <?php foreach ($theloaiOptions as $option): ?>
                        <option value="<?php echo $option['idTL']; ?>"><?php echo $option['TenTL']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
  