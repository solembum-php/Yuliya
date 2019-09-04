<?php

function getRequestText() {
    $new_text = $_GET['new_text'];
    $text = array(
        'new_text' => $new_text,
    );
    return $text;
}

//function getRequestTextKey() {
//    $key = $_GET['index'];
//    return $key;
//}

function getTexts() {
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

function saveTexts($texts) {
    $content = json_encode($texts);
    $res = file_put_contents(MAINPAGE_TEXT, $content);
    return (bool) $res;
}

function addTexts($text) {
    $texts = getTexts();
    $texts[] = $text;
    saveTexts($texts);
}

//function deleteNews($key) {
//    $news_items = getNews();
//    unset($news_items[$key]);
//    saveNews($news_items);
//}
