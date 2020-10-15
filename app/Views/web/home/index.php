<?php
require_once VIEWS . 'web/inc/header.php';
?>
<section class="hero-wrap" style="background-image: url('<?php assets("images/bg_1.jpg"); ?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-md-8 ftco-animate d-flex align-items-end">
                <div class="text w-100">
                    <h1 class="mb-4">Good books don't give up all their secrets at once</h1>
                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="#" class="btn btn-primary py-3 px-4">View All Books</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt mt-5 mt-md-0">
    <div class="container">
        <div class="row">
            <?php foreach ($top_cats as $cat): ?>
            <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                <div class="services-2 text-center">
                    <div class="icon-wrap">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-fantasy"></span>
                        </div>
                    </div>
                    <h2><a href="#"><?php echo $cat['name']; ?></a></h2>
                    <p><?php echo $cat['brief']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(<?php assets('images/about-1.jpg'); ?>);">
            </div>
            <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                <div class="heading-section">
                    <span class="subheading">Welcome To Publishing Company</span>
                    <h2 class="mb-4">Publishing Company Created By Authors</h2>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                    <a href="#" class="btn btn-primary">View All Our Authors</a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Books</span>
                <h2>New Release</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($new_books as $book) : ?>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="book-wrap d-lg-flex">

                    <div class="img d-flex justify-content-end" style="background-image: url(<?php uploads("books/".$book['img'] ); ?>);">
                        <div class="in-text">
                            <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to cart">
                                <span class="flaticon-shopping-cart"></span>
                            </a>
                            <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                                <span class="flaticon-heart-1"></span>
                            </a>
                            <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Quick View">
                                <span class="flaticon-search"></span>
                            </a>
                            <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Compare">
                                <span class="flaticon-visibility"></span>
                            </a>
                        </div>
                    </div>
                    <div class="text p-4">
                        <p class="mb-2"><span class="price">$<?php echo $book['price']; ?></span></p>
                        <h2><a href="#"></a><?php echo substr($book['name'],0,14); ?></h2>
                        <span class="position">By John Nathan Muller</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
require_once VIEWS . 'web/inc/footer.php';
?>