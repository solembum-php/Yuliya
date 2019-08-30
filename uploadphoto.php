<?php

const PHOTO_MAX_SIZE = 5 * 1024 * 1024;
const PHOTO_AVAILABLE_TYPES = array(
    'image/jpeg',
    'image/png',
);
const PHOTO_DIR = 'photos';

if (!isset($_FILES['photo'])) {
    $message = 'no photo for upload';
} else {
    $photo = $_FILES['photo'];
    if ($photo['error'] != 0) {
        switch ($photo['error']) {
            case UPLOAD_ERR_INI_SIZE:
                $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                break;
            case UPLOAD_ERR_PARTIAL:
                $message = "The uploaded file was only partially uploaded";
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = "No file was uploaded";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $message = "Missing a temporary folder";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $message = "Failed to write file to disk";
                break;
            case UPLOAD_ERR_EXTENSION:
                $message = "File upload stopped by extension";
                break;

            default:
                $message = "Unknown upload error";
                break;
        }
    } else if (!in_array($photo['type'], PHOTO_AVAILABLE_TYPES)) {
        $message = 'unavailable type of file';
    } else if ($photo['size'] > PHOTO_MAX_SIZE) {
        $message = 'file too large';
    } else {
        $photo_path = PHOTO_DIR . DIRECTORY_SEPARATOR . $photo['name'];
        if (move_uploaded_file($photo['tmp_name'], $photo_path)) {
            header('Location:photogallery.php');
//echo 'file was uploaded';
        } else {
            echo 'move uploaded file failed';
        }
    }
}
if (!empty($message)) {
    echo $message;
}    

