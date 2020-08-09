<?php

// Custom post types

// add your code here

//Taxonomies

// add your code here

// This function will load all the php files that are inside the inc folder inside the template.

$ruta = get_template_directory() .'/inc';
//echo $ruta;
$files = glob($ruta . '/*.php');
//print_r($files);
foreach ($files as $file) {
    if ($file != __FILE__) {
        include_once($file);
    }
}