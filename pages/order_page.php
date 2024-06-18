<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
    body {
    display:flex;
    justify-content: center;
}
#background-video {
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
}

.wrapper {
    margin-top: 10%;
    width: 60%;
    display: flex;
    justify-content: center;
    font-family: "Arimo";
     
    -webkit-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    -moz-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    animation: slideUp 2000ms ease;
}
.container {
    width: 65%;
    padding: 5% 10%;
}

h1 {
    align-self: center;
}

form {
    width: 100%;

    >* {
        margin-top: 20px;
    }

    input {
        width: 100%;
        min-height: 25px;
        border: 0;
        font-size: 1rem;
        letter-spacing: .15rem;
        font-family: "Arimo";
        margin-top: 5px;
        color: $maroon;
        border-radius: 4px;
    }

    label {
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 2px;
        color: $maroon;
    }

    h1 {
        font-size: 24px;
        line-height: 10px;
        color: $title;
        letter-spacing: 1px;
    }

    h1:nth-of-type(2) {
        margin-top: 10%;
    }
}

.name {
    justify-content: space-between;
    display: flex;
    width: 100%;

    div {
        width: 45%;
    }
}

.address-info {
    display: flex;
    justify-content: space-between;

    div {
        width: 30%;
    }
}

.cc-info {
    display: flex;
    justify-content: space-between;

    div {
        width: 45%;
    }
}


.btns {
    display: flex;
    flex-direction: column;
    align-items: flex-end;

    button {
        margin: 3px 0;
        height: 30px;
        width: 40%;
        color::after;
        background-color:blue;
        text-transform: uppercase;
        border: 0;
        border-radius: .3rem;
        letter-spacing: 2px;

        &:hover {
            animation-name: btn-hov;
            animation-duration: 550ms;
            animation-fill-mode: forwards;
        }
    }
}

@keyframes btn-hov {
    100% {
        background-color:blue;
        color: #4a3b76;
        transform: scale(1.05)
    }
}

input:focus,
button:focus {
    outline: none;
}

@media (max-width: 736px) {
    .wrapper {
        width: 100%;
    }

    .container {
        width: 100%;
    }

    .btns {
        align-items: center;

        button {
            width: 50%;
        }
    }

    form h1 {
        text-align: center;
    }

    .name,
    .address-info,
    .cc-info {
        flex-direction: column;
        width: 100%;
        justify-content: space-between;

        div {
            align-items: center;
            flex-direction: column;
            width: 100%;
            display: flex;
        }
    }

    .street,
    .cc-num {
        text-align: center;
    }

    input {
        margin: 5px 0;
        min-height: 30px;
    }
}
 </style>
<body>
    <video id="background-video" autoplay loop muted poster="">
        <source src="../img/pexels-taryn-elliott-6003707.mp4" type="video/mp4">
        </video>
<div class="wrapper">
<div class="container">
     
    <form class="right" action="purchase.php" method="POST">
        <h1>
            <i class="fas fa-shipping-fast"></i>
            Shipping Details
        </h1>
        <div class="name">
            <div>
                <label for="f-name" style="color: rgb(203, 20, 23);font-weight: 900;">First</label>
                <input type="text" name="fname">
            </div>
            <div>
                <label for="l-name" style="color: rgb(203, 20, 23);font-weight: 900;">Last</label>
                <input type="text" name="lname">
            </div>
        </div>
        <div class="street">
            <label for="name" style="color: rgb(203, 20, 23);font-weight: 900;">Street</label><br>
            <input type="text" name="address">
        </div>
        <div class="address-info">
            <div>
                <label for="city" style="color: rgb(203, 20, 23);font-weight: 900;">City</label>
                <input type="text" name="city">
            </div>
            <div>
                <label for="state" style="color: rgb(203, 20, 23);font-weight: 900;">State</label>
                <input type="text" name="state">
            </div>
            <div>
                <label for="zip" style="color: rgb(203, 20, 23);font-weight: 900;">Zip</label>
                <input type="text" name="zip">
            </div>
        </div>
        <h1>
            <i class="far fa-credit-card"></i> Payment Information
        </h1>
        <div class="cc-num">
            <label for="card-num" style="color: rgb(203, 20, 23);font-weight: 900;">Credit Card No.</label>
            <input type="text" name="cardno" placeholder="Credit Card Number">
        </div><br>
        <div class="cc-info">
            <div>
                <label for="card-num" style="color: rgb(203, 20, 23);font-weight: 900;">Exp</label>
                <input type="text" name="ex">
            </div>
            <div>
                <label for="card-num" style="color: rgb(203, 20, 23);font-weight: 900;">CCV</label>
                <input type="text" name="security">
            </div>
        </div><br>
        <div class="btns">
            <a href="../pages/confrimd.php">Purchase</a><br>
            <a href="../pages/book_page.php">Back to cart</a> 
        </div>
        <?php
            if(isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error']; ?></p>
       <?php } ?>
    </form>
</div>
</div>
</body>
</html>