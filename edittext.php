<?php

include_once 'config.php';
include_once 'functions.php';

$text = getRequestText();
addText($text);
header('Location:editmainpage.php');
