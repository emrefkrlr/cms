<!doctype html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta charset="UTF-8">
    <title>Document</title>

    <!--styles-->
    <link rel="stylesheet" href="<?=get_admin_public_url_path('assets/styles/main.css'); ?>">

    <!--scripts-->
    <script src="<?=get_admin_public_url_path('assets/scripts/jquery-1.12.2.min.js'); ?>"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script> -->
    <script src="<?=get_admin_public_url_path('assets/scripts/admin.js'); ?>"></script>

</head>
<body>

<!--navbar-->
<div class="navbar">
    <ul dropdown>
        <li>
            <a href="#">
                <span class="fa fa-home"></span>
                <span class="title">
                    ANOTHER WORDPRESS SITE
                </span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-comment"></span>
                1
            </a>
        </li>
        <li>
            <a href="#">
                <span class="fa fa-plus"></span>
                <span class="title">New</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        New Post
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Page
                    </a>
                </li>
                <li>
                    <a href="#">
                        New Category
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<!--sidebar-->
<div class="sidebar">

    <ul>
        <?php foreach($menues as $mainUrl => $menu): ?>
            <li class="<?=route(1) == $mainUrl ? 'active' : null  ?>">
                <a href="<?=get_admin_site_url($mainUrl) ?>">
                    <span class="fa fa-<?=$menu['icon'] ?>"></span>
                    <span class="title">
                        <?=$menu['title'] ?>
                    </span>
                </a>
                <?php if(isset($menu['submenu'])): ?>
                    <ul class="sub-menu">
                        <?php foreach ($menu['submenu'] as $url => $title): ?>
                        <li class="active">
                            <a href="<?=get_admin_site_url_path($url) ?>">
                                <?=$title ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="#" class="collapse-menu">
        <span class="fa fa-arrow-circle-left"></span>
        <span class="title">
            Collapse menu
        </span>
    </a>

</div>

<!--content-->
<div class="content">