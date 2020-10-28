<?php require_once VIEWS . 'admin/inc/header.php'; ?>
<?php require_once VIEWS . 'admin/inc/sidebar.php'; ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">

            <!-- start content dashboard -->
            <?php foreach ($books as $book) : ?>
                <div class="sl-item">
                    <div class="sl-right">
                        <div>
                            <div class="mt-20 row">
                                <div class="col-md-3 col-xs-12">
                                    <img src="<?php uploads('books/' . $book['book_img']) ?>" alt="user"
                                         class="img-fluid rounded">
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <?php require VIEWS . 'admin/inc/message.php'; ?>
                                    <h1 class="badge badge-light-blue">Book-Descraption </h1>
                                    <p style="border: ridge 1px darkblue; padding: 10px;" ><?php echo $book['book_desc']; ?></p>
                                    <h5 class="badge badge-primary">Book-Name : <?php echo $book['book_name']; ?></h5>
                                    <h5 class="badge badge-danger" >Book-Price : <?php echo '$'. $book['book_price']; ?></h5>
                                    <h5 class="badge badge-green" >Author-Name : <?php echo $book['author_name']; ?></h5>
                                    <h5 class="badge badge-purple">Category-Name : <?php echo $book['cat_name']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- end content dashboard -->
        </div>
    </div>
</div>
<?php require_once VIEWS . 'admin/inc/footer.php'; ?>



