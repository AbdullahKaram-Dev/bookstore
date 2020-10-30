<?php require_once VIEWS . 'admin/inc/header.php';  ?>
<?php require_once VIEWS . 'admin/inc/sidebar.php';  ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <!-- start content dashboard -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Data Table Of Authors</h3></div>
                </div>
                <div class="card-body">
                    <div id="data_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <?php require_once VIEWS . 'admin/inc/message.php'; ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="data_table" class="table dataTable no-footer" role="grid" aria-describedby="data_table_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="id: activate to sort column descending" style="width: 66px;">id</th>
                                        <th class="nosort sorting_disabled" rowspan="1" colspan="1" aria-label="Name" style="width: 109px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-label="brief: activate to sort column ascending" style="width: 214px;">brief</th>
                                        <th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1" colspan="1" aria-label="top: activate to sort column ascending" style="width: 214px;">top</th>
                                        <th class="nosort sorting_disabled" rowspan="1" colspan="1" aria-label="avatar" style="width: 109px;">avatar</th>
                                        <th class="nosort sorting_disabled" rowspan="1" colspan="1" aria-label="facebook" style="width: 109px;">facebook</th>
                                        <th class="nosort sorting_disabled" rowspan="1" colspan="1" aria-label="google" style="width: 109px;">google</th>
                                        <th class="nosort sorting_disabled" rowspan="1" colspan="1" aria-label="instagram" style="width: 109px;">instagram</th>


                                        <th class="nosort sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;" style="width: 158px;">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  foreach ($authors as $author) : ?>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><?= $author['id']; ?></td>
                                            <td><?= $author['name']; ?></td>
                                            <td><?= $author['brief']; ?></td>
                                            <td><i <?php echo($author['is_top'] == 1 ? "class='fas fa-check-circle' style='color:green;'" : "class='fas fa-times-circle' style='color:red'"); ?> ></i></td>
                                            <td><img src="<?php uploads('authors/'.$author['img']); ?>" class="table-user-thumb" alt=""></td>
                                            <td><a href="<?= $author['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f" style="color: #007bff"></i></a></td>
                                            <td><a href="<?= $author['google']; ?>" target="_blank"><i class="fab fa-google" style="color: red;" ></i></a></td>
                                            <td><a href="<?= $author['instagram']; ?>" target="_blank"><i class="fab fa-instagram" style="color:#fb3958;"></i></a></td>
                                            <td>
                                                <a href=""><i class="ik ik-eye"></i></a>
                                                <a href=""><i class="ik ik-edit-2"></i></a>
                                                <a href=""><i class="ik ik-trash-2"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
            <!-- end content dashboard -->
        </div>
    </div>
</div>
<?php require_once VIEWS . 'admin/inc/footer.php'; ?>

