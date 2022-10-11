<?php

if (!function_exists('template_path')) {
    function template_path()
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/templates';
    }
}

if (!function_exists('theme_header')) {
    function theme_header()
    {
        include_once(template_path() . '/partials/header.php');
    }
}

if (!function_exists('theme_footer')) {
    function theme_footer()
    {
        include_once(template_path() . '/partials/footer.php');
    }
}