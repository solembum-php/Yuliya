<?php

function getAllPictures(){
    $photo = $_FILES['photo'];
    $dir = 'photos/' . $photo['name'];
    $pictures = scandir($dir);
    return $pictures;
}

