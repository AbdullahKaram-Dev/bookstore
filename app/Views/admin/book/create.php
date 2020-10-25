<?php require_once VIEWS . 'admin/inc/header.php';  ?>
<?php require_once VIEWS . 'admin/inc/sidebar.php';  ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <!-- start content dashboard -->

            <div class="col-md-12">
                <div class="card" style="min-height: 484px;">
                    <div class="card-header"><h3>Create New Book</h3></div>
                    <div class="card-body">
                        <?php require VIEWS . 'admin/inc/errors.php'; ?>
                        <?php require VIEWS . 'admin/inc/success.php'; ?>
                        <form class="forms-sample" action="<?php url('dashboard/books/store'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="Book-Name" class="col-sm-3 col-form-label">Book-Name : <?= (! empty($errors["name"]) ? '<span style="color:red;"> '.$errors['name'].' </span>' : '') ?></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" id="Book-Name" placeholder="write book name here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Book-Price" class="col-sm-3 col-form-label">Book-Price : <?= (! empty($errors["price"]) ? '<span style="color:red;"> '.$errors['price'].' </span>' : '') ?></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="price" id="Book-Price" placeholder="write price book here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Book-Avatar" class="col-sm-3 col-form-label">Book-Avatar : <?= (! empty($errors["img"]) ? '<span style="color:red;"> '.$errors['img'].' </span>' : '') ?></label>
                                <div class="col-sm-9">
                                    <input type="file" name="img" class="form-control" id="Book-Avatar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descraption" class="col-sm-3 col-form-label">Descraption-Book : <?= (! empty($errors["desc"]) ? '<span style="color:red;"> '.$errors['desc'].' </span>' : '') ?></label>
                                <div class="col-sm-9">
                                    <textarea  class="form-control" id="descraption" placeholder="write here some descraption about book " name="desc" rows="5" maxlength="300"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="for-author" class="col-sm-3 col-form-label">Select-Author : <?= (! empty($errors["author_id"]) ? '<span style="color:red;"> '.'invalid category name'.' </span>' : '') ?></label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="author_id" id="for-author">
                                        <?php foreach($authors as $author) :?>
                                            <option value="<?= $author['id']; ?>"><?= $author['name']; ?></option>
                                        <?php endforeach; ?> : ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="for-category" class="col-sm-3 col-form-label">Select-Category : <?= (! empty($errors["cat_id"]) ? '<span style="color:red;"> '.'invalid category name'.' </span>' : '') ?></label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="cat_id" id="for-category">
                                        <?php foreach ($cats as $cat) :?>
                                            <option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>

                        </form>
                    </div>
                </div>
            </div>


            <!-- end content dashboard -->
        </div>
    </div>
</div>
<?php require_once VIEWS . 'admin/inc/footer.php'; ?>


