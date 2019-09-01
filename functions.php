<?php

function getAllPictures(){
    $photo = $_FILES['photo'];
    $dir = 'photos/' . $photo['name'];
    $pictures = scandir($dir);
    return $pictures;
}

function getRequestText() {
    $text = $_POST['text'];
    return $text;
}

function getText() {
    if (!file_exists(MAINPAGE_TEXT)) {
        return false;
    } else {
        $content = file_get_contents(MAINPAGE_TEXT);
        if (!$content) {
            return false;
        } else {
            $texts = json_decode($content, true);
            return $texts;
        }
    }
}

function saveText($texts) {
    $content = json_encode($texts);
    $res = file_put_contents(MAINPAGE_TEXT, $content);
    return (bool) $res;
}

function addText($text) {
    $texts = getNews();
    $texts[] = $text;
    saveNews($texts);
}