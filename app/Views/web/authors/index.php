<?php
require_once VIEWS . 'web/inc/header.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php uploads("logo.jpg"); ?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate mb-0 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="<?php url(""); ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Authors <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">All Authors</h1>
            </div>
        </div>
    </div>
</section>
<h1 class="text-center" style="background-color: #B0C2CF">Top Authors</h1>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?php foreach($authors as $author) :?>
            <?php if($author['is_top'] == 1) : ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(<?php uploads('authors/'.$author['img']); ?>);"></div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3><?= $author['name']; ?></h3>
                       Top : <img src="data:image/png;base64,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">
                        <div class="faded">
                            <p><?= $author['brief']; ?></p>
                            <p>Member Since : <?= TimeHumans($author['created_at']); ?></p>
                            <a href="#" class="btn btn-primary">View All Books And Author</a>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a target="_blank" href="<?= $author['twitter']; ?>" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a target="_blank" href="<?= $author['facebook']; ?>" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a target="_blank" href="<?= $author['google']; ?>" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a target="_blank" href="<?= $author['instagram']; ?>" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
             <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Browse All Authors</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($authors as $author) : ?>
            <?php if ($author['is_top'] == 0) : ?>
            <div class="col-md-2 ftco-animate">
                <ul class="top">
                    <li><a href=""><?= $author['name']; ?></a></li>
                </ul>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
require_once VIEWS . 'web/inc/footer.php';
?>