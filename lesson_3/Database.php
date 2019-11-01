<?php
namespace Database;

use PDO;

class Database
{
    /**
     * This array contains the necessary parameters for connecting to the database.
     * @var array $config
     */
    private $config = [
        'host' => 'localhost',
        'user' => '',
        'password' => '',
        'database' => '',
    ];

    /**
     * This variable contains an instance of the PDO class.
     * @var \PDO $connection
     */
    private $connection;

    /*
     * Set new PDO object into $connection using $config
     */
    public function __construct($config = null) {

        $host = $config['host'];
        $db = $config['dbname'];
        $user = $config['user'];
        $password = $config['password'];

        try {
            $this->connection = new PDO ("mysql:host=$host;dbname=$db", $user, $password);
        } catch(PDOException $e) {
            exit($e->getMessage());
        }
    }

    /*
     * Set $connection to NULL
     */
    public function __destruct() {
        $this->connection = null;
    }

    /**
     * This method execute $inputQuery on $connection and return a result of execution.
     *
     * @param string $inputQuery
     * @param array $data
     *
     * @return mixed
     */
    public function execute($query, $data = null) {

        if (empty($data)) { return $this->connection->query($query)->fetchAll(PDO::FETCH_ASSOC); }

        $statement = $this->connection->prepare($query);
        $statement->execute($data);
        
        return $statement->fetchAll(PDO::FETCH_ASSOC); 
    }
}