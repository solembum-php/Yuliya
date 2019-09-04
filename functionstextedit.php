<?php

function getRequestText() {
    $new_text = $_GET['new_text'];
    return $new_text;
}

function getText() {
    if (!file_exists(MAINPAGE_TEXT)) {
        return false;
    } else {
        $content = file_get_contents(MAINPAGE_TEXT);
        if (!$content) {
            return false;
        } else {
            $new_texts = json_decode($content, true);
            return $new_texts;
        }
    }
}

function saveText($new_texts) {
    $content = json_encode($new_texts);
    $res = file_put_contents(MAINPAGE_TEXT, $content);
    return (bool) $res;
}

function addText($new_text) {
    $new_texts = getText();
    $new_texts[] = $new_text;
    saveText($new_texts);
}

