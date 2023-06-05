<?php 

session_start();

require 'src/models.php';

visitors($_SERVER['REMOTE_ADDR']);
$medias = medias();
$medias_news = medias_news();
$posts = news();

require 'templates/news.php';