<?php

/**
 * Name: Search
 * @package View
 * Controller: SearchTables\Controllers\Menus\Search
 * Style File: 
 * Version: 1.0.0
 */
?>
<style>
    .rel_wrap {
        margin-top: 10px;
        padding: 10px 10px;
        max-width: 100%;
    }
</style>
<div class="wrap search-table">
    <div class="container">
        <div class="table">
            <div class="row">
                <h1 class="col-sm"><?php echo __('Search Tables'); ?></h1>
                <input class="col-sm searchInput" style="height: 30px; margin-top:15px;" type="text" id="search-input" placeholder="Search tables..">
            </div>
            <br>
            <table id="tableList" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr class="header">
                        <th style="text-align:left" width="70%"><?php echo __('Table Name', 'search-tables'); ?></th>
                        <th style="text-align:left" width="30%"><?php echo __('Size', 'search'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tables as $table) : ?>
                        <tr class="table-row">
                            <td><?php echo __($table['name'], 'search-tables'); ?></td>
                            <td><?php echo __($table['size'], 'search-tables'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="table-count">
                <span><?php echo __("Qnt Tabelas: " . count($tables)); ?></span>
            </div>
        </div>
    </div>
</div>