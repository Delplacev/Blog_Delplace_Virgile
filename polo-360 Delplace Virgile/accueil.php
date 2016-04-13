<?php $this->inc('elements/header.php'); ?>

            <div class="slider">
                <div class="slider_cont">
                    <div class="separater_hd"></div>
                    <div class="slider_image">
                        <!--<img src="<?php echo $this->getThemePath(); ?>/img/Slider.png">-->
                        <?php
                        $a = new Area('contenu');
                        $a -> display($c);
                    ?>
                        <ul class="bullets">


                        </ul>
                        <div class="clear"></div>
                    </div>
                    <h1>Bienvenue sur le site de Delplace Virgile</h1>
                </div>
                <div class="clear"></div>
            </div>
            <div class="container_12">
                <div class="grid_4 logic">
                    <?php
                        $a = new Area('Col1');
                        $a -> display($c);
                    ?>
                </div>


                <div class="grid_4 solution">
                    <?php
                        $a = new Area('Col2');
                        $a -> display($c);
                    ?>
                </div>


                <div class="grid_4 culture">
                    <?php
                        $a = new Area('Col3');
                        $a -> display($c);
                    ?>
                </div>

                <div class="clear"></div>
                <div class="sep"></div>
                <div class="grid_4 social_con">

                    <div class="social">

                        <?php
                            $a = new Area('Social');
                            $a -> display($c);
                        ?>
                    </div>

                </div>
                <div class="grid_4 contact">

                    <?php
                            $a = new Area('Contact');
                            $a -> display($c);
                        ?>
                </div>
                <div class="grid_4 news">
                    <h3>News Updates</h3>
                    <ul>
                        <li>
                            <a href="#"><img src="<?php echo $this->getThemePath(); ?>/img/news_1.png" alt="1st News"  title="1st News Title"/></a>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo $this->getThemePath(); ?>/img/news_2.png" alt="2nd News"  title="2nd News Title"/></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna.</p>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo $this->getThemePath(); ?>/img/news_3.png" alt="3rd News"  title="3rd News Title"/></a>
                            <p>Vestibulum erat wisi, condimentum sed, commodo vitae</p>
                            <div class="clear"></div>
                        </li>
                    </ul>
                    <a href="#" class="blog">Visit our blog</a>
                </div>
            </div>
            <div class="clear"></div>

<?php $this->inc('elements/footer.php'); ?>
