<?php

include_once 'config.php';
include_once 'functionstextedit.php';

$text = getRequestText();
editText($text);
header('Location:editmainpage.php');
