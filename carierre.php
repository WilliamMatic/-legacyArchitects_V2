<?php 

session_start();

require 'src/models.php';

visitors($_SERVER['REMOTE_ADDR']);
$medias = medias();
$medias_carierres = medias_carierre();
$posts = news();

require 'templates/carierre.php';