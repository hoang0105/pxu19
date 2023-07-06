
<?php
// Step 1: Connect to the database
include "connectDBv2.php";
// Step 2: Retrieve the record
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['idTL'])) {
        $id = $_GET['idTL'];
        $query = "select * from theloai WHERE idTL = $id";
        $result = $conn->query($query);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "ID not found in URL";
        exit;
    }
}
// Step 5: Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['tenTL'];
    $order = $_POST['thuTu'];
    $visibility = isset($_POST['anHien']) ? 1 : 0;

    // Step 6: Update the record
    $query = "UPDATE theloai SET tenTL = '$name', thuTu = '$order', anHien = '$visibility' WHERE idTL = $id";
    $conn->query($query);
    echo 'Record updated successfully!';
    header('location:list_theloai.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Edit Form</h2>
        <form method="POST" action="edit_theloai.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="tenTL" value="<?php echo $row['TenTL']; ?>">
            </div>
            <div class="form-group">
                <label for="order">Order:</label>
                <input type="number" class="form-control" id="order" name="thuTu" value="<?php echo $row['ThuTu']; ?>">
            </div>
            <div class="form-group">
                <label for="visibility">Visibility:</label>
                <input type="checkbox" id="visibility" name="anHien" <?php if ($row['AnHien'] == 1) echo 'checked'; ?>>
            </div>
            <input type="hidden" name="id" value="<?php echo $row['idTL']; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>