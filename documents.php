<!--This is now the modified file after the gitHub desktop -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : ClearFigure 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140310

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Course List</title>
<meta name="keywords" content="" />
<meta name="description" content="" />


<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="css/courselist.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<?php
    session_start();
    if(!isset($_SESSION['collegeid']))
    {
        header('Location: '.$loginurl);
    }
?>


</head>
<body>

<div id="wrapper">
	
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li class="current_page_item"><a href="#">Courses</a></li>
				<li><a href="#">Q/A</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">My Profile</a></li>
                                <li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<!-- end #menu --> 
	</div>
	
	
	
	
		

</body>
</html>


