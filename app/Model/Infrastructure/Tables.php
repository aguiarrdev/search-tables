<?php

namespace SearchTables\Model\Infrastructure;

/**
 * Name: Tables
 * @package Model
 * @since 1.0.0
 */

class Tables
{
    private string $db_name;
    private $db;

    public function __construct()
    {
        global $wpdb;
        $this->db = $wpdb;

        $this->get_database_name();
        
    }

    /**
     * Get table rows
     * @since 1.0.0
     * @param string $table
     * @return array
     */
    public function get_table( $table )
    {
        $query = "SELECT * FROM $table;";
        $results = $this->db->get_results($query);

        return $results;
    }

    /**
     * Get table columns
     * @since 1.0.0
     * @param string $table
     * @return array
     */
    public function get_table_columns( $table )
    {
        $query = "DESCRIBE $table";
        $results = $this->db->get_results($query);

        return $results;
    }

    /**
     * Get table size
     * @since 1.0.0
     * @param string $table
     * @return array
     */
    public function get_table_size( $table )
    {
        $query = "SELECT
        ((DATA_LENGTH + INDEX_LENGTH) / 1024 )
        FROM
            information_schema.TABLES
        WHERE
            TABLE_SCHEMA = '{$this->db_name}'
        AND
            TABLE_NAME = '{$table}'";    
            
            
        $results = (array)$this->db->get_results($query)[0];
        
        return $results['((DATA_LENGTH + INDEX_LENGTH) / 1024 )'];
    }

    /**
     * Get all tables
     * @since 1.0.0
     * @return array
     */
    public function show_tables()
    {
        $query = "SHOW TABLES;";
        $results = $this->db->get_results($query);

        $tables = $this->sanitize_table_name( $results );

        return $tables;
    }

    /**
     * Sanitize table name
     * @since 1.0.0
     * @return array
     */
    private function sanitize_table_name( $table_list )
    {
        $results = [];
        foreach ( $table_list as $table ) {
            $element = (array)$table;
            $key = 'Tables_in_' . $this->db_name;

            array_push( $results, $element[$key]);
        }

        return $results;
    }

    /**
     * Get database name
     * @since 1.0.0
     * @return void
     */
    private function get_database_name()
    {
        $query = "SELECT database();";
        $results = (array)$this->db->get_results($query)[0];
        
        $this->db_name = $results['database()'];
    }
}