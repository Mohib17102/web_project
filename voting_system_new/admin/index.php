<?php
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign In</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">
        #in
    	     {
        	     height:50px;
            	 border-radius:0px;
          	 }
        
	</style>
</head>

<body background="../images/bg.jpg" style="background-repeat:repeat;">
<?php 
		   error_reporting(0);
			include("connection.php"); 
			$conn=mysqli_connect("localhost","root","","election");
			if(isset($_POST['submit']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
			    $qry=mysqli_query($conn,"select * from  `signup` where `username`='$username' and `password`='$password'");	
				while($row=mysqli_fetch_array($qry))
				{
				
				$id=$row['id'];
				$user=$row['username'];
				$pass=$row['password'];
			
			if($user==$username && $pass==$password)
			{
				$_SESSION['st_name']=$row['id'];
				$_SESSION['user_name']=$row['username'];
				header("location:home.php");
			}
		else
		{
			
		header("location:index.php");	
			
		}
		}	}	
	?>

<div class="row" style="margin-top:200px">
<div class="col-md-3"></div>
<div class="col-md-6" align="center">
<div class="panel panel-success" style="width:70%">
<div class="panel-heading" align="center">log in  Form</div>
<div class="panel-body">
<form method="post" > 
<p style="width:90%"><input name="username" type="text" id="in" placeholder="User name" class="form-control" required/></p>
<p style="width:90%"><input name="password" type="password"  id="in" placeholder="Pass word" class="form-control" required/></p>

<p><input type="submit" name="submit" value="log in" id="in" class="btn btn-success btn-lg" /></p>
<p class="panel-footer" align="center" style="background:#F89608"> &copy;Copy Right</p>
</div>
</form>

</div>

<div class="col-md-3"></div>
</div>
</div>


</body>
</html>