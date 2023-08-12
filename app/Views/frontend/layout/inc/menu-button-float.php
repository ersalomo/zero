<?php
$active_url = explode('/' , current_url());
$active_url = end($active_url);
?>

<div class="appBottomMenu">
    <div class="item <?= $active_url == 'posts' ? 'active': '' ?>">
        <a href="<?= route_to('posts.index') ?>">
            <p>
                <i class="icon ion-ios-search"></i>
                <span>Posts</span>
            </p>
        </a>
    </div>
    <div class="item <?= $active_url == 'home' ? 'active': '' ?>">
        <a href="<?= route_to('home.index')?>">
            <p>
                <i class="icon ion-ios-analytics"></i>
                <span>Home </span>
            </p>
        </a>
    </div>
    <div class="item">
        <a href="#appSidebar" class="icon" data-bs-toggle="offcanvas">
            <p>
                <i class="icon ion-ios-menu"></i>
                <span>settings</span>
            </p>
        </a>
    </div>
</div>
