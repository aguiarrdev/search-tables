<?php 

namespace SearchTables\Helpers;

/**
 * Name: Config
 * @package Helper
 * Description: Create configuration methods
 * @since 0.0.1
 */
class Config {

    /**
     * Configure the menu controllers
     */
    public static function controllers() {

        return [
            ['Search', 'Search'],
            ['SqlQuery', 'SQL Query'],
            ['About', 'About'],
        ];

    }
}
