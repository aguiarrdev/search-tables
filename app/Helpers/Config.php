<?php 

namespace SearchTables\Helpers;

/**
 * Name: Config
 * Package: Helper
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
            ['About', 'About'],
        ];

    }
}
