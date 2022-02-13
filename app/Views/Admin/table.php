<div class="wrap search-table">
    <div class="container">
        <div class="table">
            <?php require_once __DIR__ . "/template-parts/header.php"; ?>
            <table id="table-list" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <?php if (isset($columns) && is_array($columns)) : ?>
                    <thead>
                        <tr class="header">
                            <?php foreach ($columns as $key => $colum) : ?>
                                <th style="text-align:left"><?php echo __($colum->Field); ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                <?php endif; ?>
                <?php if (isset($table) && is_array($table)) : ?>
                    <tbody>
                        <?php foreach ($table as $rows) : ?>
                            <tr class="table-row table-row-tables">
                                <?php foreach ($rows as $row) : ?>
                                    <td class="st-td"><?php echo __($row); ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
            </table>
        </div>
    </div>
</div>