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
                    $tab = explode(" ", $_POST['keyWord']); // On prend tout les mots clée

                    $query = 'SELECT * FROM article WHERE';

                    $count = count($tab);
                    for ($i = 0; $i < $count; $i++) {
                        $query .= ' (titre LIKE "%' . $tab[$i] . '%" OR description LIKE "%' . $tab[$i] . '%")';
                        if ($i + 1 < $count)
                            $query .= ' AND';
                    }
                } else {
                    $query = "SELECT * FROM article";
                }
                ?>
                <div id="slideshow" class="center-block" >
                    <ul class="bjqs">
                        <?php
                        $result = mysql_query($query);
                        while ($ligne = mysql_fetch_assoc($result)) {
                            echo '<li  style="background-image:url(assets/images/' . $ligne[nomImage] . ');background-position: center;background-size: cover;">'
                            . '<div class="elementSlider"><center><h3><a href="show.php?idArticle=' . $ligne[id] . '"">' . $ligne[titre] . '</a></h3><br>';
                            echo '<div class="descSlider col-xs-12">' . $ligne[description] . '</div></div></li>';
                        }
                        ?>
                    </ul>
                </div>
                <hr>
                <?php
                $result = mysql_query($query);

                if (mysql_num_rows($result) == 0) {
                    echo "<p>Aucune résultat ne correspond à votre rcherche</p>";
                }
                while ($ligne = mysql_fetch_assoc($result)) {
                    // Affichage des article

                    echo '<center><h3><a href="show.php?idArticle=' . $ligne[id] . '"">' . $ligne[titre] . '</a></h3><br>';
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
                }
                mysql_close($link);
                ?>
            </div>
        </div>

    </div>
</div>

<?php include('assets/include/footer.php') ?>
