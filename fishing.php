<?php
    class Fish {
        public $db;
        function __construct(int $name=null) {
            $this->db = new DB();
            $this->db->connect();

            return $this;
        }
    }

    class DB {
        private $user;
        private $host;
        private $pass;
        private $db;

        public function __construct()
        {
            $this->user = "simitive";
            $this->host = "localhost";
            $this->pass = "simitive";
            $this->db = "simitive";
        }

        public function connect()
        {
            $mysqli = new mysqli(
                $this->host, $this->user,
                $this->pass, $this->db);
            if($mysqli->connect_errno) {
                    printf('db connection failed');
            }
            return $mysqli;
        }
    }
?>
