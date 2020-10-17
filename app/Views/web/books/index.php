<?php
require_once VIEWS . 'web/inc/header.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php uploads('logo.jpg'); ?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate mb-0 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="<?php url(''); ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Books <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Books</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 ftco-animate">
                <div class="row">

                   <?php foreach ($books as $book) :?>
                    <div class="col-md-4 d-flex">
                        <div class="book-wrap">
                            <div class="img d-flex justify-content-end w-100" style="background-image: url(<?php uploads('books/'.$book['book_img']) ?>);">
                                <div class="in-text">
                                    <a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to cart">
                                        <span class="flaticon-shopping-cart"></span>
                                    </a>
                                    <a href="<?php url("books/show/". $book['book_id']); ?>" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Quick View">
                                        <span class="flaticon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="text px-4 py-3 w-100">
                                <p class="mb-2"><span class="price">$<?php echo $book['book_price']; ?></span></p>
                                <h2><a href="<?php url("books/show/". $book['book_id']); ?>"><?php echo substr($book['book_name'],0,14); ?></a></h2>
                                <span class="position">By : <?= $book['author_name']; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="block-27">
                            <ul>
                                <li><a href="<?php url("books/page/". ($page-1)); ?>" <?php if($page == 1) echo 'class="link-disabled"'; ?> >&lt;</a></li>
                                page <?= $page ?> of <?= $pages_total_num; ?>
                                <li><a href="<?php url("books/page/". ($page+1)); ?>" <?php if($page == $pages_total_num) echo 'class="link-disabled"'; ?>>&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 sidebar pl-lg-3 ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <ul>
                            <?php foreach ($categories as $category): ?>
                            <li><a href="<?php url('books/category/'.$category['id']); ?>"><?php echo $category['name']; ?><span class="fa fa-chevron-right"></span></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Top Authors</h3>
                    <ul class="top">
                        <?php foreach ($authors as $author) : ?>
                        <li><a href="<?php url('authors/show/'.$author['id']); ?>"><?php echo $author['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once VIEWS . 'web/inc/footer.php';
?>
