<?php

// admin controller check
if(!route(1)){
    $route[1] = 'index';
}

if(!file_exists(get_admin_controller_path(route(1)))){
    $route[1] = 'index';
}

// creatin admin menu
$menues = [
    'index' => [
        'title' => 'anasayfa',
        'icon' => 'tachometer',
    ],
    'users' => [
        'title' => 'kullanıcılar',
        'icon' => 'user',
        'submenu' => [
            'users' => 'kullanıcı listesi',
            'add-user' => 'kullanıcı ekle',
        ],
    ],
    'settings' => [
        'title' => 'ayarlar',
        'icon' => 'cog',
    ],
 ];

 require get_admin_controller_path(route(1));
?>