<!DOCTYPE html>
<html>
<head>
	<title>owner page</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
    
	<link rel="stylesheet" type="text/css" href="accotantviewstyle.css">
</head>
<body>
<div class="col-md-1"></div>
<div class="col-md-10">
    <div class="col-md-3">
        <nav>
            <ul class="list">
                <li><strong>OWNER</strong></li>
            </ul>
        </nav> 
        <div class="circle"></div>
            <div style="background-color: #3B90CF;border: 1px solid #3B90CF;">
                <p class="list" style="text-align:center;"><strong>MAIN NAVIGATION</strong></p>
            </div>
            <h4 class="font" style="text-align:center;"><strong><a href="ownerview.php" style="color:white;text-decoration: none;">ViewAllStudents</a></strong></h4>
            

    </div>
    <div class="col-md-9">
        <nav class="list1">
            <ul class="list" style="display:inline-block;float:left;">
                <li><strong>ABCD SCHOOL OF EDUCATION</strong></li>
            </ul>
            <button type="submit" class="btn" style="margin-left:35%;margin-top:1%;"><a href="login.php" style="text-decoration: none;">SignOut</a></button>
        </nav>
        
        <h3 style="color:white;position:relative;left:5%;"><strong>ALL STUDENTS</strong></h3>
        <div>
            <form class="form-inline" method="POST" action="accountantsort.php">
                <div class="form-group">
                    
                    <input type="text" class="form-control" name="class" placeholder="Class">
                </div>
                <div class="form-group">
               
                    <input type="text" class="form-control" name="section" placeholder="Section">
                </div>
                <div class="form-group">
               
                    <input type="text" class="form-control" name="studentname" placeholder="Student ID">
                </div>
                  <button type="submit" class="btn" name="submit">Submit</button>
            </form>
        </div>
        <div>
            <table class="table table-striped" style="width:90%;">
            <thead>
              <tr>
                <th style="color:white;">S.NO</th>
                <th style="color:white;">Reg.No</th>
                <th style="color:white;">Student Name</th>
                <th style="color:white;">Total Fees</th>
                <th style="color:white;">Paid Fees</th>
                <th style="color:white;">Remaining Fees</th>
                <th style="color:white;">Payment</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                 $connect = mysqli_connect('localhost','root','','schoolwebsite');
        $query = "select * from `adminregister`";
        $result = mysqli_query($connect,$query);
                $i=0;
                  $class = $_POST['class'];
                $section = $_POST['section'];
                    $studentname = $_POST['studentname'];
                if($section == '' && $studentname=='')
                {
                   
                    $query = "select * from `adminregister` where class='$class'";
                }
                 else if($studentname=='')
                {
                     
                    $query = "select * from `adminregister` where class='$class' and section='$section'";
                }
                else
                {    
                    $query = "select * from `adminregister` where class='$class' and section='$section' and studentname = '$studentname'";
                }
                     
          $result = mysqli_query($connect,$query);
             
       
                $i=0;
        while($row = mysqli_fetch_assoc($result))
        {$i++;$id=$row['id'];
                $connect = mysqli_connect('localhost','root','','schoolwebsite');
  $query2="select * from `accountantregiater` where id='$id'";
$result2=mysqli_query($connect,$query2);
                $paid=0;
while($row1= mysqli_fetch_assoc($result2))
{
    $paid=$paid+$row1['amountpaid'];
}
                $remain=$row['totalfees']-$paid;?>
        <tr>
        	 	<th><?php echo $i; ?></th>
        	<th><?php echo $row['regno'] ;?></th>
        	<th><?php echo $row['studentname'] ;?></th>
        	 	<th><?php echo $row['totalfees'] ;?></th>
        	<th><?php echo $paid;?></th>
                <th><?php echo $remain ;?></th>
        	 	<th><a href="ownerviewing.php?id=<?php echo $row['id'];?>">VIEW</a></th>
       
        </tr>
    <?php } ?>
           
           
              
            </tbody>
            
            </table>
            
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