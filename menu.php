<?php
    include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    include 'components/add_cart.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/estilo.css">

    <title>Menu</title>
</head>
<body>

    <?php include 'components/use_header.php'; ?>

    <div class="heading">
        <h3>Nosso cardápio</h3>
        <p><a href="index.php">Home</a> <span>/ Menu</span> </p>
    </div>
    <!-- menu section starts -->
    <section class="products">
        <h1 class="title">Cardapio Completo</h1>
        <div class="box-container">
            <?php
                $select_products = $conn->prepare("SELECT * FROM `products`");
                $select_products->execute();
                if($select_products->rowCount() > 0){
                    while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){

                    }
                }else{

                }
            ?>
            <form action="" method="post" class="box">
                <input type="hidden" name="pid" value="<?=$fetch_products['id'];?>">
                <input type="hidden" name="name" value="<?=$fetch_products['name'];?>">
                <input type="hidden" name="price" value="<?=$fetch_products['price'];?>">
                <input type="hidden" name="image" value="<?=$fetch_products['image'];?>">
                <a href="quick_view.php?pid=<?=$fetch_products['id'];?>" class="fas fa-eye"></a>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="uploaded_img/<?=$fetch_products['image'];?>" alt="">
                <a href="category.php?category=<?=$fetch_products['category'];?>" class="cat"><?=$fetch_products['category'];?></a>
                <div class="name"><?=$fetch_products['name'];?></div>
                <div class="flex">
                    <div class="price"> <span>R$ </span><?=$fetch_products['price']?> </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
        </div>
    </section>
    <!-- steps section starts -->
    <!-- reviews section starts -->

    <!-- footer section starts -->
    <footer class="footer">
        <section class="grid">
            <div class="box">
                <img src="img/email-icon.png" alt="">
                <h3>Nosso email</h3>
                <a href="mailto:gleibson.santos05@gmail.com">gleibson.santos05@gmail.com</a>
                <a href="mailto:gleibson.santos04@gmail.com">gleibson.santos04@gmail.com</a>
            </div>
            <div class="box">
                <img src="img/clock-icon.png" alt="">
                <h3>Horário de funcionamento</h3>
                <p>08:00 às 23:00</p>
            </div>
            <div class="box">
                <img src="img/map-icon.png" alt="">
                <h3>Nosso endereço</h3>
                <a href="#">Avenida Professor, São Paulo, Brasil - 048658-000</a>
            </div>
            <div class="box">
                <img src="img/phone-icon.png" alt="">
                <h3>Nosso número</h3>
                <a href="#">(81) 99794-0980</a>
                <a href="#">(81) 3534-1290</a>
            </div>
        </section>
    </footer>

    <div class="loader">
        <img src="img/loader.gif" alt="">
    </div>

    <!-- custom js file link-->
    <script src="java/script.js"></script>
</body>
</html>