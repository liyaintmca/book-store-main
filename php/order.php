<?php
    if($_POST){

        $name = $_POST['name'];
        $number = $_POST['number'];
        $date = $_POST['date'];
        $cvc = $_POST['cvc'];
        
        if(empty($name)){
            header("Location: ../pages/register_page.php?error=Card name required");
            exit();
        }
        
        else if(empty($number)){
            header("Location: ../pages/order_page.php?error=Credit card number required");
            exit();
        }

        else if(empty($date)){
            header("Location: ../pages/order_page.php?error=Expiray date required");
            exit();
        }

        else if(empty($cvc)){
            header("Location: ../pages/order_page.php?error=CVC number required");
            exit();
        }

        else{
            header("Location: ../pages/confrimd.php");
            exit();
        }
    }

    else{
        header("Location: ../pages/order_page.php");
        exit();
    }
?>