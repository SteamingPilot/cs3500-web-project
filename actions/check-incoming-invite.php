<?php
include "../includes/dbconnect.inc.php";
$_SESSION["isInvited"] = false;
?>    
    <script>
        setInterval(() => {
        <?php
            

            if(isset($_SESSION['UserId']) && $_SESSION["isInvited"] == false){
                $sql = "SELECT * FROM invite WHERE invitee=$uid LIMIT 1";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                if($stmt->rowCount() > 0){
                    // Add Name of the invitee here.
                    $_SESSION['isInvited'] = true;
                    
                    // After processing an invite, we will remove it from the invite from the invite table.
                    $resInvite = $stmt->fetch();
                    $inviteId = $resInvite['inviteId'];
                    $gameId = $resInvite['gameId'];

                    $conn->beginTransaction();
                    $sql2 = "DELETE FROM invite WHERE inviteId = $inviteId;";
                    
                    $stmt2 = $conn->prepare($sql2);

                    $success2 = $stmt2.execute();

                    if ($success2){
                        ?>

                        if(confirm("You have been invited to a game. Accept?") == true){
                            // invitee chose to play. 
                            // We will update the game record, with p2 = current user.
                            <?php
                                $sql3 = "UPDATE game SET p2=$uid WHERE gameId=$gameId;"

                                $stmt3 = $conn-preepare($soql3);
                                $success3 = $stmt3->execute();

                                if($success3){
                                    $_SESSION['isPlaying'] = TRUE;
                                    $conn->commit();

                                    $sql5 = "SELECT * FROM game WHERE gameId=$gameId";
                                    $stmt5 = $conn->prepare($sql5);
                                    $stmt5->execute();
                                    $resGame = $stmt5.fethc();
                                    
                                    $gameType = $resGame["gameType"];

                                    if($gameType == 1){
                                        header("Location: games/tictac.php");
                                    }
                                    

                                
                                } else{
                                    $conn->rollback();
                                }

                            ?>

                        } else{
                            // Invitee chose not to accept.
                            // in that case we are going to delete the game record from game table.
                            
                            <?php
                                // No need to prepare statement with place holder because the gameId came from our own Query and NOT the user.
                                $sql4 = "DELETE FROM game WHERE gameId=$gameId";

                                $stmt4  = $conn->prepare($sql4);
                                $success4 = $stmt4.execute();
                                
                                if ($success4){
                                    $conn->commit();
                                    $_SESSION['isInvited'] = FALSE;
                                    
                                } else {
                                    $conn->rollback();
                                    $_SESSION["isInvited"] = TRUE;
                                    $_SESSION["isPlaying"] = FALSE;
                                }

                            ?>
                            

                        }



                    <?php 
                    } else {
                        $conn->rollback();
                    }


                ?>
                
                    


                <?php 
                } else{
                    // Do nothing
                }
            }

        ?>

        }, 1500);
    </script>
