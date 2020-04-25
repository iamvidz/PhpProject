<?php
    
    session_start();
    
    if($_SESSION['collegeid'])
    {
        
        header("Location: index.php");
        session_destroy();
        
    }
    else if($_SESSION['facultyid'])
    {
        
        header("Location: facultylogin.php");
        session_destroy();
        
    }
    
 
?>