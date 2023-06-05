<?php 

session_start();

require 'src/models.php';

visitors($_SERVER['REMOTE_ADDR']);
$sliders1 = slide1();
$sliders2 = slide2();
$sliders3 = slide3();
$residentiels = residentiels();
$hospitals = hospitals();
$commercials = commercials();
$posts = posts();
$medias = medias();

require 'templates/home.php';