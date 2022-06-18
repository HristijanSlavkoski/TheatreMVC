<?php
    class Database {
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;

        private $statement;
        private $dbHandler;
        private $error;

        public function __construct() {
            $conn = 'mysql:host=' . $this->dbHost;

            try {
                $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass);
                $this->dbHandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->dbHandler->setAttribute(PDO::ATTR_PERSISTENT, true);

               // $sql = "CREATE DATABASE IF NOT EXISTS " . $this->dbName;
               // $this->dbHandler->exec($sql);
               // echo "Database created successfully\n";

             //   $sql = "use " .$this->dbName;
              //  $this->dbHandler->exec($sql);
                  


                 $sql = file_get_contents('../app/core/file.sql');


                //uboo ke e ako mojme vo poseben fajl da gi izvajme
                //site tableti i samo da go povikame ovde toj file
                //mozhe toa da se napravi lesno e ama poleka 😉
              /*  $sql = "CREATE TABLE IF NOT EXISTS user (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(255) NOT NULL,
                    email VARCHAR(255),
                    password VARCHAR(255) NOT NULL
                    )";
                    */
                $this->dbHandler->exec($sql);
            } catch (PDOException $e) {
                $this->error = $e->getMessage();

                echo $this->error;
            }
        }
        public function query($sql) {
            $this->statement = $this->dbHandler->prepare($sql);
        }
        public function bind($parameter, $value, $type = null) {
            switch (is_null($type)) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
            $this->statement->bindValue($parameter, $value, $type);
        }

        //Execute the prepared statement
        public function execute() {
            return $this->statement->execute();
        }

        //Return an array
        public function resultSet() {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        //Return a specific row as an object
        public function single() {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        //Get's the row count
        public function rowCount() {
            return $this->statement->rowCount();
        }
        
    }