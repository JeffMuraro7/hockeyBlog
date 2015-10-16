<?php
    require_once('mysqLinc.php');
    
    //Fonction pour la connection a la base de donnees.
    function getConnection(){

        static $dbh = null;

        try {
            if($dbh === null) {
                $dbh = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo "Erreur !: " . $e->getMessage() . "<br/>";
            echo 'N° : ' . $e->getCode();
            die('Could not connect to MySQL');
        }

        return $dbh;
    }
    
    //Fonction pour inserer les utilisateurs dans la base de donnees.
    function insertUser($prenom, $nom, $email, $birthday, $pseudo, $password, $status) {
        if((isset($prenom)) && (isset($nom)) && (isset($email)) && (isset($birthday)) && (isset($pseudo)) && (isset($password)) && (isset($status))) {
            $shaPassword = sha1($password);
            
            $user = getConnection()->prepare('INSERT INTO users (prenomUser, nomUser, emailUser, birthdayUser, pseudoUser, mdpUser, statutUser) VALUES(:prenom, :nom, :email, :birthday, :pseudo, :password, :status);');
            
            $user->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $user->bindParam(':nom', $nom, PDO::PARAM_STR);
            $user->bindParam(':email', $email, PDO::PARAM_STR);
            $user->bindParam(':birthday', $birthday, PDO::PARAM_STR);
            $user->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            $user->bindParam(':password', $shaPassword, PDO::PARAM_STR);
            $user->bindParam(':status', $shaPassword, PDO::PARAM_STR);

            $user->execute();
        }
    }
?>