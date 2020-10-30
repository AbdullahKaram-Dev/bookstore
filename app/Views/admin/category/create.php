<?php require_once VIEWS . 'admin/inc/header.php';  ?>
<?php require_once VIEWS . 'admin/inc/sidebar.php';  ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <!-- start content dashboard -->

            <div class="col-md-12">
                <div class="card" style="min-height: 484px;">
                    <div class="card-header"><h3>Create New Category</h3></div>
                    <div class="card-body">
                        <?php require VIEWS . 'admin/inc/errors.php'; ?>
                        <?php require VIEWS . 'admin/inc/message.php'; ?>

                            <form class="forms-sample" action="<?php url('dashboard/category/store'); ?>" method="post">
                                <div class="form-group row">
                                    <label for="Category-Name" class="col-sm-3 col-form-label">Category-Name : <?= (! empty($errors["name"]) ? '<span style="color:red;"> '.$errors['name'].' </span>' : '') ?></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="name" id="Category-Name" placeholder="write category name here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="brief" class="col-sm-3 col-form-label">Category-Brief : <?= (! empty($errors["brief"]) ? '<span style="color:red;"> '.$errors['brief'].' </span>' : '') ?></label>
                                    <div class="col-sm-9">
                                        <textarea  class="form-control" id="brief" placeholder="write small brief about category" name="brief" rows="5" maxlength="300"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="for-status" class="col-sm-3 col-form-label">Select-Status Category : <?= (! empty($errors["is_top"]) ? '<span style="color:red;"> '.'invalid category Status'.' </span>' : '') ?></label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="is_top" id="for-status">
                                            <option value="1">active</option>
                                            <option value="0">inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update Category</button>

                            </form>

                    </div>
                </div>
            </div>

            <!-- end content dashboard -->
        </div>
    </div>
</div>
<?php require_once VIEWS . 'admin/inc/footer.php'; ?>


