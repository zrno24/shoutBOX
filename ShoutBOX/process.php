<?php

include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['sendMsg'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
     
    date_default_timezone_set('Europe/Zagreb');
    $time = date('h:i:s a', time());
    
    if(!isset($user) || $user == '' || !isset($message) || $message == "") {
        $error = "Please fill in your name and message";
        header("Location: index.php?error=" . urlencode($error));
        exit();
    } else {
        $query = "INSERT INTO shouts (username, message, time) VALUES ('$user', '$message', '$time')";
       if(!mysqli_query($conn, $query)) {
           die("Error: " . mysqli_error($conn));
       } else {
        header("Location: index.php");
        exit();
    }
     
    
    
    }
}
}
?>

