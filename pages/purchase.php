<?php
    if($_POST){
        include 'config.php';

        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cnfrmpassword = $_POST['confrm'];
        $gender = $_POST['gender'];
        $email = $_POST['mail'];
        $number = $_POST['phoneno'];

        if(empty($fullname)){
            header("Location: ../pages/register_page.php?error=Full Name is required");
            exit();
        }

        else if(empty($username)){
            header("Location: ../pages/register_page.php?error=User Name is required");
            exit();
        }

        else if(empty($password)){
            header("Location: ../pages/register_page.php?error=Password is required");
            exit();
        }

        else if(empty($cnfrmpassword)){
            header("Location: ../pages/register_page.php?error=Confirm your password");
            exit();
        }

        else if(empty($gender)){
            header("Location: ../pages/register_page.php?error=Gender is required");
            exit();
        }

        else if(empty($email)){
            header("Location: ../pages/register_page.php?error=E-mail is required");
            exit();
        }

        else if(empty($number)){
            header("Location: ../pages/register_page.php?error=Phone Number is required is required");
            exit();
        }

        else{
            if($password != $cnfrmpassword){
                header("Location: ../pages/register_page.php?error=Password mismatch");
                exit();
            }

            else{
                $retrivedata = "SELECT * FROM registration;";
                $result = mysqli_query($conn,$retrivedata);

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
                        if ($username == $row['username']){
                            header("Location: ../pages/register_page.php?error=Username alredy taken");
                            exit();
                        }

                        else{
                            $query = "INSERT INTO registration VALUES('$fullname','$username','$password','$gender','$email','$number');";
                            mysqli_query($conn,$query);
                            header("Location: ../pages/login_page.php");
                            exit();
                        }
                    }
                }

                else{
                    $query = "INSERT INTO registration VALUES('$fullname','$username','$password','$gender','$email','$number');";
                    mysqli_query($conn,$query);
                    header("Location: ../pages/login_page.php");
                    exit();
                }
            }
        }        
    }

    else{
        header("Location: ../pages/register_page.php");
        exit();
    }
?>
 
 <?php
    if($_POST){
        include 'config.php';

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address']; 
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];

        $cardno = $_POST['cardno'];
        $ex = $_POST['ex'];
        $security = $_POST['security'];
        

        if(empty($fname)){
            header("Location: ../pages/order_page.php?error=First Name is required");
            exit();
        }

        else if(empty($lname)){
            header("Location: ../pages/order_page.php?error=last Name is required");
            exit();
        }

        else if(empty($address)){
            header("Location: ../pages/order_page.php?error=address is required");
            exit();
        }

        else if(empty($city)){
            header("Location: ../pages/order_page.php?error=City is required");
            exit();
        }

        else if(empty($state)){
            header("Location: ../pages/order_page.php?error=state is required");
            exit();
        }

        else if(empty($zip)){
            header("Location: ../pages/order_page.php?error=zip is required");
            exit();
        }

        else if(empty($cardno)){
            header("Location: ../pages/order_page.php?error=card number is required");
            exit();
        }
        else if(empty($ex)){
            header("Location: ../pages/order_page.php?error= expire is required");
            exit();
        }
        else if(empty($security)){
            header("Location: ../pages/order_page.php?error=security is required");
            exit();
        }
        else{
            $retrivedata = "SELECT * FROM registration;";
            $result = mysqli_query($conn,$retrivedata);

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                     
                         
                        exit();
                    }

                    else{
                        $query = "INSERT INTO orderbook VALUES('$fname','$lname','$address','$city','$state','$zip','$cardno','$ex','$security')";
                        mysqli_query($conn,$query);
                        header("Location: ../pages/confrimd.php");
                        exit();
                    }
                }
            }

            else{
                $query = "INSERT INTO orderbook VALUES('$fname','$lname','$address','$city','$state','$zip','$cardno','$ex','$security')";
                mysqli_query($conn,$query);
                header("Location: ../pages/confrimd_page.php");
                exit();
            }
        }
    }        
}

else{
    header("Location: ../pages/register_page.php");
    exit();
}
?>
        
        // Check connection
        if($con === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        

        


        
        

        $sql="INSERT INTO orderbook VALUES('$fname','$lname','$address','$city','$state','$zip','$cardno','$ex','$security')";
        
        if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully.";
            echo nl2br("\n$fname\n $lname\n$address \n $city\n "
            . "$state \n $zip\n $cardno \n $ex \n $security  ");
        
             

            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
        
        // Close connection
        mysqli_close($con);
        ?>
    </center>
</body>

</html>