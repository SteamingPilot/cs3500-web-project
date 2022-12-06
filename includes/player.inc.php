<?php
    include "dbconnect.inc.php";

    class Player{
        public $uid;
        public $isPlaying=FALSE;
        public $opponentId=NULL;
        public $gameId=0;
        public $localBoard=NULL;

        private $dbconn;



        // Constructor
        function __construct($uid){
            $this->uid = $uid;

            $DB_SERVER = "localhost";
            $DB_USER = "root";
            $DB_PWD = "";
            $DB_NAME = "playnchat";

            try{
                $this->dbconn = new PDO("mysql:host=$DB_SERVER;dbname=$DB_NAME", $DB_USER, $DB_PWD);

                $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e){
                echo '<script>alert("Failed to connect to the Database. Try again later!");</script>';
            }

          }
        function get_name() {
            return $this->uid;
        }

        // Setters and Getters
        function set_isPlaying($isPlaying){
            $this->isPlaying = $isPlaying;
        }

        function get_isPlaying(){
            return $this->isPlaying ;
        }

        function set_opponentId($opponentId){
            $this->opponentId = $opponentId;
        }

        function get_opponentId(){
            return $this->opponentId;
        }

        function set_gameId($gameId){
            $this->gameId = $gameId;
        }

        function get_gameId(){
            return $this->gameId;
        }

        function set_localBoard($localBoard){
            $this->localBoard = $localBoard;
        }

        function get_localBoard(){
            return $thislocalBoard->localBoard;
        }


        function create_new_game($board){
            $gid = strtotime("now");
            $sql = "INSERT INTO game(gameId, p1, Board) VALUES(:gameId, :p1, :Board)";
            $stmt = $this->dbconn->prepare($sql);

            $success = $stmt->execute(["gameId"=>$gid, "p1"=>($this->uid), "Board"=>$board]);
            if($success){
                $this->set_isPlaying(TRUE);
                $this->set_gameId($gid);
                $this->set_localBoard($board);   
            }
        }

        function checkFriendJoin(){
            $sql = "SELECT * FROM game WHERE gameId=:gameId LIMIT 1";
            $stmt = $this->dbconn->prepare($sql);

            $stmt->execute(["gameId"=>$this->get_gameId());
            if($stmt.rowCount(){
                while($res = $stmt->fetch()){
                    $this->set_opponentId($res['p2']);
                }
            })
        }
    }

?>