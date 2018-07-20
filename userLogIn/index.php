<?php
session_start();

function displayAccountInfo(){
    if(isset($_SESSION['username']))
    {
        include 'accountInfo.php';
    }
    else
    {
        header("Location: login.php");
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>EcoEarn</title>
    </head>
    
    <body>
        <!--Display user and logout button-->
        <div class="user-menu">
            <?php echo "Welcome ".$_SESSION['username']."! ";?> 
            <input type="button" id="logoutBtn" value="Logout" />    
        </div>
        
        <div class="content-wrapper">
            <!--Display Quiz Content-->
            <div id="info">
                <?=displayAccountInfo()?>
                    
            </div>
    
        </div>
        
    </body>
</html>