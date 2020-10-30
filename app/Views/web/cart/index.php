<?php require_once VIEWS . 'web/inc/header.php'; ?>

   <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper px-md-4">
                    <div class="row no-gutters">

                        <div class="col-md-12">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <div class="text-center">
                                <a class="btn btn-warning" href="<?php url('cart/empty'); ?>">Empty your cart</a>
                                </div>
                                <h3 class="mb-4">Your Cart Information </h3>
                                <form method="POST" action="<?php url('cart/store'); ?>" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <?php foreach($books as $book) :?>
                                        <div class="col-md-3">
                                            <p><?= $book['name']; ?> </p>
                                            <input type="hidden" name="ids[]" value="<?= $book['id']; ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <strong class="price<?= $book['id']; ?>" style="color: red">$<?= $book['price']; ?></strong>
                                        </div>
                                        <div class="col-md-3">
                                            <img class="form-control" style="max-width: 35%;max-height: 100%" src="<?php uploads('books/'.$book['img']); ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="d-flex form-group">
                                                <input type="hidden" name="quantities[]" class="form-control qun<?= $book['id']; ?>" id="<?= $book['id']; ?>" value="1">

                                                <button type="button" class="form-control minus-count" price="<?= $book['price']; ?>" id="<?= $book['id']; ?>" >-</button>
                                                <span class="num<?= $book['id']; ?>">1</span>
                                                <button type="button" class="form-control plus-count" price="<?= $book['price']; ?>" id="<?= $book['id']; ?>" >+</button>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <a href="<?php url('cart/remove-book/'.$book['id']); ?>" class="btn btn-block btn-danger btn-xs">Remove</a>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Request Orders" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once VIEWS . 'web/inc/footer.php'; ?>
<script>
$(document).ready(function ()
{
    $(".plus-count").click(function () {

        var id = $(this).attr('id');
        var oldNum = $('.num'+id).text();
        var num = parseInt(oldNum) + 1;
        var price = $(this).attr('price');
        var total = num * price;
        $('.num'+id).text(num);
        $('.price'+id).text('$'+total);
        $('.qun'+id).val((num));


    });

    $(".minus-count").click(function () {

        var id = $(this).attr('id');
        var oldNum = $('.num'+id).text();

        if (oldNum == 1){

            $('.num'+id).text(oldNum);

        } else {
            var num = parseInt(oldNum) - 1;
            var price = $(this).attr('price');
            var total = num * price;
            $('.num'+id).text(num);
            $('.price'+id).text('$'+total);
            $('.qun'+id).val((num));

        }

    });

});
</script>
