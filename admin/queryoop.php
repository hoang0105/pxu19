<?php
    include "example.php";
    $sql = "insert into theloai(TenTL,ThuTu,AnHien) value('The Loai PXU',20,1)";
    
    if($conn->query($sql)===TRUE){
        echo "New record created successfully";
    }else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
?>