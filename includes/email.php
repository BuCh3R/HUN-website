<?php

if(isset($_POST['comment-submit'])){
    require 'dbh.inc.php';

    $personName = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['person-name']));
    $personMail = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['person-mail']));
    $personMsg = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['thisisit']));
    $subject = ''. $personName . 'har et spørgsmål';
    $message = ''. $personMsg .' ';
    $to = "hun10@balbonet.dk";

    $headers = "From: $personMail \r\n";
    $headers .= "Reply-To: $personMail \r\n";
    $headers .= "Return-Path: $personMail\r\n";
    $headers .= "Content-type: text/html\r\n";

    
    mail($to, $subject, $message, $headers);
    header("Location: ../kontakt.php?mail=sent");
    exit();

    
}else{
    header("Location: ../kontakt.php");
}
    
