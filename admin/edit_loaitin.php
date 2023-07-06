<?php
// Step 1: Connect to the database
include "connectDBv2.php";

// Step 2: Get the ID of the LoaiTin record to edit
$id = $_GET['id'];

// Step 3: Retrieve the LoaiTin record from the database
$query = "SELECT * FROM LoaiTin WHERE id = $id";
$result = mysqli_query($conn, $query);
$loaitin = mysqli_fetch_assoc($result);

// Step 4: Handle the edit action (update the record in the database)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $thuTu = $_POST['thuTu'];
    $anHien = $_POST['anHien'];

    $updateQuery = "UPDATE LoaiTin SET name = '$name', thuTu = '$thuTu', anHien = '$anHien' WHERE id = $id";
    mysqli_query($conn, $updateQuery);

    // Redirect back to the list_loaitin.php file after editing
    header("Location: list_loaitin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit LoaiTin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit LoaiTin</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $loaitin['name']; ?>">
            </div>
            <div class="form-group">
                <label for="thuTu">ThuTu:</label>
                <input type="text" class="form-control" id="thuTu" name="thuTu" value="<?php echo $loaitin['thuTu']; ?>">
            </div>
            <div class="form-group">
                <label for="anHien">AnHien:</label>
                <input type="text" class="form-control" id="anHien" name="anHien" value="<?php echo $loaitin['anHien']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body