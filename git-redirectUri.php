<?php
    $ID = require "git-IDs.php";
    $client_id = $ID["client_ID"];
    $redirect_url = 'http://localhost/HW1/git-callback.php';
    $redirect_url = urlencode($redirect_url);

    header("Location: https://github.com/login/oauth/authorize?client_id={$client_id}&redirect_uri={$redirect_url}&scope=repo");
?>
