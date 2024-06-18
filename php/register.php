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