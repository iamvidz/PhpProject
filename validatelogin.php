<?php
    //echo "Validate login Page";
    
    //require_once 'config.php';

    session_start();
        
    
    
    if(isset($_POST['stulogin']))
    {
        $collegeid=$_POST['collegeid'];
        $password=$_POST['password'];
        $courseurl='stucourselist.php';
        $loginurl='index.php';

        $con=mysqli_connect("localhost", "root", "", "dept_portal");
        $sql="select * from Student where CollegeID='".$collegeid."' and Password='".$password."'";
        $result= mysqli_query($con, $sql);
        if($row= mysqli_fetch_row($result))
        {
            $_SESSION['collegeid']=$collegeid;
            header('Location: '.$courseurl);
        }
        else 

        {
            header('Location: '.$loginurl);
        }
    }
    
    
    
    else if(isset($_POST['faclogin']))
    {
        
        
        $facultyid=$_POST['facultyid'];
        $password=$_POST['password'];
        $courseurl='courselist.php';
        $loginurl='facultylogin.php';

        $con=mysqli_connect("localhost", "root", "", "dept_portal");
        $sql="select * from Faculty where FacultyID='".$facultyid."' and FacPassword='".$password."'";
        $result= mysqli_query($con, $sql);
        if($row= mysqli_fetch_row($result))
        {
            $_SESSION['facultyid']=$facultyid;
            header('Location: '.$courseurl);
        }
        else 

        {
            header('Location: '.$loginurl);
        }
    }
            
    
    
?>