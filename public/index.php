<?php
$url_access = $_SERVER['REQUEST_URI'];
$final_name = explode('/', $url_access);
$final_name = end($final_name);

if ($final_name != '') {
    if (file_exists(DOCUMENT_ROOT . $url_access)) {
        $file_path = DOCUMENT_ROOT . $url_access;

        // Detecta automaticamente o tipo MIME
        $content_type = mime_content_type($file_path) ?: 'application/octet-stream';

        header('Content-Type: ' . $content_type);
        header('Content-Length: ' . filesize($file_path));

        readfile($file_path);
        exit;
    } else {
        require_once DOCUMENT_ROOT . '/pages/code/404.html';
    }
} else {
    require_once DOCUMENT_ROOT . '/pages/code/404.html';
}