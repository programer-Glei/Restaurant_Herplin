<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/estilo.css">

    <title>Restaurante Herplin</title>
</head>
<body>
    <header class="header">

        <section class="flex">
            <a href="index.php" class="logo">Yum-yum</a>

            <nav class="navbar">
                <a href="index.php" class="logo">Home</a>
                <a href="about.php" class="logo">Sobre nós</a>
                <a href="menu.php" class="logo">Menu</a>
                <a href="orders.php" class="logo">Vendas</a>
                <a href="contact.php" class="logo">Contato</a>
            </nav>

            <div class="icons">
                <a href="search.php"><i class="fas fa-search"></i></a>
                <a href="cart.php"><i class="fas fa-shopping-cart"></i> <span>(3)</span> </a>
                <div id="user-btn" class="fas fa-user"></div>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>

            <div class="profile">
                <p class="name">Gleibinho</p>
                <div class="flex">
                    <a href="profile.php" class="btn">Perfil</a>
                    <a href="#" class="delete-btn">Sair</a>
                </div>
                <p class="acconut"><a href="login.php">Conecte-se</a> ou <a href="register.php">Cadastre-se</a> </p>
            </div>

        </section>
    </header>

    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Faça seu pedido</span>
                        <h3>Pizza deliciosa</h3>
                        <a href="menu.php" class="btn">Ver menu</a>
                    </div>
                    <div class="image">
                        <img src="img/home-img-1.png" alt="imagem pizza calabresa">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Faça seu pedido</span>
                        <h3>Hambúrguer de queijo</h3>
                        <a href="menu.php" class="btn">Ver menu</a>
                    </div>
                    <div class="image">
                        <img src="img/home-img-2.png" alt="imagem pizza calabresa">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Faça seu pedido</span>
                        <h3>Frango assado</h3>
                        <a href="menu.php" class="btn">Ver menu</a>
                    </div>
                    <div class="image">
                        <img src="img/home-img-3.png" alt="imagem frango assado">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- footer section starts -->
    <section class="category">
        <h1 class="title">Compre por categoria</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/cat-1.png" alt="">
                <h3>Comida rápida</h3>
            </div>
            <div class="box">
                <img src="img/cat-2.png" alt="">
                <h3>Pratos principais</h3>
            </div>
            <div class="box">
                <img src="img/cat-3.png" alt="">
                <h3>Bebidas</h3>
            </div>
            <div class="box">
                <img src="img/cat-4.png" alt="">
                <h3>Sobremesas</h3>
            </div>
        </div>
    </section>

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

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link-->
    <script src="java/script.js"></script>

    <script>
        var swiper = new Swiper(".home-slide",{
            loop:true,
            grabCursor:true,
            effect: "flip",
            pagination:{
                el:".swiper-pagination",
                clickable: true,
            }
        });
    </script>
</body>
</html>
