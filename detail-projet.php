<?php 

session_start();

require 'src/models.php';

visitors($_SERVER['REMOTE_ADDR']);
$medias = medias();
$project_details = project_detail($_GET['id']);
require 'templates/detail-projet.php';