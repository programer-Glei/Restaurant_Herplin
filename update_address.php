<?php
    header('Content-Type: text/html; charset=utf-8');
    @include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
        header('location:index.php');
    }

    if(isset($_POST['submit'])){

        $address = $_POST['street'] .', '. $_POST['flat'] .', '. $_POST['city'] .', '. $_POST['state'] .', '.' - '. $_POST['pin_code'];
        $address = filter_var($address, FILTER_SANITIZE_STRING);

        $update_address = $conn->prepare("UPDATE `users` set address = ? WHERE id = ?");
        $update_address->execute([$address, $user_id]);

        $message[] = 'Endereço salvo!';
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

    <title>Atualizar perfil</title>
</head>
<body>

    <?php include 'components/user_header.php' ?>

    <!-- shopping cart section starts -->
    <section class="form-container">
        <form action="" method="post">
            <h3>Seu endereço</h3>
            <input type="text" name="street" class="box" placeholder="Nome da rua" required maxlength="50">
            <input type="text" name="flat" class="box" placeholder="Número da casa ou apartamento" required maxlength="50">
            <input type="text" name="city" class="box" placeholder="Nome da sua cidade" required maxlength="50">
            <input type="text" name="state" class="box" placeholder="Nome do seu estado" required maxlength="50">
            <input type="text" name="pin_code" class="box" placeholder="Seu CEP" required maxlength="50">
            <input type="submit" class="btn" value="Salvar endereço" name="submit">
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






