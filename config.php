<?php
  
    
    
            //$url='insertdata.php';
    
            try
            {
                $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=dept_portal','root','');
                //echo "Connection is established...<br/>";
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $url='courselist.php';
                $sql="CREATE TABLE Student(StuID INT(11) PRIMARY KEY AUTO_INCREMENT "
                                . ",CollegeID  VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL, Password VARCHAR(30) NOT NULL,"
                                . "RePassword VARCHAR(30) NOT NULL, ContactNo VARCHAR(15) NOT NULL, Email VARCHAR(50) NOT NULL)";
                if(!$url)
                {
                    $query=$dbhandler->query($sql);
                    //echo "Table is created successfully";
                }
                else
                {
                    //echo"Table already created";
                }
                
                //header('Location: '.$url);

            }
            catch(PDOException $e)
            {
                    echo $e->getMessage();
                    die();
            }
      
?>