<?php

?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>SignUp</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">
.col-md-6 form table tr td input
	{
		height:45px;
		border-radius:0px;	
		margin-top: 5px;
	}
	.col-md-6 form table tr td select
	{
		height:45px;
		border-radius:0px;	
		margin-top: 5px;
	}
td h4
	{
		color:#367608;	
		font-weight:bold;
		font-family:Baskerville, "Palatino Linotype", Palatino, "Century 			Schoolbook L", "Times New Roman", serif;	
	}
</style>
</head>
<body>
	<?php include("header.php");
		error_reporting(0);
	  include("admin/connection.php");
	  $conn=mysqli_connect("localhost","root","","election");
	?>
	<?PHP
	if(isset($_POST['sub']))
		{
		
		$cnic=$_POST['cnic'];
		$gender=$_POST['gender'];
		$area_of_vote=$_POST['area_of_vote'];
		$username=$_POST['username'];
		$password=$_POST['password'];
	if(!empty($cnic)&&!empty($gender)&&!empty($area_of_vote)&&!empty($username)&&!empty($password))
		{
	   $qry=mysqli_query($conn,"insert into `st_signup` (`id`,`cnic`,`gender`,`area_of_vote`,`username`,`password`)value('','$cnic','$gender','$area_of_vote','$username','$password')");
		$success_message="Data Successfully Inserted";
			}
		else
			{
		$error_message= "Fill All The Fields";
			}
			}
	?>
		
			<div class="row" >
				<div class="col-md-2">
	<?php 
		include("menu.php");
	?>
			</div>
			<br/>
<br>
<hr/>
				<div class="col-md-10">
					<div class="row" >
					<div class="col-md-3"></div>	
				<div class="col-md-6">
					<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:160px"> <b>Sign Up Here</b></p><hr/>
	<form method="post" enctype="multipart/form-data">
		<table border="0" height="300" width="95%" cellspacing="20" > 
         
            <tr>
                <td><h4>CNIC</h4></td>
                <td colspan="2"><input name="cnic" type="number"  class="form-control" ></td>
            </tr>

 <tr>
                <td><h4>Gender</h4></td>
                <td colspan="2">
                	<select name="gender" type="text"  class="form-control" >
<option>Male</option>
<option>Female</option>
<option>Other</option>

                	</select>
                </td>
            </tr>


             <tr>
                <td><h4>Area of vote</h4></td>
                <td colspan="2">
                	<select name="area_of_vote" class="form-control">
                		<option>Select Area</option>
                		<?php $qry=mysqli_query($conn,"select * from  `add_area`");
			$sno= 1; 
			while($row=mysqli_fetch_array($qry)) 
  				{  ?>
<option><?php echo $row['area_title']; ?></option>

<?php } ?>
                	</select>
                </td>
            </tr>
            
          
            <tr>
                <td><h4>User Name</h4></td>
                <td colspan="2"><input name="username" type="text" id="uname"  class="form-control">
                <p id="utitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p> 
                </td>
            </tr>
            <tr>
                <td><h4>Password</h4></td>
                <td colspan="2"><input name="password" type="password" id="password" class="form-control">
                <p id="passitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p> 
                </td>
            </tr>
            <tr>
                <td></td>            
                <td><input type="submit" name="sub" id="in"  value="sign up" class="btn btn-success btn-lg ">
	<?php
			if($qry)
				{
	?>	
		&nbsp;&nbsp;&nbsp;<span class="alert alert-success"> <?php echo $success_message;  ?></span>
	<?php 
				 }
 			else
 				{
  	?>
  		&nbsp;&nbsp;&nbsp;<span class="alert alert-danger"> <?php echo $error_message;    ?></span>
	<?php } ?>
			</td>
				
			</tr>
		</table>
	</form>
					</div>
						</div>
							</div>
								</div>
		<div class="row" style="line-height:50px;">
			<div class="col-md-12">

				</div>
					</div>
	<?php
    include("footer.php")
    ?>
    
    </body>
    </html>