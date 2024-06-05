<?php
    include "connectionDB.php";
    session_start();

    $req = "SELECT ID, PHOTO, NOME, SKU, BARCODE, PESO, PRICE FROM PRODUCT";
    $res = mysqli_query($db, $req);

    if($res -> num_rows > 0) {

        $prod = array();

        while($r = $res->fetch_assoc()) {
            $img = base64_encode($r['PHOTO']);      //questo serve a fare l'encode dell'immagine poiché messa in BLOB (formato)
            unset($r['PHOTO']);         //per l'ascolto di un nuovo encode

            $r['img'] = $img;   //aggiungi ogni immagine del prodotto alla var $img

            $prod[] = $r;       //aggiunge ogni prodotto al vettore
        }

        header('Content-Type: application/json');
        echo json_encode($prod);
    }
    else{
        echo "errore nel caricamento";
    }
?>