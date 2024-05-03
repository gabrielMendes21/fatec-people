<?php
    namespace App\Src\Database;

    class Conexao {
        public $server;
        public $user;
        public $pass;
        public $bd;
        public $conn;

        public function __construct() {
            $this->server = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->bd = "test";
        
            $this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->bd);
        }
    }

?>