<?php
    if(isset($_POST['add_to_cart'])){

        if($user_id == ''){
            header('location:index.php');
        }else{

            $pid = $_POST['pid'];
            $pid = filter_var($pid, FILTER_SANITIZE_STRING);
            $name = $_POST['name'];
            $name = filter_var($name, FILTER_SANITIZE_STRING);
            $price = $_POST['price'];
            $price = filter_var($price, FILTER_SANITIZE_STRING);
            $image = $_POST['image'];
            $image = filter_var($image, FILTER_SANITIZE_STRING);
            $qty = $_POST['qty'];
            $qty = filter_var($qty, FILTER_SANITIZE_STRING);
        }
    }
?>
