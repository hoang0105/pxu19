<ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
<?php  
     $db_name_menu = "select * from theloai where AnHien = 1";
     $result_menu = $conn->query($db_name_menu);
    while($rows_menu = $result_menu->fetch_assoc()){ ?>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" 
                id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> <?php echo $rows_menu['TenTL']; ?> </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php 
                    $idTL = $rows_menu['idTL'];
                    $db_name_submenu = "select * from loaitin where idTL = '$idTL'" ;
                    $result_submenu = $conn->query($db_name_submenu);
                    while ($rows_submenu = $result_submenu->fetch_assoc()){ ?>
                       <li><a class="dropdown-item" href="#"><?php echo $rows_submenu['Ten']; ?></a></li>
                    <?php  }
                    ?>
                   
                 
                </ul>
            </li>
        
    
<?php  }  
?>            
              