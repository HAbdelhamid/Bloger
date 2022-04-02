<?php
    function getCategory($conn,$id){
        $query = "SELECT * FROM category WHERE id=$id";
        $run = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($run);
        return $data['name'];
    }
?>