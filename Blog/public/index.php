<?php
require "../resources/bootstrap.php";
require "../resources/config.php";
require "../src/autoload.php";

#instance Main of the project

$app = new Main\Core();

#method reponsible for create all site

$app->handle();