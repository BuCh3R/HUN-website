<?php

if(isset($_POST['change-text'])){
    require 'dbh.inc.php';

    $idBox = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['boxId']));
    $headlineContent = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['content-headline']));
    $textContent = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['content-text']));

    $sql = "UPDATE textbox SET headline=?, textContent =? WHERE idText='$idBox'";
    $stmt = mysqli_stmt_init($conn);
    if(empty($idBox) || empty($headlineContent) || empty($textContent)){
        header("Location: ../crud.php?error=empty_fields");
        exit();
    }else if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ss", $headlineContent, $textContent);
        mysqli_stmt_execute($stmt);
        header("Location: ../crud.php?item=change_complete");
        exit();
    }

    
}


//     $sql = "INSERT INTO textbox (headline, textContent) VALUES (?, ?)";
//     $stmt = mysqli_stmt_init($conn);
//     if(!mysqli_stmt_prepare($stmt, $sql)) {
//         header("Location: ../crud.php?error=sqlerror");
//         exit(); 
//     }else{

//         mysqli_stmt_bind_param($stmt, "ss", $headlineContent, $textContent);
//         mysqli_stmt_execute($stmt);
//         header("Location: ../crud.php?success");
//         exit();
//     }
// }else {
//     header("Location: ../crud.php");
//     exit();

// }
// mysqli_stmt_close($stmt);
// mysqli_close($conn);


