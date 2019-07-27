<?php
$username="Username";
        $password="Password";
if(isset($_POST["submit"]))
{
    $username=isset($_POST["username"])?$_POST["username"]:"Username";
    $password=isset($_POST["password"])?$_POST["password"]:"Password";
    if($username=="admin")
    {
        if($password=="admin" ||$password="ADMIN")
        {
             header('Location:adminregister.php');
        exit();
        }
          else
    {
        $username="invalid username!!";
        $password="invalid password!!";
    }
    
    }
    else if($username=="accountant")
    {
        if($password=="accountant"||$password=="ACCOUNTANT")
        {
              header('Location:accotantview.php');
        exit();
        }
          else
    {
        $username="invalid username!!";
        $password="invalid password!!";
    }
       
    }
    else if($username=="owner")
    {
        if($password=="owner"||$password=="OWNER")
        {
             header('Location:ownerview.php');
        exit();
        }
          else
    {
        $username="invalid username!!";
        $password="invalid password!!";
    }
         
    }
    else
    {
        $username="invalid username!!";
        $password="invalid password!!";
    }
  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="loginst.css">
</head>
<body>
	<div class="col-sm-2"></div>
	<div class="col-sm-6">
		<div class="col-sm-6">
			<div class="textbox">
				<p style="font-size: 100px;"><strong>ABCD</strong></p>
				<p style="font-size: 50px;"><strong>SCHOOL OF</strong></p>
				<p style="font-size: 40px;"><strong>EDUCATION</strong></p>
			</div>
		</div>
		<div class="col-sm-6">
         <div class="box"> </div>
		    <form class="form-horizontal" action="login.php" method="POST">
               
			    <div class="form-group">
			        <div class="col-sm-11">
			            <input type="text" class="form-control" name="username" placeholder="<?php echo $username;?>">
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="col-sm-11">
			            <input type="password" class="form-control" name="password" placeholder="<?php echo $password;?>">
			        </div>
			    </div>
			    <div class="form-group col-sm-12">
			        <button type="submit" class="btn btn-primary btn-block" name="submit" value="redirect">LOGIN</button>
			    </div>
			</form>
		</div>
	</div>
	<div class="col-sm-2"></div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>