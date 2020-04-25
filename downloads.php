<?php
    
    require_once 'config.php';
    $dbhandler=new PDO("mysql:host=localhost;dbname=dept_portal","root","");
    $id=isset($_GET['id'])?$_GET['id'] : ""; 
    $stmt=$dbhandler->prepare("select * from Document where DocID=?"); 
    $stmt->bindParam(1,$id);
    $stmt->execute();
    $row=$stmt->fetch();
    header('Content-Type:'.$row['DocMime']);
    echo $row['DocData'];
    
?>