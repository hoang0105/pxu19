<?php
$conn  = mysqli_connect('localhost','root','123456','web');

    function get_cat($conn,$id,$table,$feild,$filter){
        $db_name = "select * from $table where $filter = $id";
        $result = $conn->query($db_name);
        $row = $result->fetch_assoc();
        if(!isset($row)){
            return "Khong ton tai";
        }
        else{
            return $row["$feild"];
        }
    }
    function slider($conn){
        $str = "select * from tin where AnHien = 1 order by idTin desc limit 0,5";
        $result = $conn->query($str);
        while( $row = $result->fetch_assoc() ) { ?>
            <div class="item">
            <img src="assets/images/anh1.jpeg" alt="">
            <div class="item-content">
                <div class="main-content">
                <div class="meta-category">
                    <span>Fashion</span>
                </div>
                <a href="post-details.html"><h4><?php echo $row['TieuDe']; ?></h4></a>
                <ul class="post-info">
                    <li><a href="#"><?php echo get_cat($conn,$row['idUser'],'users','Username','idUser');?> </a></li>
                    <li><a href="#">May 12, 2020</a></li>
                    <li><a href="#">12 Comments</a></li>
                </ul>
                </div>
            </div>
            </div>
        <?php }
    }
    function query_post($conn,$id){

        $db_name = "select * from tin where idTin = $id";
        $result = $conn->query($db_name);
        $row = $result -> fetch_assoc(); ?>
        <div class="blog-post">
                    <div class="blog-thumb">
                    <img src="assets/images/anh1.jpeg" alt="">
                    </div>
                    <div class="down-content">
                        <span>Lifestyle</span>
                        <a href="post-details.html"><h4><?php echo $row['TieuDe'] ?></h4></a>
                        <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 31, 2020</a></li>
                        <li><a href="#">12 Comments</a></li>
                    </ul>
                    <p><?php echo $row['TomTat'] ?></p>
                    <div class="post-options">
                        <div class="row">
                        <div class="col-6">
                            <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Beauty</a>,</li>
                            <li><a href="#">Nature</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="post-share">
                                <li><i class="fa fa-share-alt"></i></li>
                                <li><a href="#">Facebook</a>,</li>
                                <li><a href="#"> Twitter</a></li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
        <?php  
    }
    


