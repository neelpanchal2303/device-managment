<?php
    session_start();
    
    unset ($_SESSION['admin_email']);
        
        header("Location: login.php");
        // 
?>

<h1>hii</h1>