<?php require_once VIEWS . 'admin/inc/header.php'; ?>
<?php require_once VIEWS . 'admin/inc/sidebar.php'; ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <!-- start content dashboard -->


            <?php foreach ($categories as $category) : ?>

                <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Category <?= strtoupper($category['name']); ?> :</h3>
                    </div>
                    <div class="card-body">
                        <p>Category-Name : <?= strtoupper($category['name']); ?></p>
                        <p>Category-Brief : <?= $category['brief']; ?>.</p>
                        <p>Category-Status : <label class="badge badge-<?= ($category['is_top'] == 1 ? 'success' : 'danger') ?>"><?= ($category['is_top'] == 1 ? "active" : "inactive") ?></label></p>
                    </div>
                </div>
                </div>

            <?php endforeach; ?>


            <!-- end content dashboard -->
        </div>
    </div>
</div>
<?php require_once VIEWS . 'admin/inc/footer.php'; ?>

