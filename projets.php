<?php 
session_start();

require 'src/models.php';

visitors($_SERVER['REMOTE_ADDR']);
$medias = medias();
$sliders1 = slide1();
$categories = categories();
$projects = projects();

require 'templates/projets.php';