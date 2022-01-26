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

        $this->getDatabaseName();
        $this->showTables();
    }

    public function getTables(): array
    {
        return $this->tables;
    }

    public function getTableSize( string $table ): int
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

    private function showTables(): void
    {
        $query = "SHOW TABLES;";
        $results = $this->db->get_results($query);

        $tables = $this->sanitizeTableName( $results );
        $this->tables = $tables;
    }

    private function sanitizeTableName( array $table_list ): array
    {
        $results = [];
        foreach ( $table_list as $table ) {
            $element = (array)$table;
            $key = 'Tables_in_' . $this->db_name;

            array_push( $results, $element[$key]);
        }

        return $results;
    }

    private function getDatabaseName(): void
    {
        $query = "SELECT database();";
        $results = (array)$this->db->get_results($query)[0];
        
        $this->db_name = $results['database()'];
    }
}