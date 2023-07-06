<?php
// Step 1: Connect to the database
include "connectDBv2.php";

// Step 2: Retrieve the record ID
if (isset($_GET['idTL'])) {
    $id = $_GET['idTL'];

    // Step 4: Delete the record
    $query = "DELETE FROM theloai WHERE idTL = $id";
    mysqli_query($conn, $query);

    header('location:list_theloai.php');
} else {
    echo "ID not found in URL";
    exit;
}
