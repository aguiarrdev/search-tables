<?php

namespace SearchTables\Helpers;

/**
 * Name: Utils
 * Has the statics utils methods
 * @package Helper
 * @since 1.0.0
 */
class Utils {

    /**
     * Parse controller name to view name
     * @since 1.0.0
     * @return string
     */
    public static function parse_view( $controller ) 
    {

        $split = str_split( $controller );
        $view = '';
        $count = 0;

        foreach ( $split as $letter ) {
            if ( ctype_upper($letter) ) {
                if ( $count == 0 ) {
                    $view .= strtolower($letter);

                } else {
                    $view .= "_" . strtolower($letter);
                }

            } else {
                $view .= $letter;
            }
            $count++;
        }
        return $view;
    }

    /**
     * Parse view name to controller name
     * @since 1.0.0
     * @return string
     */
    public static function parse_controller( $vew, $namespace = "Actions" ) 
    {

        $split = str_split( $vew );
        $namespace = WP_PLUGIN_NAMESPACE . "\\Controllers\\$namespace\\";
        $class_name = '';
        $count = 0;

        $next_upper = false;

        foreach ( $split as $letter ) {

            if ( $count === 0 ) {
                $class_name .= strtoupper( $letter );
            }else {

                if ( $letter === '_' ) {
                    $next_upper = true;
    
                } else {
                    if ( $next_upper ) {
                        $class_name .= strtoupper( $letter );
    
                    } else {
                        $class_name .= $letter;
                    }
    
                    $next_upper = false;
                }
            }

            $count++;
        }

        $controller = $namespace .= $class_name;

        return $controller;
    }

    /**
     * Redirect user to menu page
     * @since 1.0.0
     * @return void
     */
    public static function redirect_to_menu_page( $to_page )
    {
        header( "Location: /wp-admin/admin.php?page=$to_page", false, 302 );
    }

    /**
     * Get the request vars
     * @since 1.0.0
     * @return bool|array
     */
    public static function get_requests_vars()
    {
        if ( isset( $_REQUEST ) && is_array( $_REQUEST ) ) {
            if ( ! empty( $_REQUEST ) ) {
                return $_REQUEST;
            }
        } 

        return false;
    }
}