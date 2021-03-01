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

        public function getGame(int $id=null) {
        if ($id) {
        }
        else {
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
    }
?>

    <html>
        <head>
            <script
              src="https://code.jquery.com/jquery-3.5.1.min.js"
              integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
              crossorigin="anonymous"></script>
              <script>
                // ordinirily I'd put this in a separate file, but needs must...
                $("#gofishing").click(goFishing);

                function goFishing() {
                    //retrieve json from http://url/fishing.php?game_id=$id
                }
              </script>
        </head>
        <body>
            <form>
                <input type="button" id="gofishing" value="Go Fishing"/>
            </form>
            <div id="fishing-panel">
                Going fishing
            </div>
        </body>
    </html>

<?php
    if (isset( $_GET['game_id']) ) {
        $game = new Game($_GET['game_id']);
        // here, I'd get the current status of the db and return it as
        // json to the div
    }
    else {
        $game = new Game();
        $game_id = $game->getGame();
        // here, we'd simply insert the required defaults into the db, and then
        // use that to populate some json and return it to the div
    }
?>
