<?php
/**
 * Template Name: Header
 * @since 1.0.1
 */
?>

<thead>
    <tr class="heade">
        <th style="text-align:left" width="70%"><?php echo __('Table Name', 'search-tables'); ?></th>
        <th style="text-align:left" width="30%"><?php echo __('Size', 'search'); ?></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($tables as $table) : ?>
        <tr class="table-row table-row-tables" data-table="<?php echo __( isset( $table['name'] ) ? $table['name'] : '' ) ?>">
            <td><?php echo __( isset( $table['name'] ) ? $table['name'] : '' ); ?></td>
            <td><?php echo __( isset( $table['size'] ) ? $table['size'] : '' ); ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>