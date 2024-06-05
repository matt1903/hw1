<?php
    include "connectionDB.php";
    session_start();

    //inserimento della
    if(isset($_SESSION["ID"]) && isset($_SESSION["email"])){
        $ID_USER = $_SESSION["ID"];
        $ID_PROD = $_GET["ID"]; 
        $quantita = $_GET["QUANTITY"];

        $r_ins = "INSERT INTO CART (ID_PRODUCT, ID_USER, QUANTITA) VALUES ('$ID_PROD', '$ID_USER', '$quantita')";
        $res = mysqli_query($db, $r_ins);

        if($res === true){
            echo "Quantita aumentata";
        }
        else{
            header("Location: login.php");
            exit;
        }
        header("Location: carrello.php");
    }
    else{
        header("Location: login.php");
    }
?>