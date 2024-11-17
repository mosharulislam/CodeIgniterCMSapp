<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;

class Home extends Controller
{
    public function testDatabaseConnection()
    {
        try {
            $db = \Config\Database::connect();

            $query = $db->query("SHOW TABLES");
            $tables = $query->getResult();

            if (!empty($tables)) {
                echo "Database is connected! Tables in the database:";
                foreach ($tables as $table) {
                    $tableName = current((array) $table);
                    echo "<br>" . $tableName;
                }
            } else {
                echo "Database is connected but no tables found.";
            }
        } catch (DatabaseException $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }
}
