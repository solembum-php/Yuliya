<?php

include_once 'config.php';
include_once 'functionstextedit.php';

$new_text = getRequestText();
var_dump($new_text);
header('Location:mainpage.php');
