<?php
session_start();
include "functions/filtrages.php";
require_once "../config/pdo.php";
$titre = "Ajouter Oeuvres";
$nav = "ajouter oeuvres";
include "includes/pages/header.php";
?>

<section id="super_grid_container">
    <div id="grid_container_dash">
        <div class="left">
            <?php include "./includes/components/sidebar_left.php"; ?>
        </div>
        <div class="middle">
            <?php include "./includes/components/form_add_oeuvres.php"; ?>
        </div>

    </div>
</section>