<?php
    require("App/back/db.php");
?>
<div class="p-4">
    <?php
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($conn, $sql);
        while ($post=mysqli_fetch_assoc($result)) {
    ?>
        <!-- Card -->
        <div class="card m-4 p-0 col-md-6 col-lg-4">

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
            <a href="#" class="btn btn-primary">Button</a>

            </div>

        </div>
        <!-- Card -->
    <?php    
        }
    ?>

</div>