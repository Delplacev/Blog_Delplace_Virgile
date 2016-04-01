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
                if (isset($_GET['idArticle'])) { // Si on recherche SINON on affiche tout
                   $idArticle = $_GET['idArticle'];
                   $query = "SELECT * FROM article WHERE id = " . $idArticle;


                $result = mysql_query($query);

                while ($ligne = mysql_fetch_assoc($result)) {
                    // Affichage des article
                    echo '<center><h3>' . $ligne[titre] . '</h3><br>';
                    echo '<img src="assets/include/vignettejpg.php?imgSrc=' . $ligne[nomImage] . '" ><br><br>';
                    echo $ligne[description] . '<br> <br><p class="rigth"> date : ' . $ligne[date] . '<span class="glyphicon glyphicon-heart"></span>';
                    //On recupère la nombre de vote et on 'laffiche
                    $query = "SELECT count(*) as nbVote FROM `vote` WHERE idArticle = $ligne[id]";
                    $resultVote = mysql_query($query);

                    $nbVote = mysql_fetch_assoc($resultVote);

                    if ($nbVote == true) {
                        echo $nbVote["nbVote"];
                    } else {
                        echo 0;
                    }
                    //On cherche si l'utilsateur a dej voter pour cette article ou non
                    $query = "SELECT * FROM `vote` WHERE idArticle = $ligne[id] AND ipVote = '" . $_SERVER["REMOTE_ADDR"] . "'";

                    $resultIpVote = mysql_query($query);
                    $ipVote = mysql_fetch_assoc($resultIpVote);
                    if ($ipVote == true) {
                        echo '<p>Vous avait deja voter pour cette article</p>';
                    } else {
                        echo '<a data-idarticle="' . $ligne[id] . '" id="addVote">Voter</a>';
                    }
                    echo"</p>";
                    if ($connect == true) {
                        echo '<a href="editerArticle.php?idArticle=' . $ligne[id] . '"><input type="button" class="btn-primary" value="Editer"></a>';
                        echo '<a href="assets/include/serviceWeb.php?action=deleteArticle&idArticle=' . $ligne[id] . '"><input type="button" class="btn-primary" id="btnSuppr" value="Suprimer "></a></br></center><hr>';
                    } else {
                        echo "<a href='connexion.php'>Connecter vous pour editer l'article</a>";
                    }
                }
            }
                mysql_close($link);
                ?>
            </div>
        </div>

    </div>
</div>

<?php include('assets/include/footer.php') ?>
