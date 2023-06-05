<?php 
session_start();

require 'src/models.php';

visitors($_SERVER['REMOTE_ADDR']);
$medias = medias();

require 'templates/about.php';