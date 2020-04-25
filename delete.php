<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
</html>

<?php

    require_once 'config.php';
    $dbhandler=new PDO("mysql:host=localhost;dbname=dept_portal","root","");
    $id=isset($_GET['id'])?$_GET['id'] : ""; 
    $stmt=$dbhandler->prepare("delete from Document where DocID=?"); 
    $stmt->bindParam(1,$id);
    $stmt->execute();
    echo "<div class='alert alert-success' role='alert' style='margin:50px;'>
  Document Deleted successfully!
</div>";

?>



