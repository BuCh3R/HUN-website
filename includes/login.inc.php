<?php

if(isset($_POST['login-submit'])){

    require 'dbh.inc.php';

    $name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['name']));
    $password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['pwd']));

    if(empty($name) || empty($password)){
        header("Location: ../crud.php?error=empty_fields");
        exit();
    }
    else {
        $sql = "SELECT * FROM adminlogin WHERE uidName=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../crud.php?error=sql_error");
            exit(); 
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $name);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($results)){
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if($pwdCheck == false){
                    header("Location: ../crud.php?error=wrong_pwd");
                    exit();
                }
                else if ($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userName'] = $row['uidName'];
                    
                    header("Location: ../crud.php?login=succes");
                    exit();
                }
                else{
                    header("Location: ../crud.php?error=wrong_pwd");
                    exit();
                }
            }
            else {
                header("Location: ../crud.php?error=nouser");
                exit();
            }
        }
    }

}
else {
    header("Location: ../index.php");
}