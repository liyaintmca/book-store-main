<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    header("Location: ../pages/book_page.php");
    exit();
}
else{
    header("Location: ../pages/login_page.php");
    exit();
}
?>