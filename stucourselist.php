
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Course List</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/courselist.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css">-->
<!--Bootsrap js files-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />    
    

<?php
    session_start();
    if(!isset($_SESSION['collegeid']))
    {
        
            header('Location: index.php');
        
        
    }
    /*else if(!isset($_SESSION['facultyid']))
    {
        header('Location: facultylogin.php');
    }*/
    
    require_once 'config.php';
?>



</head>
<body>

<div id="wrapper">
	
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
          <a class="navbar-brand" href="#">
              <img src="images/ddu_logo.png" width="30" height="30" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto nav nav-tabs">
              <li class="nav-item active">
                  <a class="nav-link" href="stucourselist.php">Courses <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>-->
              <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          
          </div>
        </nav>
        
    
        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="padding-bottom: 30px;">
                    <img src="images/techimg1.jpg" style="height: 600px; width: 100%"  alt="..." >
              </div>
              <div class="carousel-item" style="padding-bottom: 30px;">
                  <img src="images/techimg2.jpg" style="height: 600px; width: 100%" alt="...">
              </div>
              <div class="carousel-item" style="padding-bottom: 30px;">
                  <img src="images/techimg3.jpg" style="height: 600px; width: 100%" alt="...">
              </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
     </div>

    
    <div class="row row-cols-1 row-cols-md-3">
    
     <?php
            try 
            {
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $query=$dbhandler->query('select * from Course');
                while($r=$query->fetch())
                {   ?>
                    
                          <div class="col mb-4"  style="box-shadow: 2px 5px 5px #888888;">
                             <div class="card h-100">
                            <div class="card-body">
                              <h5 class="card-title">
                                    <?php
                                //echo specific attributes
                                    echo $r['CName'], '<br/>';
                                    $_SESSION['cid']=$r['CourseID'];
                                    $_SESSION['cname']=$r['CName'];
                                    ?>
                                </h5>  
                                <?php echo $r['CDescription'], '<br/>'; ?><br><be>  
                                <a href="document_view.php" class="btn btn-primary">View Document</a>
                            </div>
                         </div>
                    </div>
             
        <?php   }
            }
            catch(PDOException $e)
                {
                    echo $e->getMessage();
                    die();
                }
    ?>  
    
   </div>     
    
    
<footer class="page-footer font-small blue" style="background: ">

  <!-- Copyright -->
  <div class="nav navbar-dark bg-primary">
  <div class="footer-copyright text-center py-3">
      <div class="nav-item"><p style="margin-left: 350px;">&copy; Untitled. All rights reserved. Design by KRISHNA SINROJA & VIDHI MAHERIYA</p></div>
  </div>
  </div>
  <!-- Copyright -->

</footer>



</body>
</html>
