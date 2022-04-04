<?php
    require("../back/db.php");
    require("../functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="../../node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="../../node_modules/mdbootstrap/css/style.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Document</title>
</head>
<body class="d-flex flex-column min-vh-100">

<?php
    require("navbar.php");
?>

    <?php
        $post_id=$_GET['id'];
        $sql = "SELECT * FROM posts WHERE id=$post_id";
        $result = mysqli_query($conn, $sql);
        $post=mysqli_fetch_assoc($result);
    ?>

    <div class="container mt-5">


    <!--Section: Content-->
    <section class="mx-md-5 dark-grey-text">

        <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-12">

            <!-- Card -->
            <div class="card card-cascade wider reverse">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(142).jpg" alt="Sample image">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                <!-- Title -->
                <h3 class="font-weight-bold"><a><?=$post['title']?></a></h3>
                <!-- Data -->
                <p>Written by <a><strong>Abby </strong></a>, <?=date('F jS, Y',strtotime($post['created_at']))?></p>
                <!-- Social shares -->
                <div class="social-counters">
                    <!-- Comments -->
                    <i class="far fa-comments pr-2"></i>
                    <span class="clearfix d-none d-md-inline-block badge bg-danger"><?=getCategory($conn,$post['category_id'])?></span>
                </div>
                <!-- Social shares -->

                </div>
                <!-- Card content -->

            </div>
            <!-- Card -->

            <!-- Excerpt -->
            <div class="mt-5"><?=$post['content']?></div>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="mb-5 mt-4">

    </section>
    <!--Section: Content-->


    </div>
    <div class="">
        <!-- Footer -->
        <footer class="page-footer font-small unique-color-dark mt-auto">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-5">© 2022 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> TechnoBlog</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>
    
    <script type="text/javascript" src="../../node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="../../node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../node_modules/mdbootstrap/js/mdb.min.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>
</html>