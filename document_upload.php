<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Course List</title>
<meta name="keywords" content="" />
<meta name="description" content="" />


<!--<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="css/courselist.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css">-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php
    session_start();
    if(!isset($_SESSION['collegeid']))
    {
        header('Location: '.$loginurl);
    }
    $cid = $_SESSION['cid'];
    $cname = $_SESSION['cname'];
    //echo "courseID=".$cid."<br> CName=".$cname; 
    require_once 'config.php';
    
?>
    
        <script>
function myFunction() {
  var txt;
  if (confirm("Are you sure want to delete?")) {
    header('Location: delete.php?id=".$row['DocID']');
  } else {
    //txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
    


</head>
<body style="background: white">

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
                  <a class="nav-link" href="courselist.php">Courses <span class="sr-only">(current)</span></a>
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
	
      <div class="container">
      <!--<div class="row">
          <form action="fileslogic.php" method="post" enctype="multipart/form-data" >
              <h3>Upload Document</h3><br>
          <input type="file" name="myfile"> <br>
          <input type="text" name="filename" placeholder="Name to display"> <br>
          <input type="date" name="date"> <br>
          <button type="submit" name="save">upload</button>
          <button type="submit" name="viewall">View All</button>
        
        </form>
      </div>-->
      
      <div class="jumbotron">
                <div id="banner">
        
                  
                    <form action="fileslogic.php" method="post" enctype="multipart/form-data">
                <h3>Upload Document</h3><br>
                <div class="form-group">
                    
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="myfile" required="">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                    
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Course Description</label>
                  <div class="input-group">
                      <input type="date" name="date" class="form-control" required=""> <br> 
                  </div>
                </div>
               
               
                    <button type="submit" class="btn btn-primary" name="save"  >Upload</button>
               
            
            
        </form>
      </div>
     
            </div>
      
      <!--<div class="container">
      <div class="row">
          <form action="fileslogic.php" method="post" enctype="multipart/form-data" >
              <h3 style="margin-left: 400px;">  Uploaded Document</h3><br>
                <ol>
                <?php
                    
                /*$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $stmt=$dbhandler->prepare("select * from Document");
                $stmt->execute();
                while($row=$stmt->fetch())
                {?>
                    <div class="card bg-light mb-3" style="width: 28rem; margin-left: 300px;">
                        <div class="card-header text-black" >
                    <?php echo "<li>".$row['DocName'].""
                           . "<a target='_blank' href='downloads.php?id=".$row['DocID']."'>"
                            . "<img src='images/downloadimage.jpg' style='width:30px; margin-left:60px;'><a href='delete.php?id=".$row['DocID']."'> "
                            . "<img src='images/deleteimage.png' style='width:30px; margin-left:50px;'></a></li></a></li></div>";
                  
                    echo "";
                   echo "</div>";  
                }*/
                
              ?>
                    
         
        </form>
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
        <div class="card" style="width: 150px; height: 300px; box-shadow: 5px 2px 5px #888888;  ">
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
                  
            <div class="card-body" style=" height: 3px;">
                <h5 class="card-title" style="font-size: 20px;">
                        
                      <?php echo "".$row['DocName'];
                   echo "<div class='card-footer' style='width:100px; height: 50px;padding-left:0px;'>
                            <table><tr>
                                <td >
                                    <a target='_blank' href='downloads.php?id=".$row['DocID']."'>"
                                      . "<img src='images/downloadimage.jpg' style='width:34px; '></a>
                                </td>
                                <td>
                                <a href='delete.php?id=".$row['DocID']."'> "
                            . "<img src='images/deleteimage.png' style='width:30px; margin-bottom:
                                2px;  margin-left:35px;'></a>
                                </td>
                                </tr></table>
                            </div>";
                      echo "</div></div></div>";
                   
                }
              
              ?>  
                    </h5>
            
           
</div> 
      
	
</body>
</html>

 