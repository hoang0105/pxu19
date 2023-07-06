<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
        <div class="container ">
            <div class="row">
                <div class="col-4">
                    <div id class="primary" class="bg-info">
                        <?php if(isset($_SESSION['username'])){
    echo "wellcome ".$_SESSION['username'];}
    ?>
    <nav class="bg-warning">
        <p>Quan ly the loai</p>
        <ul>
            <li>
                <a href="add_Theloai.php">add the loai</a>
            </li>
            <li>
                <a href="list_theloai.php">list the loai</a>
            </li>
        </ul>
        <p>Quan ly loai tin</p>
        <ul>
            <li>
                <a href="add_loaitin.php">add loai tin</a>
            </li>
            <li>
                <a href="list_loaitin.php">list loai tin</a>
            </li>
        </ul>
    </nav>

</div>
<div class="col-md-8">
    <div id="content">
</body>
</html>