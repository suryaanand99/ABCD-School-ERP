<?php
$id=$_GET['id'];
$connect = mysqli_connect('localhost','root','','schoolwebsite');
  $query2="select * from `accountantregiater` where id='$id'";
$result2=mysqli_query($connect,$query2);
$paid=0;
while($row= mysqli_fetch_assoc($result2))
{
    $paid=$paid+$row['amountpaid'];
}
mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<head>
	<title>accountant page</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
        
	<link rel="stylesheet" type="text/css" href="accountantregister.css">
	
</head>
<body>

<div class="col-md-1"></div>
<div class="col-md-10">
    <div class="col-md-3">
        <nav>
            <ul class="list">
                <li><strong>ACCOUNTANT</strong></li>
            </ul>
        </nav> 
        <div class="circle"></div>
            <div style="background-color: #3B90CF;border: 1px solid #3B90CF;">
                <p class="list" style="text-align:center;"><strong>MAIN NAVIGATION</strong></p>
            </div>
            <h4 class="font" style="text-align:center;"><strong><a href="accotantview.php" style="color:white;text-decoration: none;">ViewAllStudents</a></strong></h4>
            

    </div>
    <div class="col-md-9">
        <nav class="list1">
            <ul class="list" style="display:inline-block;float:left;">
                <li><strong>ABCD SCHOOL OF EDUCATION</strong></li>
            </ul>
            <button type="submit" class="btn" style="margin-left:35%;margin-top:1%;"><a href="login.php" style="text-decoration: none;">SignOut</a></button>
        </nav>
        
        <h4 style="color:white;position:relative;left:5%;"><strong>STUDENT PROFILE</strong></h4>
        <div class="box">
          <div class="col-md-6"> <?php  
              $connect = mysqli_connect('localhost','root','','schoolwebsite');
 $query = "select * from `adminregister` where id='$id'";
$result = mysqli_query($connect,$query);
              while($row = mysqli_fetch_assoc($result)){ $remain=$row['totalfees']-$paid;
              if($remain==0)
              {
                  $status="paid";
                  $a="hidden";
              }
              else
              {
                  $status="not paid";
                  $a="text";
              }?>    
              <p >Name: <?php echo $row['studentname'];?></p>
               <p >Class: <?php echo $row['class'];?>th</p>
                <p>Section: <?php echo $row['section'];?></p>
                 <p >DOB: <?php echo $row['dob'];?></p>
                  <p >Father's Name: <?php echo $row['fathername'];?></p>
          </div>
           <div class="col-md-6">
              <p>Mother's Name: <?php echo $row['mothername'];?></p> 
               <p>Mobile Number: <?php echo $row['mobileno'];?></p>
               <p>Total Fees: <?php echo $row['totalfees'];?></p>
                <p>Res Address: <?php echo $row['address'];?></p>    
          </div>
        </div> 
         <h4 style="color:white;position:relative;left:5%;"><strong>STUDENT RECEIPT</strong></h4>
         <div class="box" style="height:40%;">
             <div class="col-md-6">
              <p >Total Fees: <?php echo $row['totalfees'];?></p>
               <p >Remaining Fees:<?php echo $remain;?></p>
                
          </div>
           <div class="col-md-6">
              <p>Paid Fees:<?php echo $paid;?></p> 
               <p>Status:<?php echo $status;?></p>     
          </div> <?php }?>
          <form class="form-inline" action="accotantview.php" method="POST">
                <div class="form-group">
                    <input type="<?php echo $a;?>" class="form-control" placeholder="Enter Amount" name="amountpaid">
                     <input type="hidden" name="id" value="<?php echo $id;?>" >
                </div>
                  <button style="position:absolute;top:65%;left:45%;" type="submit" class="btn btn-primary" name="pay">Pay</button>
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

