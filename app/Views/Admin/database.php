<div class="wrap search-table">
    <div class="container">
        <div class="table">
            <?php require_once __DIR__ . "/template-parts/header.php"; ?>
            <table id="table-list" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <?php if (isset($tables) && is_array($tables)) : ?>
                    <thead>
                        <tr class="heade">
                            <th style="text-align:left" width="50%"><?php echo __('Table Name', 'search-tables'); ?></th>
                            <th style="text-align:left" width="25%"><?php echo __('Size', 'search'); ?></th>
                            <th style="text-align:left" width="25%"><?php echo __('Actions', 'search'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tables as $table) : ?>
                            <tr class="table-row table-row-tables" data-table="<?php echo __(isset($table['name']) ? $table['name'] : '') ?>">
                                <td><?php echo __(isset($table['name']) ? $table['name'] : ''); ?></td>
                                <td><?php echo __(isset($table['size']) ? $table['size'] : ''); ?></td>
                                <td class="st-td-actions"><button class="btn btn-action" data-table="<?php echo __(isset($table['name']) ? $table['name'] : '') ?>">View <i color="#f04e23">👁</i></button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>