<?php

include_once 'config.php';
include_once 'functionstextedit.php';

$new_text = getRequestText();
addText($new_text);
header('Location:mainpage.php');
