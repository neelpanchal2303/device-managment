<?php
    session_start();
    
    unset ($_SESSION['employee_email']);
        
        header("Location: employee_login.php");
        // 
?>

<h1>hii</h1>