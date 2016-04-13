<!DOCTYPE html>
<html>
    <head>
        <?php Loader::element('header_required'); ?>
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/style.css" />
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/960_12_col.css" />
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/reset.css" />
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/text.css" />
    </head>
    <body>
        <div id="wraper">
            <header>
                <div class="header_cont">
                    <div class="separater_hd"></div>
                    <div class="clear"></div>
                    <a href="#" class="logo"><img src="<?php echo $this->getThemePath(); ?>/img/logo.png"></a>
                    <!--<nav>
                        <ul>
                            <li><a href="#">Home<span>Back to home</span></a></li>
                            <li><a href="#">Product<span>What we have for you</span></a></li>
                            <li><a href="#">Services<span>Things we do</span></a></li>
                            <li><a href="#">Blog<span>Follow our updates</span></a></li>
                            <li><a href="#">Contact<span>Ways to reach us</span></a></li>
                        </ul>
                    </nav>-->
                    
                    <?php
                        $a = new GlobalArea('Menu');
                        $a -> display($c);
                    ?>
                    
                </div>
            </header>