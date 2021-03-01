<?php
    class Fish {
        public $db;
        function __construct() {
            $this->db = new DB();
            $this->db->connect();

            return $this;
        }

        function createMackerel(int $num=1) {
            $this->db->query();
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

    class Game {
        public $game_id;
        public $line_strength;
        public $db;

        public function __construct() {
            $this->db = new DB();
            $this->db = $this->db->connect();
        }

        public function createGame() {
            $q = "
                INSERT INTO fishing (
                    mackerel,
                    bass,
                    cod,
                    tuna,
                    shark,
                    lives,
                    modified)
                VALUES (
                    10,
                    8,
                    6,
                    4,
                    1,
                    3,
                    now()
                );
                ";
            $result = $this->game_id = $this->db->query($q);
            return $this->db->insert_id;
        }
    }
?>

<?php
    $game = new Game();
    $game_id = $game->createGame();
?>
