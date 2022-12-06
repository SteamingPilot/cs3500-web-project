<?php

    if(isset($_POST["newGame"])){
        echo "Hello World";
        $player = $_POST['player'];
        $game = $_POST['game'];
        if($game == "tictactoe"){
            $boardString = "---------";
        }

        $player->create_new_game($boardString);

    } else{
        header("Location: index.php")
    }


?>