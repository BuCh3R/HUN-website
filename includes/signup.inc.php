<?php
if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $firstname = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['name']));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['pwd']));

    if(empty($firstname) || empty($password)){
        header("Location: ../index.php?error=empty_fields&uid=".$firstname."&pwd=".$password);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9+æøå+ÆØÅ]*$/", $firstname)) {
        header("Location: ../index.php?error=invalidusernamesymbol");
        exit();  
    }
    //////////-------------- cant have users with identical names ---------------////////////////
    // else{
    //     $sql = "SELECT * FROM users WHERE uidUsers='$username'";
    //         $result = mysqli_query($conn, $sql);
    //         $resultCheck = mysqli_num_rows($result);
           
    //         if ($resultCheck > 0) {
    //         header("Location: ../signup.php?error=userexist");
    //         exit();
   
    //     }
        else{
            $sql = "SELECT * FROM adminlogin WHERE uidName='$firstname'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
           
            if ($resultCheck > 0) {
            header("Location: ../index.php?error=user_exist");
            exit();
            } 
           
            else {

                $sql = "INSERT INTO adminlogin (uidName, pwdUsers) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.php?error=sqlerror");
                    exit(); 
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ss", $firstname, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?success");
                    exit();
                }
            }
           }
        }else {
            header("Location: ../index.php");
            exit();
    
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);