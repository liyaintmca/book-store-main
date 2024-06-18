<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
     
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
     
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/baby-book.svg" alt="">
        </div>
    
        <div class="menu">
            <ul class="nav-bar">
                <li class="active"><a href="index_page.php">Home</a></li>
                <li><a href="./pages/book_page.php">Books</a></li>
                <li><a href="./pages/aboutus.html ">About Us</a></li>
                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){?>
                    <li><a><?php echo "Welcome, ".$_SESSION['username'];?> </a></li> 
                    <li><a href="./php/logout.php">Logout</a></li>
            <?php } else{?>
                <li><a href="./pages/login_page.php">Login</a></li>
                <li><a href="./pages/register_page.php">Register</a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="search">
            <a href="./php/authcart.php"><img src="img/cart.png" alt="" style="width: 40px; height: 40px;"></a>        
        </div>
        <div class="lines">
        </div>
    </header>

    
    <main>
        <div class="content">
            <p>Dedicated book store <br> for serious readers</p>
            <span>Books are the quitest and most constant offlines;<br> 
                they are the most accessible and wisest of cunselors,<br> 
                and most patient of teachers.
            </span>
            <a href="./php/auth.php">
                <div class="box">
                    <p>SHOP NOW -> </p>
                </div>
            </a>
        </div>

        <div class="social-links">
            <a href="https://www.facebook.com">
                <img src="img/004-facebook-app-logo.svg" alt="">
            </a>

            <a href="https://www.facebook.com">
                <img src="img/001-youtube.svg" alt="">
            </a>

            <a href="https://www.facebook.com">
                <img src="img/002-instagram.svg" alt="">
            </a>

            <a href="https://www.facebook.com">
                <img src="img/005-twitter.svg" alt="">
            </a>
        </div>
    </main>
    
    <footer>
        <div class="footer">
            <div class="one">
                <a href="./pages/book_page.php">
                    <img src="img/startup.jpg" alt="">
                    <p>The $100 <br> startup</p>
                    <span>Chris<br>Guillabeau</span>
                </a>
            </div> 
            <div class="two">
                <a href="./pages/book_page.php">
                    <img src="img/egois.jpg" alt="">
                    <p>Ego is the <br> enemy</p>
                    <span>Ryan <br> Holiday</span>
                </a>
            </div>
            <div class="three">
                <a href="./pages/book_page.php">
                    <img src="img/powerofnow.jpg" alt="">
                    <p>The power of now</p>
                    <span>Eckhart <br> Tolle</span>
                </a>
            </div>
            <div class="four">
               <a href="./pages/book_page.php">
                   <img src="img/storybrand.jpg" alt="">
                   <p>Buildilng a brand story</p>
                   <span>Donald <br> Miller</span>
               </a>
            </div> 
        </div>
          
    </footer>
</body>
</html>