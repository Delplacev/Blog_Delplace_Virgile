<?php
error_reporting(0);
$linkBDD;

if (isset($_GET["action"])) { //Si on demande une action
    // CREATION D'UN OBJET ACTION POUR CONNECTION / INSCRIPTION
    $api = new actionSite;
}

class actionSite {
    
    //Constructeur
    public function __construct() {
        $this->connectBDD(); // CONNECTION BDD
        $func = $_GET["action"];

        if ((int) method_exists($this, $func) > 0) { // ON VERIFIE SUR SI LA METHODE EXISTE
            $this->$func(); // ON APPELLE LACTION
        } else {
            $this->valRetour = "la méthode n'existe pas";
        }

        mysql_close($linkBDD);
    }
    
    //Connection à la base
    private function connectBDD() {
        $server_name = "localhost";
        $user = "root";
        $mdp = "";

        //Connexion
        $linkBDD = mysql_connect($server_name, $user, $mdp);

        //Si connection fail
        if (!$linkBDD) {
            die('Connexion impossible : ' . mysql_error());
        }

        //select de la base 
        $db_selected = mysql_select_db('bdd_blog_delplace_virgile', $linkBDD);
        if (!$db_selected) {
            die('Impossible de sélectionner la base de données : ' . mysql_error());
        }
    }

    // SUPPRESION DE L'ARTICLE
    private function deleteArticle() {
        //SI les données on bien était transmis
        if (isset($_GET[idArticle])) {
            mysql_real_escape_string();

            $query = "DELETE  FROM `article` WHERE `id` = " . $_GET[idArticle];


            $result = mysql_query($query);

            if (!$result) {
                die('Requête invalide : ' . mysql_error());
            } else {
                ?>
                <!--Affichahe d'une popup pour confirmer la modification-->
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <script type="text/javascript">
                    alert("Votre article à bien était suprimer");
                    window.location.href = "../../index.php";
                </script>
                <?php
            }
        }
    }

    // Validation de la connection
    private function validConnection() {
        session_start();
        if (isset($_POST[email]) && isset($_POST[password])) {
            mysql_real_escape_string();
            $email = $_POST[email];
            $mdp = md5($_POST[password]);
            //Recuperation de l'utilisateur avec l'email et le mdp
            $query = "SELECT * FROM utilisateurs WHERE email = '" . $email . "' AND mdp = '" . $mdp . "'";
            //Execution de la requete
            $result = mysql_query($query);

            $ligne = mysql_fetch_assoc($result);
            $sid = md5($email . time()); // creation du SID
            //Si l'email et le mot de passe corresponde 
            if (($ligne[email] == $email) && ($ligne[mdp] == $mdp)) {
                // On met à jour le SID dans la base
                $sql = "UPDATE `blog`.`utilisateurs` SET `sid` = '$sid' WHERE `utilisateurs`.`email` = '$email'";
                mysql_query($sql);
                //On crée la variable de session
                $_SESSION["session"] = $sid;
                //création d'un cookie pour afficher un message
                setcookie("nomConnecter", $ligne[nom] . " " . $ligne[prenom], time() + 365 * 24 * 3600, "/");
                ?>
                <!--Affichahe d'une popup pour confirmer la connexion-->
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <script type="text/javascript">
                    alert("Connexion OK");
                    window.location.href = "../../index.php";
                </script>
                <?php
            } else {
                ?>
                <!--Affichahe d'une popup si l'email ou le mot de passe est erroner-->
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <script type="text/javascript">
                    alert("Connexion refuser , E-mail ou mot de passe erroné");
                    window.location.href = "../../connexion.php";
                </script>
                <?php
            }
        }
    }

    //Deconnexion
    private function deconnexion() {
        session_start();

        //delete cookie
        setcookie('nomConnecter', -1);
        //suppresion de la connection
        unset($_SESSION["session"]);
        session_destroy();
        ?>

        <!--Affichahe d'une popup pour confirmer la deconnexion-->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <script type="text/javascript">
            alert("Deconnectée");
            window.location.href = "../../index.php";
        </script>
        <?php
    }

    //Verification si l'utilisateur existe 
    private function verifUtilisateurExist($email, $mdp) {
        //Verification de l'email pour eviter les doublons dans la base
        if (isset($_POST[email]) && isset($_POST[password])) {
            mysql_real_escape_string();
            $email = $_POST[email];
            $mdp = md5($_POST[password]);

            $query = "SELECT * FROM utilisateurs WHERE email = '" . $email . "'";
            //Execution de la requete
            $result = mysql_query($query);

            $ligne = mysql_fetch_assoc($result);

            if ($ligne == true) {
                return true;
            } else {
                return false;
            }
        }
    }

    // Inscription
    private function inscription() {
        // Si le formulaire est remplit, on insert les données
        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordConfirm'])) {
            if (!$this->verifUtilisateurExist()) {
                mysql_real_escape_string();
                if ($_POST['password'] == $_POST['passwordConfirm']) {
                    //Recupération des données POST
                    $email = $_POST['email'];
                    $mdp = md5($_POST['password']);
                    $sid = md5($email . time());
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    //Ajout de l'utilisateur
                    $sql = "INSERT INTO utilisateurs (email, mdp, sid, nom, prenom) VALUES ('$email','$mdp','$sid','$nom','$prenom')";
                    $res = mysql_query($sql);
                } else {
                    ?>
                    <!--Affichahe d'une popup si les mots de passe ne corresponde pas-->
                    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                    <script type="text/javascript">
                        alert("Les mot de passe ne corresponde pas");
                        window.location.href = "../../inscription.php";
                    </script>
                    <?php
                }
            } else {
                ?>
                <!--Affichahe d'une popup si un utilisateur existe deja dans la base-->
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <script type="text/javascript">
                    alert("L'utilisateur existe deja dans la base veuillez saisir une autre adresse mail");
                    window.location.href = "../../inscription.php";
                </script>
                <?php
            }
            ?>

            <!--Affichahe d'une popup pour confirmer l'ajout-->
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <script type="text/javascript">
                alert("Inscription OK , connectez vous");
                window.location.href = "../../connexion.php";
            </script>
            <?php
        }
    }

}