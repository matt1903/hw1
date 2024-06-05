<?php
    session_start();
    $ids = require("git-IDs.php");

    if(isset($_GET["code"])){
        $code = $_GET["code"];
        $client_id = $ids["client_ID"];
        $client_secret = $ids["client_secret"];
        $redirectUri = "http://localhost/HW1/git-callback.php";

        // Scambio del codice per un token di accesso
        $url = 'https://github.com/login/oauth/access_token';
        $data = array(
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'code' => $code,
            'redirect_uri' => $redirectUri
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));     //per ottenere l'access token
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', 'Accept: application/json'));
        
        $result = curl_exec($curl);
        curl_close($curl); 
        $response = json_decode($result, true);

        if (isset($response['access_token'])) {
            $access_token = $response['access_token'];
            $_SESSION['access_token'] = $access_token;

            // Ottenere le repository dell'organizzazione "arduino-libraries"
            $url = 'https://api.github.com/orgs/arduino-libraries/repos';

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'User-Agent: MyUserAgent',
                'Accept: application/vnd.github.v3+json', // specifica la versione dell'API
                "Authorization: token $access_token"
            ));
            $repos = curl_exec($ch);
            curl_close($ch);

            $repos = json_decode($repos, true);

            
/* questa parte è solo per la immediata visualizzazione, la rimuovero in futuro */
            echo "<h1>Le repository di arduino-libraries</h1><ul>";
            foreach ($repos as $repo) {
                echo "<li>" . htmlspecialchars($repo['name']) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Errore durante l'autenticazione.";
        }
    } else {
        echo "Errore: nessun codice di autenticazione fornito.";
    }
?>