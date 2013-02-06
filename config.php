<?php
    error_reporting(E_ALL);
    define('base_href', 'http://' . $_SERVER['HTTP_HOST'] . '/');
    define('page', $_REQUEST['page']);
    include_once('perch/runtime.php');
    switch(page)
    {
        case 'album':
        {
            $album = $_REQUEST['album'];
            $mainalbum = empty($_REQUEST['mainalbum']) ? 0:$_REQUEST['mainalbum'];  
            PerchSystem::set_page('Album:'.$album);
            $photo_index = empty($_REQUEST['photo']) ? 0:$_REQUEST['photo'];            
            break;
        }
        default:
        {
            PerchSystem::set_page(page);
            break;
        }
    }
?>
