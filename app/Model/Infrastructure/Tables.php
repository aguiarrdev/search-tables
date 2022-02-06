<?php

namespace SearchTables\Model\Infrastructure;

/**
 * Name: Tables
 * @package Model
 * @since 1.0.0
 */

class Tables
{
    private array $tables;
    private string $db_name;
    private $db;

    public function __construct()
    {
        global $wpdb;
        $this->db = $wpdb;

        $this->get_database_name();
        
    }

    public function get_table( $table )
    {
        $query = "SELECT * FROM $table;";
        $results = $this->db->get_results($query);

        return $results;
    }

    public function get_table_columns( $table )
    {
        $query = "DESCRIBE $table";
        $results = $this->db->get_results($query);

        return $results;
    }

    public function get_table_size( string $table ): int
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

    public function show_tables()
    {
        $query = "SHOW TABLES;";
        $results = $this->db->get_results($query);

        $tables = $this->sanitize_table_name( $results );

        return $tables;
    }

    private function sanitize_table_name( array $table_list ): array
    {
        $results = [];
        foreach ( $table_list as $table ) {
            $element = (array)$table;
            $key = 'Tables_in_' . $this->db_name;

            array_push( $results, $element[$key]);
        }

        return $results;
    }

    private function get_database_name(): void
    {
        $query = "SELECT database();";
        $results = (array)$this->db->get_results($query)[0];
        
        $this->db_name = $results['database()'];
    }
}