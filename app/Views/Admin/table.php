<div class="wrap search-table">
    <div class="container">
        <div class="table">
            <div class="row">
                <h1 class="col-sm"><?php echo __('Search Tables'); ?></h1>
                <hr>
            </div>
            <br>
            <table id="table-list" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <?php if ( isset($columns) && is_array($columns) ): ?>
                    <thead>
                        <tr class="header">
                            <?php foreach ($columns as $key => $colum) : ?>
                                    <th style="text-align:left"><?php echo __($colum->Field); ?></th>
                            <?php endforeach; ?>
                            <th><?php echo __('View', 'search'); ?></th>
                        </tr>
                    </thead>
                <?php endif; ?>

                <?php if (isset($table) && is_array($table)) : ?>
                    <tbody>
                        <?php foreach ( $table as $rows ) : ?>
                                <tr class="table-row table-row-tables">
                                    <?php foreach ( $rows as $row ) : ?>
                                        <td><?php echo __($row); ?></td>
                                    <?php endforeach; ?>
                                    <td class="td-actions"><button class="btn btn-action">View <i color="#f04e23">👁</i></button></td>
                                </tr>
                        <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>