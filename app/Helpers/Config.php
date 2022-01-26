<?php 

namespace SearchTables\Helpers;

/**
 * Name: Config
 * Description: Create configuration methods
 * @package Helper
 * @since 0.0.1
 */
class Config {

    /**
     * Configure the menu controllers
     * @return Array
     */
    public static function controllers() 
    {
        return [
            ['About', 'About'],
            ['Search', 'Search'],
        ];

    }
}
