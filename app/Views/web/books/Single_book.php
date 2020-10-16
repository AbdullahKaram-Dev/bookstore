<?php
require_once VIEWS . 'web/inc/header.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php uploads('logo.jpg'); ?>);"
         data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate mb-0 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="<?php url(''); ?>">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Books <i
                                class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">View Book Details</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <div class="row">

                    <div class="col-md-12 d-flex">
                        <div class="book-wrap">
                            <div class="img d-flex justify-content-end w-100" style="background-image: url(<?php uploads('books/'. $books['book_img']) ?>);height: 600px">
                                <div class="in-text">
                                    <a href="#" class="icon d-flex align-items-center justify-content-center"
                                       data-toggle="tooltip" data-placement="left" title="Add to cart">
                                        <span class="flaticon-shopping-cart"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="text px-4 py-3 w-100">
                                <p class="mb-2"><span class="price">Price : $<?php echo $books['book_price']; ?></span></p>
                                <span class="price pull-right">Published : <?php echo TimeHumans($books['book_created_at']); ?></span>
                                <h2>NameBook : <?php echo $books['book_name']; ?></h2>
                                <span class="position">Descraption : <?php echo $books['book_desc']; ?></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <div class="row">

                    <div class="col-md-6 d-flex">
                        <div class="book-wrap h-50">
                            <h3 class="text-center pt-3">Category This Book</h3>
                            <span class="pl-3" href="#">CategoryName : <?php echo $books['cat_name']; ?></span>
                            <a href="" class="pull-right btn btn-warning btn-sm mr-3">view Category</a>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex">
                        <div class="book-wrap h-50">
                            <h3 class="text-center pt-3">Author Of Book</h3>
                            <span class="pl-3">AuthorName : <?php echo $books['author_name']; ?></span>
                            <a href="" class="pull-right btn btn-warning btn-sm mr-3">View Author</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once VIEWS . 'web/inc/footer.php';
?>
