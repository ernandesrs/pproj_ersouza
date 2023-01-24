<?php

use MatthiasMullie\Minify;

$env = parse_ini_file(__DIR__ . "/../.env");

define("CONF_APP_URL", $env["APP_URL"] ?? null);
define("CONF_APP_ASSETS_URL", $env["APP_ASSETS_URL"] ?? null);

$data = require __DIR__ . "/data.php";
define("CONF_APP_DATA", $data ?? []);

if (($env["APP_ENV"] ?? null) === "local") {
    copy_assets_from_source();
}


/**
 * 
 * ****************************************************************************
 * 
 * FUNCTIONS
 * 
 * ****************************************************************************
 * 
 */

/**
 * Minify and copy scripts and styles from src/ to assets/
 * @return void
 */
function copy_assets_from_source()
{
    require(__DIR__ . "/../vendor/autoload.php");

    // css icon
    $cssIcons = [
        // __DIR__ . "/../src/styles/icons.css"
        __DIR__ . "/../node_modules/bootstrap-icons/font/bootstrap-icons.css"
    ];
    $cssIconMinifier = new Minify\CSS($cssIcons);
    $cssIconMinifier->minify(__DIR__ . "/../assets/css/icons.css");

    // css
    $css = [
        __DIR__ . "/../src/styles/styles.css",
    ];
    $cssMinifier = new Minify\CSS($css);
    $cssMinifier->minify(__DIR__ . "/../assets/css/styles.css");

    // JS
    $js = [
        __DIR__ . "/../src/scripts/scripts.js"
    ];
    $jsMinifier = new Minify\JS($js);
    $jsMinifier->minify(__DIR__ . "/../assets/js/scripts.css");
}