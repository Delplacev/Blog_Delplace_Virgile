<?php
include('assets/include/header.php');
//connection a la base de données
?>
<?php
if ($connect == true) {
    include('assets/protected/connectBDD.php');
    ?>
    <div class="container">
        <?php include('assets/include/menu.php') ?>
        <div class="content">
            <div class="row">
                <div class="span8">
                    <?php
                    //recupération des données
                    $query = "SELECT * FROM article WHERE id = " . $_GET[idArticle];

                    $result = mysql_query($query);
                    $ligne = mysql_fetch_assoc($result);

                    //Affichage du formulaire avec les données recupére
                    ?>
                    <form action="editerArticle.php"  enctype="multipart/form-data" method="post">
                        <label class="col-xs-12 text-center">Titre de l'article</label>
                        <input type="text" name="titreArticle" value="<?php echo $ligne[titre] ?>" class="form-control">
                        <input type="text" name="idArticle" value="<?php echo $_GET[idArticle] ?>" class="hidden">
                        <label class="col-xs-12 text-center">Description de l'article</label>
                        <textarea name="descriptionArticle" style="height: 300px"class="form-control"><?php echo $ligne[description] ?></textarea><br>
                        <center>
                            <img src="assets/include/vignettejpg.php?imgSrc=<?php echo $ligne[nomImage] ?>" ><br>
                            <hr><label class="col-xs-12 text-center" title="Recherchez le fichier à uploader !">Modifier l'image:</label>
                            <input name="fichier" type="file" id="fichier_a_uploader" /><hr>
                            <input type="submit" class="btn-primary" value="editer">
                        </center>
                    </form>
                </div>

            </div>
        </div>

    </div>
    </div>
    <?php
    /* SI ON A DES DONNES EN POST POUR L'AJOUT D'ARTICLE */
    if (($_POST[titreArticle] != "") && ($_POST[descriptionArticle] != "")) {
        include('assets/protected/connectBDD.php');
        mysql_real_escape_string();
        $query = "";
        /* SI ON A UN FICHIER ON UPLOAD */
        $idArticle = $_POST[idArticle];
        $titreArticle = addslashes($_POST[titreArticle]);
        $descriptionArticle = addslashes($_POST[descriptionArticle]);
        if (!empty($_FILES['fichier']['name'])) {
            $nomImage = $_FILES['fichier']['name'];
            if (move_uploaded_file($_FILES['fichier']['tmp_name'], "assets/images/" . $nomImage)) {
                $message = 'Upload réussi !';
            } else {
                // Sinon on affiche une erreur systeme
                $message = 'Erreur';
            }

            //Mise a jour de l'article
            $query = "UPDATE `article` ";
            $query .= " SET `titre` = '" . $titreArticle . "', `description` = '" . $descriptionArticle;
            $query .= "', `nomImage` = '" . $_FILES['fichier']['name'] . "' WHERE `id` = " . $idArticle . ";";
        } else {
            //Mise a jour de l'article
            $query = "UPDATE `article` ";
            $query .= " SET `titre` = '" . $titreArticle . "', `description` = '" . $descriptionArticle;
            $query .= "' WHERE `id` = " . $idArticle . ";";
        }

        $result = mysql_query($query);

        if (!$result) {
            die('Requête invalide : ' . mysql_error());
        } else {
            ?>
            <!--Affichahe d'une popup pour confirmer la modification-->
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <script type="text/javascript">
                alert("Votre article à bien était modifier");
                window.location.href = "index.php";
            </script>
            <?php
        }
    }
    /* FIN SI */
} else {
    include("connexion.php");
}
?>


<?php include('assets/include/footer.php') ?>