<?php
    session_start(); 
    include("connection.php"); 
?>
<?php
    if (isset($_POST['log_btn']))
    {
        $username = $_POST['uname'];
        $password = $_POST['password'];
        $sql= "SELECT * FROM registration WHERE uname = '$username' limit 1";
        $result=mysqli_query($con, $sql); 
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                $user_data['password'];
                if($user_data['password']=== $password)
                {
                    $_SESSION["loggedIn"] = true;
                    header("Location:index_page.php");
                    die;
                }
            }
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-PartyLyfe</title>
    <link rel="stylesheet" href="login_page.css?v=<?php echo time();?>"> 
    <script src="validation.js"></script>
</head>
<body>
    <section>
        <div class="contentbx">
        <div class="formBx">
        <h2>Login</h2>
        <form method="POST">
            <div class="inputBx">
            <span>Username</span>
            <input type="text" placeholder="Name" name="uname" id="username" onkeyup="validateUsername()"required="">
            <div class="red-text" id="name_err"></div>
            </div> 
            <div class="inputBx">
            <span>Password</span>
            <input type="password" placeholder="Password" name="password" id="password" onkeyup="validatePassword()" required="">
            <div class="red-text" id="pass_err"></div>
            </div> 
            <div class="remember">
            <label><input type="checkbox" name=""> Remember me</label>
            </div>
            <div class="inputBx">
            <input type="submit" value="Sign in" id="submit" name="log_btn">
            </div>
            <div class="inputBx">
            <p>Don't have an account ?<a href="signup.php"> Sign up</a></p>
            </div>
        </form>
        </div>
        </div>
        <div class="imgbx">
           <img src="img/book1.jpg" alt=""> 
        </div>
    </section>
</body>
</html>