<?php

include_once 'config.php';
include_once 'functions.php';

$text = getRequestText();
editText($text);
header('Location:editmainpage.php');
