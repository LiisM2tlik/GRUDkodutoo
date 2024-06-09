<?php

function show_array($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre';
}
if(isset($_GET) and !empty($_GET)) {
    show_array($_GET);
} 
// show_array($_GET);
?>