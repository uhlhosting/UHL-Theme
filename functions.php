<?php


if ( ! defined( 'WPINC' ) ) {
	die;
} elseif ( ! defined( 'ABSPATH' ) ) {
    exit;
} else {
$listmodules = array();
$modules = array(

    get_template_directory() .'/inc',
    get_template_directory() .'/inc/cpt',
    get_template_directory() .'/inc/tax'
    
);

foreach ($modules as $module){
    array_push($listmodules , glob($module . '/*.php') );  
}

$result = array();

foreach ($listmodules as $file) {

        $result = array_merge($result, $file);
}
foreach ($result as $files01) {
    if ($files01 != __FILE__) {
        include_once($files01);
        //print_r($files01);
    }
}
}