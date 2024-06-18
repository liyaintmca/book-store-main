
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="../css/books.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/baby-book.svg" alt="">
        </div>
    
        <div class="menu">
            <ul class="nav-bar">
                <li><a href="../index_page.php">Home</a></li>
                <li class="active"><a href="book_page.php">New Arrivals</a></li>
                <li><a href="../pages/category.php">Category</a></li>
                <?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){?>
                    <li><a><?php echo "Welcome, ".$_SESSION['username'];?> </a></li> 
                    <li><a href="./php/logout.php">Logout</a></li>
            <?php } else{
                ?>
                <li><a href="login_page.php">Login</a></li>
                <li><a href="register_page.php">Register</a></li>
                <?php
             } 
             ?>
            </ul>
        </div>

        <div class="search">
            <a href="../php/authcart.php"><img src="../img/cart.png" alt="" style="width: 50px;"></a>        
        </div>
        <div class="lines">
        </div>
    </header>
    <h2>Books:</h2>
    <main>
            <div class="first">
                <div id="one">
                    <img src="../img/egois.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>

                <div id="two">
                    <img src="../img/powerofnow.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>

                <div id="three">
                    <img src="../img/1.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>

                <div id="four">
                    <img src="../img/startup.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>
            </div>

            <div class="first">
                <div id="one">
                    <img src="../img/2.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>

                <div id="two">
                    <img src="../img/storybrand.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>

                <div id="three">
                    <img src="../img/3.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>

                <div id="four">
                    <img src="../img/4.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>
            </div>

            <div class="first">
                <div id="one">
                    <img src="../img/5.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>

                <div id="two">
                    <img src="../img/6.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>

                <div id="three">
                    <img src="../img/7.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>

                <div id="four">
                    <img src="../img/8.jpg" alt="">

                    <div class="add">
                        <a href="../php/authorder.php">ADD TO CART</a>
                    </div>

                    <div class="buy">
                        <a href="../php/authorder.php">BUY NOW</a>
                    </div>
                </div>
            </div>
    </main>
</body>
<html>