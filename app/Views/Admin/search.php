<?php

/**
 * Name: Search
 * @package View
 * Controller: SearchTables\Controllers\Menus\Search
 * Style File: 
 * @since 1.0.0
 */
?>

<div class="wrap search-table">
    <div class="container">
        <div class="table">
            <div class="row">
                <h1 class="col-sm"><?php echo __('Search Tables'); ?></h1>
                <hr>
            </div>
            <br>
            <table id="table-list" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

                <?php if (isset($tables) && is_array($tables)) : ?>
                    <thead>
                        <tr class="heade">
                            <th style="text-align:left" width="70%"><?php echo __('Table Name', 'search-tables'); ?></th>
                            <th style="text-align:left" width="30%"><?php echo __('Size', 'search'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tables as $table) : ?>
                            <tr class="table-row table-row-tables" data-table="<?php echo __(isset($table['name']) ? $table['name'] : '') ?>">
                                <td><?php echo __(isset($table['name']) ? $table['name'] : ''); ?></td>
                                <td><?php echo __(isset($table['size']) ? $table['size'] : ''); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>