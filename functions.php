<?php




// Custom post types

// add your code here

//Taxonomies

// add your code here

// This function will load all the php files that are inside the inc folder inside the template.

if ( ! defined( 'WPINC' ) ) {
	die;
} elseif ( ! defined( 'ABSPATH' ) ) {
    exit;
} else {
$listmodules = array();
$modules = array(
    get_template_directory() .'/inc/cpt',
    get_template_directory() .'/inc/tax',
    get_template_directory() .'/inc'
    
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