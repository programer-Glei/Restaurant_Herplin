<?php
    header('Content-Type: text/html; charset=utf-8');
    include 'components/connect.php';

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    };

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $pass = $_POST['pass'];
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);

        $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
        $select_user->execute([$email, $pass]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if($select_user->rowCount() > 0){
            $_SESSION['user_id'] = $row['id'];
            header('location:index.php');
        }else{
            $message[] = 'Email ou senha errada!';
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

    <title>Entrar</title>
</head>
<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php'; ?>

    <!-- shopping cart section starts -->
    <section class="form-container">
        <form action="" method="post">
            <h3>Minha conta</h3>
            <input type="email" name="email" id="" class="box" required placeholder="Digite seu email" maxlenght="50" oninput="this.value.replace(/\s/g,'')">
            <input type="password" name="pass" id="" class="box" required placeholder="Digite sua senha" maxlenght="50" oninput="this.value.replace(/\s/g,'')">
            <input type="submit" class="btn" value="Entrar" name="submit">
            <p>Não tem uma conta?<a href="register.php">Cadastrar</a></p>
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


