<?php
// Step 1: Connect to the database
include "connectDBv2.php";

// Step 2: Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Step 3: Retrieve the form data
    $idTL = $_POST['idTL'];
    $tenTL = $_POST['tenTL'];
    $anHien = $_POST['anHien'];

    // Step 4: Update the category in the database
    $updateQuery = "UPDATE TheLoai SET TenTL = '$tenTL', AnHien = '$anHien' WHERE idTL = '$idTL'";
    if ($conn->query($updateQuery) === TRUE) {
        header('location:list_theloai.php');
    } else {
        echo "Error updating category: " . $conn->error;
    }
}

// Step 5: Close the database connection
$conn->close();
?>
