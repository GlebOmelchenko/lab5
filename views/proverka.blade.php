<?php

//    session_start();
//    $_SESSION['phone'] = $_POST['phone'];
//    $connect = '../connect.php';
//    $norm = mysqli_query($connect, "SELECT `Phone` FROM `Phone` WHERE `Phone` = '$_SESSION[phone]'");
//    $n = mysqli_fetch_assoc($norm);
//    $norms = $n['phone'];
//    if($_SESSION['phone'] == NULL || !$norms ){ header('Location: account_avtor.html');
//    }else{
//        header('Location: account_vibor.html');
//    }

    if($_GET['phone']){
        echo $_GET['phone'];
        header('Location: account_vibor.blade.php');
    } else {
        echo "Error";
        header('Location: account_avtor.blade.php');
    }
?>
