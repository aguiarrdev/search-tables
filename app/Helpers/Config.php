<?php 

namespace SearchTables\Helpers;

/**
 * Name: Config
 * Description: Create configuration methods
 * @package Helper
 * @since 1.0.0
 */
class Config {

    /**
     * Configure the menu controllers
     * @since 1.0.0
     * @return array
     */
    public static function controllers() 
    {
        return [
            ['Search', 'Search Tables'],
        ];

    }
}
