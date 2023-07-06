<?php

function get_theloai($conn, $id){
    $str = " select * from theloai where idTL = $id";
    
    $result = $conn->query($str);
    $row = $result->fetch_assoc();
    if(!isset($row)){
        return "khong ton tai";
    }else{
        return $row['TenTL'];

    }
}

function list_theloai($conn){
    $str = " select * from theloai";
    
    $result = $conn->query($str);
    // $row = $result->fetch_assoc();


    while($row = $result->fetch_assoc()){?>


        <?php }

    }