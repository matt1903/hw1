<!DOCTYPE html>
<?php
    session_start();

    if(isset($_POST["email"]) && isset($_POST["psw"]) && isset($_POST["nome"]) && isset($_POST["surname"]) && isset($_POST["username"]))
    {
        $conn = mysqli_connect("localhost", "root", "", "arduDB");
        // Escape dell'input
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["psw"]);
        $name = mysqli_real_escape_string($conn, $_POST["nome"]);
        $surname = mysqli_real_escape_string($conn, $_POST["surname"]);
        $username = mysqli_real_escape_string($conn, $_POST["username"]);

        $search = "SELECT * FROM USER WHERE email = '$email'";
        $ris = mysqli_query($conn, $search);
        
        // Verifica la correttezza delle credenziali
        if(mysqli_num_rows($ris) > 0){
            $registeredUserError = true;
        }
        else{ 
            $password = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO USER (NOME, SURNAME, EMAIL, PSW, USERNAME) VALUES ('$name', '$surname', '$email', '$password', '$username')";
            $res = mysqli_query($conn, $query);

            if($res === true){
                $ris = mysqli_query($conn, $search);
                $row = $ris -> fetch_assoc();
                $_SESSION["ID"] = $row["ID"];
                $_SESSION["email"] = $email;
                
                header("Location: index_arduino.php");
                exit;
            }
            else{
                echo "errore nella registrazione : " .$conn->error;
            }
        }
        mysqli_close( $conn );
    }
?>
<html>
    <head>
        <link rel = "stylesheet" href = "register.css">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />  <!--fine font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   <!-- google fonts -->
        <script src = 'register.js' defer></script>
    </head>
    <body>
        <div id = 'root'>
            <header>
                <div id = 'header-div'>
                    <a href = "index_arduino.php">
                        <button id = 'back-arrow-btn'>
                            <span class="material-symbols-outlined">arrow_back</span>
                        </button>
                    </a>
                    <div id = 'long-div-logo'>
                        <svg width="80" height="40" viewBox="0 0 80 40" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M80 19.5122C80 8.74488 71.145 0 60.2915 0C59.2922 0 58.2651 0.0569699 57.2658 0.22788C48.8272 1.45273 43.1645 7.69094 40 12.4764C36.8355 7.69094 31.1728 1.45273 22.7342 0.22788C21.7349 0.0854549 20.7078 0 19.7085 0C8.8272 0 0 8.74488 0 19.5122C0 30.2795 8.85496 39.0244 19.7085 39.0244C20.7078 39.0244 21.7349 38.9674 22.762 38.7965C31.2006 37.5432 36.8633 31.305 40.0278 26.5195C43.1922 31.305 48.855 37.5432 57.2935 38.7965C58.2929 38.9389 59.3199 39.0244 60.347 39.0244C71.145 39.0244 80 30.2795 80 19.5122ZM21.7627 31.9601C21.0687 32.074 20.3748 32.1025 19.6808 32.1025C12.5191 32.1025 6.71758 26.434 6.71758 19.5122C6.71758 12.5618 12.5469 6.92183 19.7086 6.92183C20.4025 6.92183 21.0965 6.9788 21.7904 7.06425C29.7571 8.23213 34.6149 16.2934 36.2804 19.5122C34.5871 22.7595 29.7016 30.7922 21.7627 31.9601ZM58.2095 7.06425C50.2428 8.23213 45.3573 16.2934 43.7195 19.5122C45.3573 22.731 50.2428 30.7922 58.2095 31.9601C58.9034 32.0456 59.5974 32.1025 60.2914 32.1025C67.4253 32.1025 73.2546 26.4625 73.2546 19.5122C73.2546 12.5903 67.453 6.92183 60.2914 6.92183C59.5974 6.92183 58.9034 6.9788 58.2095 7.06425ZM14.1494 17.422H26.0689V21.1734H14.1494V17.422ZM65.7917 21.2007H61.7721V25.1437H57.9199V21.2007H53.9002V17.422H57.9199V13.479H61.7721V17.422H65.7917V21.2007ZM76.5107 3.70364C76.5107 2.74527 77.2923 1.9512 78.2414 1.9512C79.2184 1.9512 80 2.74527 80 3.70364C80 4.71678 79.2184 5.45609 78.2414 5.45609C77.2923 5.45609 76.5107 4.66201 76.5107 3.70364ZM78.2414 2.22504C79.0788 2.22504 79.693 2.90959 79.693 3.70366C79.693 4.60727 79.0788 5.18229 78.2414 5.18229C77.4877 5.18229 76.8178 4.60727 76.8178 3.70366C76.8178 2.82744 77.404 2.22504 78.2414 2.22504ZM77.4039 2.60835H78.2693C78.9392 2.60835 79.1904 2.88217 79.1904 3.34766C79.1904 3.64886 79.0509 3.86792 78.7717 3.97745L79.1904 4.79891H78.5763L78.2693 4.05959H77.9622V4.79891H77.4039V2.60835ZM78.6043 3.32034C78.6043 3.59416 78.4647 3.67631 78.2135 3.67631L77.9344 3.70369V2.99176H78.2135C78.5206 2.99176 78.6043 3.07391 78.6043 3.32034Z"></path>
                        </svg>
                    </div>
                </div>
            </header>
            <div id = 'main'>
                <div id = 'content'>
                    <?php
                        if(isset($registeredUserError)){
                            echo "<div id = 'rm-hd'>
                                        <div class = 'empty-fields'>
                                            <span class='material-symbols-outlined' id = 'error-icon'>error</span>
                                            <span>This account is already in use.</span>
                                        </div>
                                    </div>";
                        }
                    ?>
                    <h1>Register now to Arduino</h1>
                    <!--    div di errore per credenziali non idonee-->
                    <div class = "hidden" id = "err-ps">
                        <div class = 'empty-fields'>
                            <span class = 'material-symbols-outlined'>error</span>
                            <span>Password too weak. You need at least a number, a special character, an uppercase and a lowercase letter, and it must be 8 letter long.</span>
                        </div>
                    </div>
                    <div class = "hidden" id = "err-email">
                        <div class = 'empty-fields'>
                            <span class = 'material-symbols-outlined'>error</span>
                            <span>Email not valid.</span>
                        </div>
                    </div>

                    <form name = 'credentials' method = 'POST' id = "reg-form">
                        <input type = 'text' placeholder = "Name" class = 'field' name = 'nome' value = '' required>
                        <input type = 'text' placeholder = "Surname" class = 'field' name = 'surname' value = '' required>
                        <input type = 'text' placeholder = "Username" class = 'field' name = 'username' value = '' required>
                        <input type = 'email' placeholder = "Email" class = 'field' name = 'email' value = '' id = "email" required>
                        <input type = 'password' placeholder="Password" class = 'field' name = 'psw' value = '' id = "password" required>
                        <input type = 'submit' value = 'REGISTER' id = 'sub' name = 'submit'>
                    </form>
                    <div id = 'register'>You already have an account? <a href="login.php"><b>Sign in now.</b></a></div>
                </div>
            </div>
        </div>
        <aside id = 'side'></aside>
    </body>
</html>