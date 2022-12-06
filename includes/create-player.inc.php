<?php
    include "player.inc.php";
    include "session.inc.php";

    if(isset($_SESSION['uid'])){
        $player = new Player($_SESSION['uid']);
    } else {
        $player = new Player(NULL);
    }



?>