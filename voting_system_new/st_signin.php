<?php
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign In</title>
<link rel="stylesheet" type="text/css" href="admin/bootstrap/css/bootstrap.min.css">
<style type="text/css">
        #in
    	     {
        	     height:50px;
            	 border-radius:0px;
          	 }
        
	</style>
</head>

<body background="images/bg2.jpg">
<?php 
		   error_reporting(0);
			$conn=mysqli_connect("localhost","root","","election");



			if(isset($_POST['submit']))
			{
				$cnic=$_POST['cnic'];
				$password=$_POST['password'];
			    $qry=mysqli_query($conn,"select * from  `st_signup` where `cnic`='$cnic'");	
				while($row=mysqli_fetch_array($qry))
				{
				
				$id=$row['id'];
				$cnic=$row['cnic'];
				$pass=$row['password'];
			
			if($cnic==$cnic && $pass==$password)
			{
				$_SESSION['st_name']=$row['id'];
				$_SESSION['user_name']=$row['username'];
				$_SESSION['user_area']=$row['area_of_vote'];
				header("location:vote_cost.php");
			}
		else
		{
			
		header("location:st_signin.php");	
			
		}
		}	}	
	?>

<div class="row" style="margin-top:150px">
<div class="col-md-3"></div>

<div class="col-md-6" align="center">
<div class="btn btn-success"><a href="index.php" style="color: white">Go To Home Page</a></div>

<div class="panel panel-success" style="width:70%;margin-top: 30px">
<div class="panel-heading" align="center">log in Form</div>
<div class="panel-body">
<form method="post" > 
<p style="width:90%"><input name="cnic" type="text" id="in" placeholder="Cnic #" class="form-control" required/></p>
<p style="width:90%"><input name="password" type="password"  id="in" placeholder="Password" class="form-control" required/></p>

<p><input type="submit" name="submit" value="log in" id="in" class="btn btn-success btn-lg" /></p>
<p><a href="st_signup.php">Create New Account</a></p>
<p class="panel-footer" align="center"> &copy;Copy Right</p>
</div>
</form>

</div>

<div class="col-md-3"></div>
</div>
</div>


</body>
</html>