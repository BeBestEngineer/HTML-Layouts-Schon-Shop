<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE|E_ALL);
ini_set('display_errors', 1);


if ( isset( $_GET['page'] ) ) {
    require_once 'global_pages_data/pages_data.php';
    
    require_once 'other_modules/_head_html/_head_html.php';
    require_once 'page_builders/page_wrapper.php';
    require_once 'other_modules/_end_html/_end_html.php';
    
} else {
    header('Location: '.$_SERVER['REQUEST_URI'].'?page=home');
}


?>
