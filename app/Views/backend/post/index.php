<?= $this->extend('backend/layout/layout') ?>
<?= $this->section('content') ?>
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="product-wrap">
            <div class="product-list">
                <ul class="row">
                <?php foreach (range(0,10) as $i): ?>
                    <li class="col-lg-4 col-md-6 col-sm-12">
                        <div class="product-box">
                            <div class="producct-img">
                                <img src="/backend/vendors/images/product-img2.jpg" alt="">
                            </div>
                            <div class="product-caption">
                                <h4><a href="#">Gufram Bounce White</a></h4>
                                <div class="price">
                                    <del>$75.5</del>
                                    <ins>$50</ins>
                                </div>
                                <div class="btn-group-sm">
                                <button type="button" class="btn btn-outline-primary">Edit</button>
                                <button type="button" class="btn btn-outline-primary">Show</button>
                                <button type="button" class="btn btn-outline-primary">Delete</button>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
                </ul>
            </div>
            <div class="blog-pagination mb-30">
                <div class="btn-toolbar justify-content-center mb-15">
                    <div class="btn-group">
                        <a href="#" class="btn btn-outline-primary prev"><i class="fa fa-angle-double-left"></i></a>
                        <a href="#" class="btn btn-outline-primary">1</a>
                        <a href="#" class="btn btn-outline-primary">2</a>
                        <span class="btn btn-primary current">3</span>
                        <a href="#" class="btn btn-outline-primary">4</a>
                        <a href="#" class="btn btn-outline-primary">5</a>
                        <a href="#" class="btn btn-outline-primary next"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
