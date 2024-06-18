<?php
include("connection.php");
?>
<?php
if (isset($_POST['sub_btn'])) {
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "INSERT INTO registration (uname,email,password) values('$username','$email','$password')";
    mysqli_query($con, $sql);
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
    <script src="validation.js"></script>
</head>

<body>
    <section>
        <div class="imgbx">
            <video width="781px" height="760px" style="margin-top:0px;margin-left:-170px" loop autoplay>
                <source  src="img/v1.mp4" type="video/mp4">
            </video>
        </div>
        <div class="contentbx">
            <div class="formBx">
                <h2>Sign Up</h2>
                <form id="reg_form" method="POST">
                    <div class="inputBx">
                        <input type="text" placeholder="Name" name="uname" id="username" onkeyup="validateUsername()" required="">

                        <label>Username</label>
                        <div class="red-text" id="name_err"></div>
                    </div>
                    <div class="inputBx">
                        <input type="email" placeholder="Email" name="email" id="email" onkeyup="validateEmail()" required="">
                        <label>Email Id</label>
                        <div class="red-text" id="email_err"></div>
                    </div>
                    <div class="inputBx">
                        <input type="password" placeholder="Password" name="password" id="password" onkeyup="validatePassword()" required="">
                        <label>Password</label>
                        <div class="red-text" id="pass_err"></div>
                    </div>
                    <div class="inputBx">
                        <input type="password" placeholder="Re-Enter Password" name="password" id="repassword" onkeyup="validateRepass()" required="">
                        <label>Confirm Password</label>
                        <div class="red-text" id="repass_err"></div>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Register" name="sub_btn" id="submit">
                    </div>
                    <div class="inputBx">
                        <p>Already have an account ?<a href="login_page.php"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>