<?php

session_start();
require 'functions.php';

if (isset($_GET['logout'])) {
    logOutProfile();
}

require 'partials/head.php';
require 'partials/header.php';
?>

<section class="container">
    
    <?php require 'partials/home_ad_aside.php' ;?>

    <section class="posts">
        <?php require 'partials/home_post_article.php';?>
    </section>

    <?php require 'partials/home_grid_section.php';?>
</section>

