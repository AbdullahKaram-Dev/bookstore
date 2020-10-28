<?php require_once VIEWS . 'admin/inc/header.php';  ?>
<?php require_once VIEWS . 'admin/inc/sidebar.php';  ?>
<?php
$authors  = \App\Models\Author::connectTable()
    ->select('id,name')
    ->get();

$cats = \App\Models\Cat::connectTable()
    ->select('id,name')
    ->get();
?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <!-- start content dashboard -->

            <div class="col-md-12">
                <div class="card" style="min-height: 484px;">
                    <div class="card-header"><h3>Update <?= "<strong style='color: red' >" . $books[0]['book_name'] . "</strong>"; ?> Book</h3></div>
                    <div class="card-body">
                        <?php require VIEWS . 'admin/inc/errors.php'; ?>
                        <?php require VIEWS . 'admin/inc/message.php'; ?>
                        <?php foreach($books as $book)  :?>
                        <form class="forms-sample" action="<?php url('dashboard/books/update/'.$book['book_id']); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="Book-Name" class="col-sm-3 col-form-label">Book-Name : <?= (! empty($errors["name"]) ? '<span style="color:red;"> '.$errors['name'].' </span>' : '') ?></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?= $book['book_name']; ?>" name="name" id="Book-Name" placeholder="write book name here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Book-Price" class="col-sm-3 col-form-label">Book-Price : <?= (! empty($errors["price"]) ? '<span style="color:red;"> '.$errors['price'].' </span>' : '') ?></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="<?= $book['book_price']; ?>" name="price" id="Book-Price" placeholder="write price book here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Book-Avatar" class="col-sm-3 col-form-label">Book-Avatar : <?= (! empty($errors["img"]) ? '<span style="color:red;"> '.$errors['img'].' </span>' : '') ?></label>

                                <div class="col-sm-2">
                                    <img class="form-control img-thumbnail" src="<?php uploads('books/'.$book['book_img']); ?>">
                                </div>

                                <div class="col-sm-7">
                                    <input type="file" name="img" class="form-control" id="Book-Avatar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descraption" class="col-sm-3 col-form-label">Descraption-Book : <?= (! empty($errors["desc"]) ? '<span style="color:red;"> '.$errors['desc'].' </span>' : '') ?></label>
                                <div class="col-sm-9">
                                    <textarea  class="form-control" id="descraption"  name="desc" rows="5" maxlength="300"><?= $book['book_desc']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="for-author" class="col-sm-3 col-form-label">Select-Author : <?= (! empty($errors["author_id"]) ? '<span style="color:red;"> '.'invalid category name'.' </span>' : '') ?></label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="author_id" id="for-author">
                                        <?php foreach($authors as $author) :?>
                                            <option value="<?= $author['id']; ?>" <?= ($book['author_name'] == $author['name'] ? 'selected' : '') ?>><?= $author['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="for-category" class="col-sm-3 col-form-label">Select-Category : <?= (! empty($errors["cat_id"]) ? '<span style="color:red;"> '.'invalid category name'.' </span>' : '') ?></label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="cat_id" id="for-category">
                                        <?php foreach ($cats as $cat) :?>
                                            <option value="<?= $cat['id']; ?>" <?= ($book['cat_name'] == $cat['name'] ? 'selected' : '') ?>><?= $cat['name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Update</button>

                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- end content dashboard -->
        </div>
    </div>
</div>
<?php require_once VIEWS . 'admin/inc/footer.php'; ?>


