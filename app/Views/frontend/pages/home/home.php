<?= $this->extend('frontend/layout/app-layout') ?>
<?= $this->section('content') ?>
<div class="appContent">

    <div class="searchBlock mt-3">
        <form>
                    <span class="inputIcon">
                        <i class="icon ion-ios-search"></i>
                    </span>
            <input type="text" class="form-control" id="searchInput" placeholder="Search...">
        </form>
    </div>


    <div class="sectionTitle mt-4 mb-0">
        <div class="text-muted">POPULAR</div>
        <div class="title">
            <h1>Categories</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-6 mt-2">
            <a href="#" class="btn btn-primary btn-block">
                <i class="icon ion-ios-paper"></i>
                News
            </a>
        </div>
        <div class="col-6 mt-2">
            <a href="#" class="btn btn-dark btn-block">
                <i class="icon ion-logo-game-controller-b"></i>
                Games
            </a>
        </div>
        <div class="col-6 mt-2">
            <a href="#" class="btn btn-danger btn-block">
                <i class="icon ion-ios-musical-notes"></i>
                Music
            </a>
        </div>
        <div class="col-6 mt-2">
            <a href="#" class="btn btn-warning btn-block">
                <i class="icon ion-ios-camera"></i>
                Movies
            </a>
        </div>
        <div class="col-6 mt-2">
            <a href="#" class="btn btn-info btn-block">
                <i class="icon ion-ios-pulse"></i>
                Health
            </a>
        </div>
        <div class="col-6 mt-2">
            <a href="#" class="btn btn-success btn-block">
                <i class="icon ion-ios-bulb"></i>
                Social
            </a>
        </div>
    </div>
    <div class="sectionTitle mb-2 mt-4">
        <div class="text-muted">NEWS</div>
        <div class="title">
            <h1>Today</h1>
            <a href="blog-category.html">View All</a>
        </div>
    </div>
    <div class="carousel-multiple postCarousel splide splide--loop splide--ltr splide--draggable is-active" id="splide02" style="visibility: visible;">
        <div class="splide__track" id="splide02-track" style="padding-left: 20px; padding-right: 20px;">
            <ul class="splide__list" id="splide02-list" style="transform: translateX(-1666px);">
                <!-- slide -->
                <li class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo2.jpg" alt="image" class="image">
                        <h2 class="title">20 Presents That Actually Won't Get Re-Gifted</h2>
                    </a>
                </li><li class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo3.jpg" alt="image" class="image">
                        <h2 class="title">Is Orange Juice the Enemy of the Disease?</h2>
                    </a>
                </li><li class="splide__slide splide__slide--clone" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo4.jpg" alt="image" class="image">
                        <h2 class="title">Best Selling Furniture of This Year</h2>
                    </a>
                </li><li class="splide__slide splide__slide--clone" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo12.jpg" alt="image" class="image">
                        <h2 class="title">What is the best gift to buy for your husband?</h2>
                    </a>
                </li><li class="splide__slide is-active is-visible" id="splide02-slide01" aria-hidden="false" tabindex="0" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo13.jpg" alt="image" class="image">
                        <h2 class="title">Can you spot the difference in this scene</h2>
                    </a>
                </li>
                <!-- * slide -->
                <!-- slide -->
                <li class="splide__slide is-visible" id="splide02-slide02" aria-hidden="false" tabindex="0" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo2.jpg" alt="image" class="image">
                        <h2 class="title">20 Presents That Actually Won't Get Re-Gifted</h2>
                    </a>
                </li>
                <!-- * slide -->
                <!-- slide -->
                <li class="splide__slide" id="splide02-slide03" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo3.jpg" alt="image" class="image">
                        <h2 class="title">Is Orange Juice the Enemy of the Disease?</h2>
                    </a>
                </li>
                <!-- * slide -->
                <!-- slide -->
                <li class="splide__slide" id="splide02-slide04" style="margin-right: 20px; width: 409px;" aria-hidden="true" tabindex="-1">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo4.jpg" alt="image" class="image">
                        <h2 class="title">Best Selling Furniture of This Year</h2>
                    </a>
                </li>
                <!-- * slide -->
                <!-- slide -->
                <li class="splide__slide" id="splide02-slide05" aria-hidden="true" tabindex="-1" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo12.jpg" alt="image" class="image">
                        <h2 class="title">What is the best gift to buy for your husband?</h2>
                    </a>
                </li>
                <!-- * slide -->
                <li class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo13.jpg" alt="image" class="image">
                        <h2 class="title">Can you spot the difference in this scene</h2>
                    </a>
                </li><li class="splide__slide splide__slide--clone" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo2.jpg" alt="image" class="image">
                        <h2 class="title">20 Presents That Actually Won't Get Re-Gifted</h2>
                    </a>
                </li><li class="splide__slide splide__slide--clone" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo3.jpg" alt="image" class="image">
                        <h2 class="title">Is Orange Juice the Enemy of the Disease?</h2>
                    </a>
                </li><li class="splide__slide splide__slide--clone" style="margin-right: 20px; width: 409px;">
                    <a href="blog-post.html">
                        <img src="/frontend/assets/img/sample/photo4.jpg" alt="image" class="image">
                        <h2 class="title">Best Selling Furniture of This Year</h2>
                    </a>
                </li></ul>
        </div>
    </div>


</div>
<?= $this->endSection() ?>
