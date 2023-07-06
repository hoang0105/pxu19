<?php
// Step 1: Connect to the database
include "connectDBv2.php";

if(isset($_POST['submit'])){
    $tieude = $_POST['tieude'];
    $tomtat = $_POST['tomtat'];
    $ngay = $_POST['ngay'];
    $idUser = $_POST['idUser'];
    $idSK = $_POST['idSK'];
    $idLT = $_POST['idLT'];
    $AnHien = $_POST['AnHien'];
    $urlHinh = $_FILES['urlHinh']['name'];
    $urlHinh_tmp = $_FILES['urlHinh']['tmp_name'];


    $sql="INSERT INTO tin (TieuDe, TomTat, urlHinh, Ngay,idUser,idSK,idLT,AnHien) 
    VALUES ('$tieude', '$tomtat','$urlHinh', '$ngay', '$idUser','$idSK', '$idLT','$AnHien')";
    $query = mysqli_query($conn, $sql);
    move_uploaded_file($urlHinh_tmp, '../upload/'.$urlHinh);
    // header('location: index.php?page_layout=danhsach');

}


?>