<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Intranet v12</title>
</head>
<body>
<h1> Inscription </h1>

<form action="index.php" method="post">
    <input type="text" name="username" placeholder="identifiant"></br>
    <input type="password" name="password" placeholder="mot de passe"></br>
    <input type="password" name="repeatpassword" placeholder="mot de passe"></br>
    <input type="submit" value="S'inscrire" name="submit">
</form>

</body>
</html>


<?php


    if(isset($_POST['submit']))  // Si le bouton s'inscrire est cliquer.
    {
        $username = $_POST['username']; // On stock dans une variable ce qui est saisi dans le champ username.
        $password = $_POST['password'];
        $repeatpassword = $_POST['repeatpassword'];

        if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['repeatpassword']) && !empty($_POST['repeatpassword'])))
        {
            if($password==$repeatpassword)
            {
                // Connection
                try {
                    $bdd = new PDO('mysql:dbname=hichem;host=localhost', 'root', 'Gunsnroses02');

                } catch (PDOException $exception) {
                    die($exception->getMessage());
                }

                /*// Insertion
                $sql= ("INSERT INTO 'users' (id ,username,password) VALUES (NULL,:usern, :passwd);");
                $req = $bdd->prepare($sql);
                $req->bindValue(':usern', $username);
                $req->bindValue(':passwd', $password);
                $req->execute();

                die("Inscription terminer");*/

                $req = $bdd->prepare('INSERT INTO users(id,username,password) VALUES(NULL, :username, :password)');
                $req->execute(array(
                    'username' => $username,
                    'password' => $password));

                die("Inscription terminer");

            }else echo "Mots de passes différents";
        }else echo "Veuillez saisir tout les champs";

    }

    ?>






