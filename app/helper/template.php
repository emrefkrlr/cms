<?php

// get site url pat
function get_site_url_path($url = FALSE){
    return URL . '/' . $url;
}

// get assets url path
function get_public_url_path($url = FALSE){
    return URL . '/public/' . $url;
}
?>