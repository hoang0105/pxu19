<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    include 'sql.php';
    // $str = "insert into theloai (TenTL,ThuTu,AnHien) value ('test1',2222,3)";
    // if ($conn->query($str) ===TRUE) {
    //     echo "ket noi";
    // } else {
    //     echo "Error: " . $str . "<br>" . $conn->error;
    // }
    $str = "SELECT * FROM web.theloai";
    $result = mysqli_query($conn,$str);

    while( $rows = mysqli_fetch_assoc($result)) {
        
        echo "id: " . $rows["idTL"]. " - Name: " .$rows["TenTL"]. " - Thu tu: " .$rows["ThuTu"]." - An Hien: " . $rows["AnHien"] ."<br>";
        

    }
?>
    
</body>
</html>