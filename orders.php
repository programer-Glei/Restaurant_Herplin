<?php
    header('Content-Type: text/html; charset=utf-8');
    include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
        header('location:index.php');
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

    <title>Pedidos</title>
</head>
<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php'; ?>
    <!-- header section ends -->

    <div class="heading">
        <h3>Pedidos</h3>
        <p><a href="index.php">Home</a> <span>/ Pedidos</span></p> </p>
    </div>

    <!-- shopping cart section starts -->
    <section class="orders">
        <h1 class="title">Seus pedidos</h1>
        <div class="box-container">
            <?php
                if($user_id == ''){
                    echo '<p class="empty">Faça o login para ver seus pedidos</p>';
                }else{
                    $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
                    $select_orders->execute([$user_id]);
                    if($select_orders->rowCount() > 0){
                        while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC))
                    }
                }
            ?>
            <div class="box">
                <p>Data da compra: <span>14/12/2022</span></p>
                <p>Nome: <span>Lucas</span></p>
                <p>Número: <span>81998991803</span></p>
                <p>Email: <span>gleibson.santos05@gmail.com</span></p>
                <p>Endereço: <span>gleibson.santos05@gmail.com</span></p>
                <p>Forma de pagamento: <span>Dinheiro na entrega</span></p>
                <p>Status do pagamento: <span style="color: red;">Pendente</span></p>
            </div>
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

