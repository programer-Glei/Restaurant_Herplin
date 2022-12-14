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
                <p><span class="name">Prato principal</span> <span class="price">R$ 18,00</span></p>
                <p><span class="name">Pizza</span> <span class="price">R$ 18,00</span></p>
                <p><span class="name">Sobremesa</span> <span class="price">R$ 18,00</span></p>
                <p class="grand-total"><span class="name">Total geral:</span> <span class="price">R$5,00</span></p>
                <a href="cart.php" class="btn">Ver carrinho</a>
            </div>
            <div class="user-profile">
                <h3>Suas informações</h3>
                <p><i class="fas fa-user"></i> <span>Lucas Range</span> </p>
                <p><i class="fas fa-phone"></i> <span>1234567890</span> </p>
                <p><i class="fas fa-envelope"></i> <span>lucasrange@gmail.com</span> </p>
                <a href="update_profile.php" class="btn">Atualizar perfil</a>
                <h3>Endereço de entrega</h3>
                <p><i class="fas fa-map-marker-alt"></i><span>Av. Prof. de freitas Leitão filho, Jardim casa grande, São Paulo - 04865-000</span></p>
                <a href="update_address.php" class="btn">Atualizar endereço</a>
                <select name="method" id="" class="box" required>
                    <option value="" disabled selected>Método de pagamento</option>
                    <option value="cash on delivery">Dinheiro na entrega</option>
                    <option value="cash on delivery">Dinheiro na entrega</option>
                    <option value="paytm">Paytm</option>
                    <option value="paypal">Paypal</option>
                </select>
                <input type="submit" value="Fazer pedido" class="btn" style="width:100%;background:#222;color:#fff;">
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
