
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
        
      <!--<div class="container">
      <div class="row">
          <form action="fileslogic.php" method="post" enctype="multipart/form-data" >
              <h3> Recently Uploaded Document</h3><br>
                <div class="row row-cols-1 row-cols-md-3"> 
                <?php
                
                /*require_once 'config.php';
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $stmt=$dbhandler->prepare("select * from Document");
                $stmt->execute();
                while($row=$stmt->fetch())
                {?>
                   <div class="card" style="width: 09rem;">
                       <img src="images/pdfimage.png" class="card-img-top" alt="..."> 
                    <?php echo "<a target='_blank' href='downloads.php?id=".$row['DocID']."'>".$row['DocName']."</a>";?>
                    
                    <div class="card-footer">
                        <h5 class="card-title"><?php echo "<a target='_blank' href='downloads.php?id=".$row['DocID']."'>"?></h5>
                        <img src="images/downloadimage.jpg"  style="width: 02rem;">
                        <?php echo "</a>" ?>
                    </div><br>
               <?php }
                    echo "</div>";  
                echo "</div>";*/
              ?>
                        </div>
        </form>
      </div>  
    </div>-->
    
  <!--<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>-->
    

    <!--<div class="container">
      <div class="row">
          <form action="fileslogic.php" method="post" enctype="multipart/form-data" >
              <h3> Recently Uploaded Document</h3><br><br><br>
                <ol>
                <?php
                
                /*require_once 'config.php';
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $stmt=$dbhandler->prepare("select * from Document");
                $stmt->execute();
                while($row=$stmt->fetch())
                {?>
                    <div class="card bg-light mb-3" style="width: 28rem; margin-left: 300px;">
                        <div class="card-header text-black" >
                   <?php echo "<li>".$row['DocName'].""
                           . "<a target='_blank' href='downloads.php?id=".$row['DocID']."'><img src='images/downloadimage.jpg' style='width:30px; margin-left:60px;'></a></li></div>";
                   echo "</div>";
                   
                }*/
              
              ?>
         
            </form>
          </div>  
    </div>-->
  
</body>
</html>

<!--<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
</div>-->





<!--<div class="card-group">

  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>-->


<div class="row row-cols-2 row-cols-md-6" style="margin: 30px; padding-top: 50px;">
   <?php
                
                require_once 'config.php';
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $stmt=$dbhandler->prepare("select * from Document");
                $stmt->execute();
                while($row=$stmt->fetch())
    {?>
    <div class="col mb-4" >
        <div class="card" style="width: 150px; height: 280px; box-shadow: 5px 2px 5px #888888; ">
                  <?php
                    $ext=$row['DocMime'];
                    if($ext=='application/pdf')
                    {
                        echo "<img src='images/pdfimage.png'class='card-img-top' alt='...' style='width:150px; height:150px;' >";
                    }
                    else if($ext=='application/x-zip-compressed')
                    {
                        echo "<img src='images/zipimage.png'class='card-img-top' alt='...' >";
                    }
                  ?>
                  
            <div class="card-body" style="height: 3px;">
                <h5 class="card-title" style="font-size: 20px;">
                        
                      <?php echo "".$row['DocName'];
                   echo "<div class='card-footer' style='width:70px; margin-left:20px; background-color:white;'>
                            <a target='_blank' href='downloads.php?id=".$row['DocID']."'>"
                              . "<img src='images/downloadimage.jpg' style='width:30px; '></a>
                          </div>";
                      echo "</div></div></div>";
                   
                }
              
              ?>  
                    </h5>
            
           
</div>