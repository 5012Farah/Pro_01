<?php 

class Db_connection
{	
	private $servername;
	private $username;
	private $password;
	private $dbname;
	private $charset;

	public function connect()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->dbname = "pro_1";
        $this->password = "";
        $this->charset = "utf8mb4";

        try {
            // dsn = data source name
            $dsn = "mysql:host=" . $this->servername . ";
                      dbname=" . $this->dbname . ";
                      charset=" . $this->charset;
            // pdo new (*3)
            $pdo = new PDO($dsn, $this->username, $this->password);

            //  err_handling
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo 'connection failed :' . $e->getMessage();
        }
    }
}
// Object
// $conn = new Db_connection();
// $get_conn = $conn->connect();