<?php 

namespace SearchTables\Helpers;

/**
 * Name: Config
 * @package Helper
 * Description: Create configuration methods
 * Version: 1.0.0
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
