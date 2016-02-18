<?php
include('assets/include/header.php');
//connection a la base de données
include('assets/protected/connectBDD.php');
?>

<div class="container">
<?php include('assets/include/menu.php') ?>  

    <div class="content">
        <div class="row">
            <div class="span8">
                <!-- notifications -->

                <!-- contenu -->
                <?php
                if (isset($_POST['keyWord'])) { // Si on recherche SINON on affiche tout
                    $keyWord = explode(" ", $_POST['keyWord']); // On prend tout les mots clée
                    $query = "SELECT * FROM `article` WHERE `titre` LIKE '%" . $keyWord[0] . "%' OR `description` LIKE '%" . $keyWord[0] . "%' OR `date` LIKE '%" . $keyWord[0] . "%'";

                    // On créer la requete pour rechercher avec tous les mots clée
                    for ($i = 1; $i < count($keyWord); $i++) {
                        $query .= "OR `titre` LIKE '%" . $keyWord[$i] . "%' OR `description` LIKE '%" . $keyWord[$i] . "%' OR `date` LIKE '%" . $keyWord[$i] . "%'";
                    }
                } else {
                    $query = "SELECT * FROM article";
                }


                $result = mysql_query($query);

                while ($ligne = mysql_fetch_assoc($result)) {
                    // Affichage des article
                    echo '<center><h3>' . $ligne[titre] . '</h3><br>';
                    echo '<img src="assets/include/vignettejpg.php?imgSrc=' . $ligne[nomImage] . '" ><br><br>';
                    echo $ligne[description] . '<br> <br><p class="rigth"> date : ' . $ligne[date] . '</p>';
                    if ($connect == true) {
                        echo '<a href="editerArticle.php?idArticle=' . $ligne[id] . '"><input type="button" class="btn-primary" value="Editer"></a>';
                        echo '<a href="assets/include/action.php?action=deleteArticle&idArticle=' . $ligne[id] . '"><input type="button" class="btn-primary" id="btnSuppr" value="Suprimer "></a></br></center><hr>';
                    } else {
                        echo "<a href='connexion.php'>Connecter vous pour editer l'article</a>";
                    }
                }
                mysql_close($link);
                ?>
            </div>
        </div>

    </div>
</div>

<?php include('assets/include/footer.php') ?>


