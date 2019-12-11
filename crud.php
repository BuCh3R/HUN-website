<?php
session_start();
require 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>HUN | CRUD</title>
</head>
<body>
<header>
    <?php include 'header.php'; ?>
</header>
 
<?php


if(isset($_SESSION['userId'])){
    $sql ="SELECT * FROM textbox WHERE idText=1";
    $result = $conn->query($sql);
    if($row = mysqli_fetch_assoc($result)){
        $h1=$row['headline'];
        $text1=$row['textContent'];
    }
    $sql2 ="SELECT * FROM textbox WHERE idText=2";
    $result2 = $conn->query($sql2);
    if($row = mysqli_fetch_assoc($result2)){
        $h2=$row['headline'];
        $text2=$row['textContent'];
    }
    echo '<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
    </form>';
    echo '<form action="includes/crud.inc.php" method="post">
    <input type="hidden" name="boxId" value="1">
    <br>
    <h5>Venstre rubrik(1)</h5>
    <input type="text" name="content-headline" value="'.$h1.'">
    <br>
    <textarea class="resize-none textarea-class" name="content-text">'.$text1.'</textarea>
    <br>
    <button type="submit" name="change-text">Gem</button>
    </form>';
    echo '<form action="includes/crud.inc.php" method="post">
    <input type="hidden" name="boxId" value="2">
    <br>
    <h5>Højre rubrik(2)</h5>
    <input type="text" name="content-headline" value="'.$h2.'">
    <br>
    <textarea class="resize-none textarea-class" name="content-text">'.$text2.'</textarea>
    <br>
    <button type="submit" name="change-text">Gem</button>
    </form>';
    }else{  
    echo '<form action="includes/login.inc.php" method="post">
    <input type="text" name="name" placeholder="E-mail...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="login-submit">Login</button>
    </form>';
    } 
?>
<?php


?>

</body>
</html>
