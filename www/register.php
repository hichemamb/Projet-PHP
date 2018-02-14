<?php


    if(isset($_POST['submit']))  // Si le bouton s'inscrire est cliquer.
    {
        $username = $_POST['username'];// On stock dans une variable ce qui est saisi dans le champ username.
        $password = $_POST['password'];
        $repeatpassword = $_POST['repeatpassword'];
        $email = $_POST['email'];

        if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['repeatpassword']) && !empty($_POST['repeatpassword']))&& (isset($_POST['email']) && !empty($_POST['email'])))
        {
            if($password==$repeatpassword)


            {
                $password =md5($password);
                require_once "connexion.php";
                // Connection

                $ver = $bdd->prepare("SELECT * FROM users WHERE username='$username'");
                $ver->execute();
                $count = $ver->fetchColumn();

                if ($count == 0) {

                    $req = $bdd->prepare('INSERT INTO users(id,username,password,email) VALUES(NULL, :username, :password, :email)');
                    $req->execute(array(
                        'username' => $username,
                        'password' => $password,
                        'email' => $email));

                    header("Location: login.php?success");


                } else echo "Ce pseudo est deja utilisé";


            } else echo "Mots de passes différents";
        } else echo "Veuillez saisir tout les champs";

    }

    ?>
