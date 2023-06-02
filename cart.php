<?php
    header('Content-Type: text/html; charset=utf-8');
    @include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    };

    if(isset($_POST['delete'])){
        $cart_id = $_POST['cart_id'];
        $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
        $delete_cart_item->execute([$cart_id]);
        $message[] = 'Item do carrinho deletado!';
    }

    if(isset($_POST['delete_all'])){
        $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
        $delete_cart_item->execute([$user_id]);
        //header(location:cart.php);
        $message[] = 'todos os itens deletados';
    }

    if(isset($_POST['update_qty'])){
        $cart_id = $_POST['cart_id'];
        $qty = $_POST['qty'];
        $qty = filter_var($qty, FILTER_SANITIZE_STRING);
        $update_qty = $conn->prepare("UPDATE `cart` SET quantity = ? WHERE id = ?");
        $update_qty->execute([$qty, $cart_id]);
        $message[] = 'Quantidade do carrinho atualizada';
    }

    $grand_total = 0;

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

    <title>Carrinho</title>
</head>
<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php';?>
    <!-- header section ends -->

    <div class="heading">
        <h3>Carrinho de Compras</h3>
        <p><a href="index.php">Home</a> <span>/ Carrinho</span> </p>
    </div>

    <!-- shopping cart section starts -->
    <section class="products">
        <h1 class="title">Seu carrinho</h1>
        <div class="box-container">
            <?php
                $grand_total = 0;
                $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
                $select_cart->execute([$user_id]);
                if($select_cart->rowCount() > 0){
                    while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
            ?>
            <form action="" method="post" class="box">
                <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
                <a href="quick_view.php?pid=<?= $fetch_cart['pid'];?>" class="fas fa-eye"></a>
                <button type="submit" class="fas fa-times" name="delete" onclick="return confirm('delete this item?');"></button>
                <img src="uploaded_img/<?=$fetch_cart['image'];?>" alt="imagem de Hamburguer">
                <div class="name"><?=$fetch_cart['name'];?></div>
                <div class="flex">
                    <div class="price"> <span>R$</span><?=$fetch_cart['price'];?> </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="<?=$fetch_cart['quantity'];?>" onkeypress="if(this.value.length == 2) return false;">
                    <button type="submit" class="fas fa-edit" name="update_qty"></button>
                </div>
                <div class="sub-total">Subtotal: <span>R$<?=$sub_total = ($fetch_cart['price'] * $fetch_cart['quantity'])?></span> </div>
            </form>
            <?php
                    $grand_total += $sub_total;
                 }
                }else{
                    echo '<p class="empty">Seu carrinho está vazio</p>';
                }
            ?>

        </div>
        <div class="cart-total">
            <p>Total: <span>R$<?=$grand_total?></span> </p>
            <a href="checkout.php" class="btn <?=($grand_total> 1)?'':'disabled';?>">Comfirmar pedido</a>
        </div>
        <div class="more-btn">
            <form action="" method="post">
                <button type="submit" class="delete-btn <?=($grand_total > 1)?'':'disabled';?>" name="delete_all" onclick="return confirm('excluir tudo do carrinho?');">Deletar tudo</button>
            </form>
            <a href="menu.php" class="btn">Continue comprando</a>
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