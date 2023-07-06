<?php
// Step 1: Connect to the database
include "connectDBv2.php";

if(isset($_POST['submit'])){
    $tieude = $_POST['tieude'];
    $tomtat = $_POST['tomtat'];
    $ngay = $_POST['ngay'];
    $iduse = $_POST['iduse'];
    $idsk = $_POST['idsk'];
    $content = $_POST['content'];
    $idtl = $_POST['idtl'];
    $idlt = $_POST['idlt'];
    $solanxem = $_POST['solanxem'];
    $noibat = $_POST['noibat'];
    $anhien = $_POST['anhien'];
    $urlHinh = $_FILES['urlHinh']['name'];
    $urlHinh_tmp = $_FILES['urlHinh']['tmp_name'];


    $sql="INSERT INTO tin (TieuDe, TomTat, urlHinh, Ngay,idUser,idSK,Content,idLT,idTL,SoLanXem,TinNoiBat,AnHien) 
    VALUES ('$tieude', '$tomtat','$urlHinh', '$ngay', '$iduse','$idsk', '$content', '$idtl', '$idlt','$solanxem', '$noibat', '$anhien')";
    $query = mysqli_query($conn, $sql);
    move_uploaded_file($urlHinh_tmp, '../upload/'.$urlHinh);
    // header('location: index.php?page_layout=danhsach');

}


?>