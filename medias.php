<?php 

session_start();

require 'src/models.php';

visitors($_SERVER['REMOTE_ADDR']);
$medias = medias();
$medias_alls = medias_all();

require 'templates/medias.php';