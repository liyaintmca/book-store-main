<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../css/cart.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/baby-book.svg" alt="">
        </div>
    
        <div class="menu">
            <ul class="nav-bar">
                <li><a href="../index_page.php">Home</a></li>
                <li><a href="book_page.php">Books</a></li>
                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){?>
                    <li><a><?php echo "Welcome, ".$_SESSION['username'];?> </a></li> 
                    <li><a href="./php/logout.php">Logout</a></li>
            <?php } else{?>
                <li><a href="login_page.php">Login</a></li>
                <li><a href="register_page.php">Register</a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="search">
            <a href=""><img src="../img/cart.png" alt="" style="width: 50px;"></a>        
        </div>
        <div class="lines">
        </div>
    </header>

    <main>
        <div class="first">
            <img src="../img/egois.jpg" alt="">

            <div class="buy">
                <a href="order_page.php">BUY NOW</a>
            </div>

            <p class="title">EGO IS THE ENEMEY</p>
            <p class="disc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate magni eius laborum nihil temporibus quae, sit totam quia doloremque ex minus perferendis? Qui repellat hic dolorem molestias ad! Repudiandae, architecto?</p>
        </div>

        <div class="first">
            <img src="../img/powerofnow.jpg" alt="">

            <div class="buy">
                <a href="order_page.php">BUY NOW</a>
            </div>

            <p class="title">THE POWER OF NOW</p>
            <p class="disc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate magni eius laborum nihil temporibus quae, sit totam quia doloremque ex minus perferendis? Qui repellat hic dolorem molestias ad! Repudiandae, architecto?</p>
        </div>
    </main>
</body>
</html>