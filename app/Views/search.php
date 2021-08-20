<?php
/**
 * Name: Search
 * Package: View
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
<div class="container">
    <div class="table">
        <div class="rel_wrap">
            <h1><?php echo __( 'Search Tables' ); ?></h1>
            <table class="stripe" width="100%" cellpadding="1" cellspacing="1" id="tableList">
                <thead>
                    <tr class="table-title">
                        <th style="text-align:left" width="70%"><?php echo __( 'Table Name', 'search-tables' ); ?></th>
                        <th style="text-align:left" width="30%"><?php echo __( 'Size', 'search' ); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach ( $tables as $table ): ?>
                        <tr class="table-row">
                            <td><?php echo __( $table['name'], 'search-tables' ); ?></td>
                            <td><?php echo __( $table['size'], 'search-tables' ); ?></td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>
            <div class="table-count">
                <span><?php echo __( "Qnt Tabelas: " . count($tables) );?></span>
            </div>
        </div>
    </div>
</div>
