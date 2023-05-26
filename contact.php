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

    <title>Contato</title>
</head>
<body>
   <!-- header section starts -->
   <?php include 'components/user_header.php'; ?>
    <!-- header section ends -->

    <div class="heading">
        <h3>Contatos</h3>
        <p><a href="index.php">Home</a> <span>/ Catato</span> </p>
    </div>
    <!-- contact section starts -->
    <section class="contact">
        <div class="row">
            <div class="image">
                <img src="img/contact-img.svg" alt="">
            </div>
            <form action="" method="post">
                <h3>Sugestão ou Reclamação</h3>
                <input type="text" name="name" maxlength="50" class="box" placeholder="Seu Nome" required>
                <input type="number" name="number" min="0" max="999999999" class="box" placeholder="Seu Número" required onkeypress="if(this.value.length == 10) return false;">
                <input type="email" name="email" maxlength="50" class="box" placeholder="Seu Nome" required>
                <input type="text" name="name" maxlength="50" class="box" placeholder="Seu Email">
                <textarea name="msg" id="" cols="30" rows="10" class="box" maxlength="500" placeholder="Sua Mensagem"></textarea>
                <input type="submit" value="Enviar mensagem" name="send" class="btn">
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



