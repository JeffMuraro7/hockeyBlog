<!DOCTYPE html>

<?php
    include './FunctionPHP/function.php';
    
    $err_form = false;
    
    if(isset($_REQUEST['inscription'])) {
        
        if($_REQUEST['prenom']=="" || $_REQUEST['nom']=="" || $_REQUEST['email']=="" || $_REQUEST['birthday']=="" || $_REQUEST['pseudo']=="" || $_REQUEST['password']=="") {
            $err_form = true;
        } else {
            $err_form = false;
            
            $prenom = $_REQUEST['prenom'];
            $nom = $_REQUEST['nom'];
            $email = $_REQUEST['email'];
            $birthday = $_REQUEST['birthday'];
            $pseudo = $_REQUEST['pseudo'];
            $password = $_REQUEST['password'];
            $status = '0'; 
            
            insertUser($prenom, $nom, $email, $birthday, $equipe, $poste, $pseudo, $password, $status);
        }
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/myStyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/myFont.css" rel="stylesheet" type="text/css"/>
        <link href="css/myForm.css" rel="stylesheet" type="text/css"/>
        <title>Hockey Blog</title>
    </head>
    <body>
        <nav>
            <div id="links">
                <a href="index.php">Bienvenue</a>
                <a href="">Blog</a>
                <a href="">Contact</a>
                
                <span id="toolsNav">
                    <a href="">Se connecter</a>
                    <a href="inscription.php">S'inscrire</a>
                    <input type="search" placeholder="Chercher" />
                </span>
            </div>
        </nav>
        <header>
            <h1>Hockey Blog</h1>
            
            <span id="toolsHeader">
                <img src="img/facebook29.png" alt="" />
                <img src="img/twitter2.png" alt="" />
                <img src="img/google23.png" alt="" />
                <img src="img/logotype46.png" alt="" />
            </span>
        </header>
        <section>
            <article>
                <form method="post" action="">
                    <fieldset>
                        <legend>
                            <h1>Inscription</h1>
                        </legend>
                        <input type="text" name="prenom" placeholder="Prenom" autofocus />
                        <input type="text" name="nom" placeholder="Nom" />
                        <input type="email" name="email" placeholder="E-mail" />
                        <input type="date" name="birthday" placeholder="Date de naissance" />
                        <input type="text" name="pseudo" placeholder="Pseudo" />
                        <input type="password" name="password" placeholder="Mot de passe" /></br>
                        <input type="submit" value="Soumettre" name="soumettre" />
                    </fieldset>
                </form>
            </article>
            <aside>
                <h1>Categorie</h1>
                <ul>
                    <li><a href="">LNA</a></li>
                    <li><a href="">NHL</a></li>
                    <li><a href="">CHL</a></li>
                    <li><a href="">Equipe Suisse</a></li>
                    <li><a href="">Championnat du monde</a></li>
                </ul>
            </aside>
        </section>
        <footer>
            
        </footer>
    </body>
</html>
