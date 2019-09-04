<?php

function getRequestText() {
    $new_text = $_GET['new_text'];
    $text = array($new_text);
    return $text;
}

function getThisText() {
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


function showText($text){
    $texts = getThisText();
    $texts[] = $text;
    saveText($texts);
}

