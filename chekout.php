<?php
    include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
        header('location:index.php');
    }

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $number = $_POST['number'];
        $number = filter_var($number, FILTER_SANITIZE_STRING);
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $method = $_POST['method'];
        $method = filter_var($method, FILTER_SANITIZE_STRING);
        $address = $_POST['address'];
        $address = filter_var($address, FILTER_SANITIZE_STRING);
        $total_products = $_POST['total_products'];
        $otal_price = $_POST['total_price'];

        $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
        $check_cart->execute([$user_id]);

        if($check_cart->rowCount() > 0){

            if($address == ''){
                $message[] = 'Por favor adicione seu endereço!';
            }else{

                $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price) VALUES(?,?,?,?,?,?,?,?)");
                $insert_order->execute([$user_id, $name, $number, $email, $method, $address, $total_products, $total_price]);

                $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
                $delete_cart->execute([$user_id]);

                $message[] = 'Pedido feito com sucesso!';
            }
        }else{
            $message[] = 'Seu carrinho está vazio';
        }
    }
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

    <title>Revisar pagamento</title>
</head>
<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php'; ?>
    <!-- header section ends -->

    <div class="heading">
        <h3>Revisar Pagamento</h3>
        <p><a href="index.php">Home</a> <span>/ Revisar Pagamento</span> </p>
    </div>

    <!-- shopping cart section starts -->
    <section class="checkout">
        <h1 class="title">Resumo do pedido</h1>
        <form action="" method="post">
            <div class="cart-items">
                <h3>Itens do carrinho</h3>
                <?php
                    $grand_total = 0;
                    $cart_items[] = '';
                    $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
                    $select_cart->execute([$user_id]);
                    if($select_cart->rowCount() > 0){
                        while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
                            $cart_items[] = $fetch_cart['name'].' ('.$fetch_cart['price'].' x '. $fetch_cart['quantity'].') - ';
                            $total_products = implode($cart_items);
                            $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
                ?>
                <p><span class="name"><?= $fetch_cart['name'] ?></span> <span class="price">R$<?=$fetch_cart['price'];?> x <?=$fetch_cart['quantity'];?></span></p>
                <?php
                         }
                        }else{
                            echo '<p class="empty">Seu carrinho está vazio</p>';
                        }
                ?>
                <p class="grand-total"><span class="name">Total geral:</span><span class="price">R$<?=$grand_total;?></span></p>
                <a href="cart.php" class="btn">Ver carrinho</a>
            </div>

            <input type="hidden" name="total_products" value="<?= $total_products; ?>">
            <input type="hidden" name="total_price" value="<?= $grand_total; ?>">
            <input type="hidden" name="name" value="<?= $fetch_profile['name'] ?>">
            <input type="hidden" name="number" value="<?= $fetch_profile['number'] ?>">
            <input type="hidden" name="email" value="<?= $fetch_profile['email'] ?>">
            <input type="hidden" name="address" value="<?= $fetch_profile['address'] ?>">

            <div class="user-profile">
                <h3>Suas informações</h3>
                <p><i class="fas fa-user"></i> <span><?= $fetch_profile['name'] ?></span> </p>
                <p><i class="fas fa-phone"></i> <span><?= $fetch_profile['number'] ?></span> </p>
                <p><i class="fas fa-envelope"></i> <span><?= $fetch_profile['email'] ?></span> </p>
                <a href="update_profile.php" class="btn">Atualizar perfil</a>
                <h3>Endereço de entrega</h3>
                <p><i class="fas fa-map-marker-alt"></i><span><?php if($fetch_profile['address'] == ''){echo 'por favor digite seu endereço';}else{echo $fetch_profile['address'];} ?></span></p>
                <a href="update_address.php" class="btn">Atualizar endereço</a>
                <select name="method" id="" class="box" required>
                    <option value="" disabled selected>Método de pagamento</option>
                    <option value="cash on delivery">Dinheiro na entrega</option>
                    <option value="cash on delivery">Dinheiro na entrega</option>
                    <option value="paytm">Paytm</option>
                    <option value="paypal">Paypal</option>
                </select>
                <input type="submit" value="Fazer pedido" class="btn <?php if($fetch_profile['address'] == ''){echo 'disabled';} ?>" style="width:100%;background:#222;color:#fff;" name="submit">
            </div>
        </form>
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
