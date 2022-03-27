<?php
    require("App/back/db.php");
?>
<div class="m-4 ">
    <?php
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($conn, $sql);
        while ($post=mysqli_fetch_assoc($result)) {
    ?>
        <!-- Card -->
        <div class="card p-0 my-4 col-sm-2 col-md-6 col-lg-6">

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
                <a href="#" class="btn btn-primary">READ MORE</a>
                <!-- Creation Date -->
                <small class=""><i class="far fa-clock"></i> Posted on <?=date('F jS, Y',strtotime($post['created_at']))?></small>
            </div>

        </div>
        <!-- Card -->
    <?php    
        }
    ?>

</div>