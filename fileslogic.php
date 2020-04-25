<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
</html>>

<?php
// connect to the database

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'dept_portal');
$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

require_once 'config.php';

if(isset($_POST['save']))
{
    $cid=$_SESSION['cid'];
    $name=$_FILES['myfile']['name'];
    $type=$_FILES['myfile']['type'];
    $data= file_get_contents($_FILES['myfile']['tmp_name']);
    $date=$_POST['date'];
    $extension = pathinfo($name, PATHINFO_EXTENSION);
    $url='document_upload.php';
    
    
    if (!in_array($extension, ['zip', 'pdf', 'docx','pptx'])) 
    {
        echo "You file extension must be .zip, .pptx, .pdf or .docx";
    }
    elseif ($_FILES['myfile']['size'] >10000000)
    { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } 
    else 
    {
        $stmt=$dbhandler->prepare("insert into Document values('',?,?,?,?,?)");
        $stmt->bindParam(1,$cid);
        $stmt->bindParam(2,$name);
        $stmt->bindParam(3,$type);
        $stmt->bindParam(4,$data);
        $stmt->bindParam(5,$date);
        $stmt->execute();
        if($stmt)
        {
            echo "<div class='alert alert-success' role='alert' style='margin:50px;'>
  Document uploaded successfully!
</div>";
        }
        else 
        {
            echo "<div class='alert alert-warning' role='alert'>
  Something went  wrong. Please check it out!
</div>";
        }
    }
    
}

?>