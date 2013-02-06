<?php
    header('Content-type: text/css');
    include_once('../../../perch/runtime.php');
    PerchSystem::set_page('Landing');
    $background_photo = perch_content('Homepage Background Photo', true);
    $opts = array(
        'skip-template' => true
    );
    $background_images = perch_content_custom('Homepage Background Photo', $opts);  
    
    $bg_count = count($background_images);
    $random_index = rand(0, $bg_count - 1);
    $bg_image_path = 'http://'.$_SERVER['HTTP_HOST'].$background_images[$random_index]['photo'];
?>

body{
    background: url('<?=$bg_image_path;?>') no-repeat top left;
    background-size: cover;
}