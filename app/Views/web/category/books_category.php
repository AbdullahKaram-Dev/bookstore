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
                <h1 class="mb-0 bread">Books In This Category</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ftco-animate">
                <div class="row">
                        <?php if (! empty($books)) : foreach ($books as $book) :?>
                        <div class="col-md-6 d-flex">
                            <div class="book-wrap">
                                <div class="img d-flex justify-content-end w-100"
                                     style="background-image: url(<?php uploads('books/' . $book['book_img']) ?>);">
                                    <div class="in-text">
                                        <a href="#" class="icon d-flex align-items-center justify-content-center"
                                           data-toggle="tooltip" data-placement="left" title="Add to cart">
                                            <span class="flaticon-shopping-cart"></span>
                                        </a>
                                        <a href="<?php url("books/show/" . $book['book_id']); ?>"
                                           class="icon d-flex align-items-center justify-content-center"
                                           data-toggle="tooltip" data-placement="left" title="Quick View">
                                            <span class="flaticon-search"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="text px-4 py-3 w-100">
                                    <p class="mb-2"><span class="price">Price : $<?php echo $book['book_price']; ?></span></p>
                                    <h2>
                                        <a href="<?php url("books/show/" . $book['book_id']); ?>">Name : <?php echo $book['book_name']; ?></a>
                                    </h2>
                                    <span class="position">By : <?php echo $book['author_name']; ?></span>
                                    <span class="position price">Published : <?php echo TimeHumans($book['book_created_at']); ?></span>
                                    <a class="price" style="text-decoration-line: underline" href="<?php url("books/show/" . $book['book_id']); ?>">More Details</a>
                                </div>
                            </div>
                        </div>
                       <?php endforeach; ?>
                       <?php else: ?>
                        <div class="col-md-12 text-center alert alert-warning" role="alert">
                          We Are Sorry About That Unfortunately There Are No Books In This Section Transfer In Progress Now
                        </div>
                        <meta http-equiv="refresh" content="5; <?php url('books/page/1'); ?>">
                       <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once VIEWS . 'web/inc/footer.php';
?>

<!--
[0] => Array
(


Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

[] => 2020-10-05 20:35:51
[author_id] => 9
[author_name] => abdalla karam
[cat_id] => 1
[cat_name] => economy
)
-->