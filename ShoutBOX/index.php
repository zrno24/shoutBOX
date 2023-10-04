<?php 
include "database.php";
$query = "SELECT * FROM shouts";
$shouts = mysqli_query($conn, $query);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> SHOUT IT </title>
        <link rel="stylesheet" href ="style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <header>
                
                
                <h1> SHOUT IT! Shoutbox </h1>
            </header>
            <div id="shouts">
                <u1>
                    <?php while($row = mysqli_fetch_assoc($shouts)) :  ?>
                    <li class="shout" <span><?php echo $row['time'] ?></span> <strong><?php echo $row['username'] ?></strong>: <?php echo $row['message'] ?> </li>                  
                    <?php endwhile; ?>
                </u1>
            </div>
            <br>
            <div id='input'>
                <?php if(isset($_GET['error'])) : ?>
                <div class="error"> <?php echo $_GET['error']; ?> </div>
                <?php endif; ?>
                <form method ="POST" action ='process.php'>
                    <input type='text' name='user' placeholder='Enter your name'> 
                    <input type='text' name='message' placeholder='Enter your message'> 
                    <input class ='shout-button' type='submit' name='sendMsg' value='Send'>
             
                </form>
            </div>
        
       
    </body>
</html>
