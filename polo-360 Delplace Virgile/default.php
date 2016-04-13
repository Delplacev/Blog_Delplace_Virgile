<?php $this->inc('elements/header.php'); ?>
    </head>
    <body>
        <?php
        $a = new Area('Contenu');
        $a->display($c);
        ?>
       <?php $this->inc('elements/footer.php'); ?>