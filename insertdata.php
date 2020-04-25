<?php
		
                require_once 'config.php';
		if(isset($_POST['stulogin']))
		{
			$name=$_POST['name'];
			$collegeid=$_POST['collegeid'];
			$password=$_POST['password'];
			$repassword=$_POST['repassword'];
			$contactno=$_POST['contactno'];
                        $email=$_POST['email'];
                        
                        $url='stucourselist.php';
                        
                        
                        try{
                            
                            $sql = "INSERT INTO Student(CollegeID,Name,Password,Repassword,ContactNo,Email)"
                                    . "VALUES('$collegeid', '$name','$password','$repassword','$contactno','$email')";
                            
                            $query=$dbhandler->query($sql);
                            //echo "Data is inserted successfully";
                            header('Location: '.$url);

                        }
                        catch(PDOException $e){
                                echo $e->getMessage();
                                die();
                        }
		}
                
                if(isset($_POST['facsubmit']))
		{
			$name=$_POST['name'];
			$facultyid=$_POST['facultyid'];
			$password=$_POST['password'];
			$repassword=$_POST['repassword'];
			$contactno=$_POST['contactno'];
                        $email=$_POST['email'];
                        $skill=$_POST['skill'];
                        $url='courselist.php';
                        
                        
                        try{
                            
                            $sql = "INSERT INTO Faculty(FacultyID,FacName,FacPassword,FacRePassword,FacContactNo,FacEmail,FacSkill)"
                                    . "VALUES('$facultyid', '$name','$password','$repassword','$contactno','$email','$skill')";
                            
                            $query=$dbhandler->query($sql);
                            //echo "Data is inserted successfully";
                            header('Location: '.$url);

                        }
                        catch(PDOException $e){
                                echo $e->getMessage();
                                die();
                        }
		}
                
		if(isset($_POST['addcourse']))
		{
			$name=$_POST['coursename'];
			$description=$_POST['coursedescription'];
			//$facultyid=$_POST['facultyid'];
                        $url='courselist.php';
                        
                        
                        try{
                            
                            $sql = "INSERT INTO Course(CName,CDescription)"
                                    . "VALUES('$name', '$description')";
                            
                            $query=$dbhandler->query($sql);
                            //echo "Data is inserted successfully";
                            header('Location: '.$url);

                        }
                        catch(PDOException $e){
                                echo $e->getMessage();
                                die();
                        }
		}
                
                
	?>