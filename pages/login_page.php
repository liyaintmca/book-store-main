<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="../css/login-stylesheet.css">
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
<a href="../php/authcart.php"><img src="../img/cart.png" alt="" style="width: 50px;"></a>
</div>
<div class="lines">
</div>
</header>

<main>
<form method="POST" action="../php/login.php" class="login">
<h1>Login</h1>
<?php
if (isset($_GET['error'])){?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<label>User Name</label>
<input type="text" name="username">

<label>Password</label>
<input type="password" name="password">

<input type="submit" value="Login"><br>

<label for="login">Don't have an account?</label>
<a href="register_page.php">Register</a>
</form>
</main>
</body>
</html>

 