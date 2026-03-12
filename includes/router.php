<?php

const ALLOW_METHODS = ['GET', 'POST'];
const INDEX_URI ='';
const INDEX_ROUTE = "home";

function nomalizeURI($uri) {
    $uri = explode('?', $uri)[0];
    $uri = strtolower(trim($uri, '/'));
    return ($uri == INDEX_URI) ? INDEX_ROUTE : $uri;
}

function notFound() {
    http_response_code(404);
    renderView('404');
    exit;
}

function getFilePath($uri) {
    return ROUTE_DIR . '/' . nomalizeURI($uri) . '.php';
}

function dispathch($uri, $method) {
    $uri = nomalizeURI($uri);
    $filePath = getFilePath($uri);

    $public_page = ['home', 'login'];
    if (!in_array($uri, $public_page) && !isset($_SESSION['student_id'])){
        echo "<script>
                alert('กรุณาเข้าสู่ระบบก่อน');
                window.location.href = '/login'
            </script>";
        exit;
    }

    if (!file_exists($filePath)) {
        notFound();
    } else {
        include $filePath;
        exit;
    }

    if (!in_array($method, ALLOW_METHODS)){
        notFound();
    }
}