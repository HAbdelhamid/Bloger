<?php
    require("App/back/db.php");
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else {
        $page=1;
    }
    $post_per_page=5;
    $result=($page-1)*$post_per_page;
?>
<div class="m-4 ">
    <?php
        $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $result,$post_per_page";
        $result = mysqli_query($conn, $sql);
        while ($post=mysqli_fetch_assoc($result)) {
    ?>
        <!-- Card -->
        <div class="card p-0 my-4 col-sm-3 col-md-4 col-lg-4">

            <!-- Card image -->
            <div class="view overlay">
            <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).webp"
                alt="Card image cap">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
            </div>
                <!-- Card content -->
                <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><?=$post['title']?></h4>
                <!-- Text -->
                <p class="card-text text-truncate"><?=$post['content']?></p>
                <!-- Button -->
                <a href="App/front/postpage.php?id=<?=$post['id']?>" class="btn btn-primary">READ MORE</a>
                <!-- Creation Date -->
                <small class=""><i class="far fa-clock"></i> Posted on <?=date('F jS, Y',strtotime($post['created_at']))?></small>
            </div>

        </div>
        <!-- Card -->
    <?php    
        }
    ?>

    <?php 
    $q="SELECT * FROM posts";
    $r=mysqli_query($conn,$q);
    $total_posts=mysqli_num_rows($r);
    $total_pages= ceil($total_posts/$post_per_page)
    ?>
</div>
<nav class="d-flex justify-content-center my-4">
    <ul class="pagination pg-blue">
        <?php
            if($page>1){
                $switch="";
            }else {
                $switch="disabled";
            }
        ?>
        <?php
            if($page<$total_pages){
                $bswitch="";
            }else {
                $bswitch="disabled";
            }
        ?>
        <li class="page-item <?=$switch?>">
            <a class="page-link" aria-label="Previous" href="?page=<?=$page-1?>">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <?php
            for($opage=1; $opage<=$total_pages ;$opage++) { 
        ?>        
            <li class="page-item"><a class="page-link" href="?page=<?=$opage?>"><?=$opage?></a></li>
        <?php    
            }
        ?>
        <li class="page-item <?=$bswitch?>">
            <a class="page-link" aria-label="Next" href="?page=<?=$page+1?>">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>