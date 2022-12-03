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
        <h3>Nosso cardápio</h3>
        <p><a href="index.php">Home</a> <span>/ Menu</span> </p>
    </div>
    <!-- menu section starts -->
    <section class="products">
        <h1 class="title">Cardapio Completo</h1>
        <div class="box-container">
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/burger-1.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Comida rápida</a>
                <div class="name">X tudo</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dish-1.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Refeiçao Completa</a>
                <div class="name">Macarronada</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dessert-1.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Sobremesas</a>
                <div class="name">Milshake</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/drink-1.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Bebidas</a>
                <div class="name">Diversos Sucos</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/pizza-1.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Pizza</a>
                <div class="name">Pizza de Pepino</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dish-2.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Refeiçao Completa</a>
                <div class="name">Macarrão e legumes</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/pizza-2.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Pizza</a>
                <div class="name">Peperone</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/burger-2.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Comida rápida</a>
                <div class="name">X egges</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/drink-2.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Bebida</a>
                <div class="name">Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dessert-2.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Sobremesas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/pizza-3.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Pizza</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/pizza-4.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Pizza</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/pizza-5.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Pizza</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dessert-3.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Sobremesas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dessert-4.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Sobremesas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dessert-5.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Sobremesas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dessert-6.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Sobremesas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dish-3.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Sobremesas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/dish-4.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Sobremesas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/drink-3.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Bebidas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/drink-4.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Bebidas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
                    <input type="number" name="qty" id="" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
            </form>
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="img/drink-5.png" alt="imagem de Hamburguer">
                <a href="#" class="cat">Bebidas</a>
                <div class="name">Bolo Chocolate</div>
                <div class="flex">
                    <div class="price"> <span>R$</span>15 </div>
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

    <!-- custom js file link-->
    <script src="java/script.js"></script>
</body>
</html>