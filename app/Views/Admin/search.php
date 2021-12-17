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
                <input class="col-sm searchInput" style="height: 30px; margin-top:15px;" type="text" id="search-input" placeholder="Search tables..">
            </div>
            <br>
            <table id="table-list" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

                <?php if ( isset( $tables ) && is_array( $tables ) ) : ?>
                    <?php require_once __DIR__ . "/template-parts/tables.php"?>

                <?php elseif ( isset( $rows ) && is_array( $rows ) ): ?>
                    <?php require_once __DIR__ . "/template-parts/tables.php"?>
                <?php endif;?>

            </table>
            <div class="table-count">
                <span><?php echo __("Qnt Tabelas: " . count($tables)); ?></span>
            </div>
        </div>
    </div>
</div>