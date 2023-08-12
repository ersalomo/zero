<div class="offcanvas offcanvas-start sidebarWrapper" tabindex="-1" id="appSidebar">
    <div class="offcanvas-body">
        <nav class="sidebar">
            <div class="profilebox">
                <img src="/frontend/assets/img/sample/avatar.jpg" alt="avatar" class="avatar">
                <h2 class="title">Jane Antunes</h2>
                <h5 class="lead">
                    <i class="icon ion-ios-pin me-1"></i>
                    Chicago
                </h5>
                <div class="sidebutton">
                    <a href="#">
                        <i class="icon ion-ios-settings"></i>
                    </a>
                </div>
            </div>
            <div class="sidebarGroup">
                <ul class="sidebarMenu">
                    <li>
                        <a href="social-home.html">
                            <i class="icon ion-ios-people"></i>
                            Social
                        </a>
                    </li>
                    <li>
                        <a href="social-chat.html">
                            <i class="icon ion-ios-chatboxes"></i>
                            Chat
                        </a>
                    </li>
                    <li>
                        <a href="pages.html">
                            <i class="icon ion-ios-apps"></i>
                            Pages
                        </a>
                    </li>
                    <li>
                        <a href="components.html">
                            <i class="icon ion-ios-analytics"></i>
                            Components
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="icon ion-ios-book"></i>
                            Magazine - Blog
                        </a>
                    </li>
                    <li>
                        <form action="<?= route_to('auth.logout')?>" method="post">

                        <button class="btn " type="submit">
                            <i class="icon ion-ios-lock"></i>
                            Logout
                        </button>
                        </form>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
</div>
