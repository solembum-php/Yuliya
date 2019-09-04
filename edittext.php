<?php

include_once 'config.php';
include_once 'functionstextedit.php';

$text = getRequestText();
addTexts($text);

header('Location:mainpage.php');
