<?php

include_once 'config.php';
include_once 'functionstextedit.php';

$text = getRequestText();
addText($text);
header('Location:mainpage.php');
