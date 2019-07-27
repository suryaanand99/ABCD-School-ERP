<?php
 $connect = mysqli_connect('localhost','root','','schoolwebsite');
   
  if($connect)
{
      if(isset($_POST['save']))
      {
    $regno = $_POST['regno'];
    $studentname= $_POST['studentname'];
    $class= $_POST['class'];
    $dob= $_POST['dob'];
    $section= $_POST['section'];
    $gender= $_POST['gender'];
    $fathername= $_POST['fathername'];
    $mothername = $_POST['mothername'];  
    $mobileno= $_POST['mobileno'];
    $address= $_POST['address'];
    $totalfees= $_POST['totalfees'];
      
    $query= "insert into `adminregister`(regno,studentname,class,dob,section,gender,fathername,mothername,mobileno,address,totalfees) values('$regno','$studentname','$class','$dob','$section','$gender','$fathername','$mothername','$mobileno','$address','$totalfees')";

    $result = mysqli_query($connect,$query);
      }
}      
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
	
	<link rel="stylesheet" type="text/css" href="adminregisterstyle.css">
</head>
<body>
<div class="col-md-1"></div>
<div class="col-md-10">
    <div class="col-md-3">
        <nav>
            <ul class="list">
                <li><strong>ADMIN</strong></li>
            </ul>
        </nav> 
        <div class="circle"></div>
            <div style="background-color: #3B90CF;border: 1px solid #3B90CF;">
                <p class="list" style="text-align:center;"><strong>MAIN NAVIGATION</strong></p>
            </div>
            <h4 class="font" style="text-align:center;"><strong><a href="adminregister.php" style="color:white;">Student Register</a></strong></h4>
            <h4 class="font" style="text-align:center;"><strong><a href="admindisplaytb.php" style="color:white;">ViewAllStudents</a></strong></h4>
            

    </div>
    <div class="col-md-9">
        <nav class="list1">
            <ul class="list" style="display:inline-block;float:left;">
                <li><strong>ABCD SCHOOL OF EDUCATION</strong></li>
            </ul>
            <button type="submit" class="btn" style="margin-left:35%;margin-top:1%;"><a href="login.php">SignOut</a></button>
        </nav>
        
        <h3 style="color:white;position:relative;left:40px;"><strong>STUDENT REGISTER</strong></h3>
        <div class="box"></div>
        <div>
           <form class="form-horizontal" id="fori" action="adminregister.php" method="POST">
            <div class="col-md-6">
                <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" name="regno" class="form-control" placeholder="Reg.no">
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="studentname" placeholder="Student Name">
			        </div>
			    </div>
			       <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="class" placeholder="class">
			        </div>
			    </div>
			       <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="dob" placeholder="DD/MM/YYYY">
			        </div>
			    </div>
			       <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="section" placeholder="Section">
			        </div>
			    </div>
			       <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="gender" placeholder="Gender">
			        </div>
			    </div>
            </div>
            
             <div class="col-md-6">
                  <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="fathername" placeholder="Father's Name">
			        </div>
			    </div>
			       <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="mothername" placeholder="Mother's Name">
			        </div>
			    </div>
			       <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="mobileno" placeholder="Mobile Number">
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control"  style="padding:18%;" name="address" placeholder="Residential Adddress">
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="totalfees" placeholder="Total Fees">
			        </div>
			    </div>
             </div>
            <button type="submit" class="btn" style="position:absolute;top:75vh;left:40vh;" name="save"><strong>SAVE</strong></button>
            </form>
        </div>
        
        
    </div>
</div>
<div class="col-md-1"></div>








 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>