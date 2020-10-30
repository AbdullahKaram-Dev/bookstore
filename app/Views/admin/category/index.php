<?php require_once VIEWS . 'admin/inc/header.php'; ?>
<?php require_once VIEWS . 'admin/inc/sidebar.php'; ?>

<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <!-- start content dashboard -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Data Table Of Categories</h3></div>
                </div>
                <div class="card-body">
                    <div id="data_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <?php require_once VIEWS . 'admin/inc/message.php'; ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="data_table" class="table dataTable no-footer" role="grid"
                                       aria-describedby="data_table_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="data_table" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Id: activate to sort column descending" style="width: 66px;">Id
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 214px;">Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1"
                                            colspan="1" aria-label="Price: activate to sort column ascending"
                                            style="width: 214px;">Brief
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="data_table" rowspan="1"
                                            colspan="1" aria-label="AuthorName: activate to sort column ascending"
                                            style="width: 214px;">Status
                                        </th>
                                        <th class="nosort sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="&amp;nbsp;" style="width: 158px;">&nbsp;
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach ($categories as $category)  : ?>
                                        <tr role="row" class="even">
                                            <td class="sorting_1"><?= $category['id']; ?></td>
                                            <td><?= $category['name']; ?></td>
                                            <td><?= substr($category['brief'],0,23); ?>..</td>
                                            <td><a href="<?php url("dashboard/category/change-status/".$category['id'].'/'.($category['is_top'] == 1 ? 'inactive' : 'active')); ?>"><label class="badge badge-<?= ($category['is_top'] == 1 ? 'success' : 'danger') ?>"><?= ($category['is_top'] == 1 ? 'active' : 'inactive'); ?></label></a></td>
                                            <td>
                                                <a href="<?php url('dashboard/category/show/'.$category['id']); ?>"><i
                                                            class="ik ik-eye"></i></a>
                                                <a href="<?php url('dashboard/category/edit/'.$category['id']); ?>"><i
                                                            class="ik ik-edit-2"></i></a>
                                                <a href="<?php url("dashboard/category/delete/".$category['id']); ?>"><i
                                                            class="ik ik-trash-2"></i></a>
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

