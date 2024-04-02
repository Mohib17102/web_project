<?php
session_start();
if($_SESSION['user_name']==false)
{
header("location:index.php");	
}
?>
<!doctype html>
<html>
<head>
<script type="text/javascript">
function signup()
{
	var fname= document.getElementById("fname").value;
	var lname= document.getElementById("lname").value;
	var cell= document.getElementById("cell").value;
	var uname= document.getElementById("uname").value;
	var password= document.getElementById("password").value;
	
	
	
	if(fname=='')
	{
	document.getElementById("ftitle").innerHTML="Enter first name";	
	return false;
	}
	if(fname.length<3 || fname.length>15)
	{
	document.getElementById("ttitle").innerHTML="title must be greater than 2 or less than 15";	
	return false;
	}
	if(fname.match(/^[0-9]+$/))
	{
	document.getElementById("ftitle").innerHTML="Enter text only";	
	return false;
	}
	if(lname=='')
	{
	document.getElementById("ltitle").innerHTML="Enter last name";	
	return false;
	}
	if(lname.length<3 || lname.length>15)
	{
	document.getElementById("ltitle").innerHTML="title must be greater than 2 or less than 15";	
	return false;
	}
	if(lname.match(/^[0-9]+$/))
	{
	document.getElementById("ltitle").innerHTML="Enter text only";	
	return false;
	}
				if(cell=='')
	{
	document.getElementById("ctitle").innerHTML="Enter cell#";	
	return false;
	}
	if(cell.length!=11)
	{
	document.getElementById("ctitle").innerHTML="cell# must be 11 didits";	
	return false;
	}
	if(cell.match(/^[A-Za-z]+$/))
	{
	document.getElementById("ctitle").innerHTML="Enter digits only";	
	return false;
	}
			if(uname=='')
	{
	document.getElementById("utitle").innerHTML="Enter last name";	
	return false;
	}
	if(uname.length<3 || uname.length>25)
	{
	document.getElementById("utitle").innerHTML="title must be greater than 2 or less than 25";	
	return false;
	}
	
			if(password=='')
	{
	document.getElementById("passtitle").innerHTML="Enter password";	
	return false;
	}
	if(password.length<3 || password.length>15)
	{
	document.getElementById("passtitle").innerHTML="password must be greater than 2 or less than 15";	
	return false;
	}

		if(cell=='')
	{
	document.getElementById("ctitle").innerHTML="Enter cell#";	
	return false;
	}
	if(cell.length!=11)
	{
	document.getElementById("ctitle").innerHTML="cell# must be  11 didits and digits only";	
	return false;
	}
	if(address.match(/^[A-Za-z]+$/))
	{
	document.getElementById("ctitle").innerHTML="Enter digits only";	
	return false;
	}
	
	if(phone=='')
	{
	document.getElementById("ptitle").innerHTML="Enter phone#";	
	return false;
	}
	if(phone.length!=10)
	{
	document.getElementById("ptitle").innerHTML="phone# must be 10 didits";	
	return false;
	}
	if(address.match(/^[A-Za-z]+$/))
	{
	document.getElementById("ptitle").innerHTML="Enter digits only";	
	return false;
	}
		if(dlink=='')
	{
	document.getElementById("dltitle").innerHTML="Enter link ";	
	return false;
	}
	if(dlink.length<3 || dlink.length>25)
	{
	document.getElementById("dltile").innerHTML="link must be greater than 2 or less than 25";	
	return false;
	}
	if(title.match(/^[0-9]+$/))
	{
	document.getElementById("dltitle").innerHTML="Enter text only";	
	return false;
	}
	if(type=='')
	{
	document.getElementById("typetitle").innerHTML="Enter type";	
	return false;
	}
	if(type.length<3 || type.length>25)
	{
	document.getElementById("typetitle").innerHTML="type must be greater than 2 or less than 25";	
	return false;
	}
	if(type.match(/^[0-9]+$/))
	{
	document.getElementById("typetitle").innerHTML="Enter text only";	
	return false;
	}
	
}

</script>
<meta charset="utf-8">
<title>SignUp</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">
#in
	{
		height:45px;
		border-radius:0px;	
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
	  include("connection.php");
	?>
	<?PHP
	if(isset($_POST['submit']))
		{
		$name=$_POST['name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$cell_no=$_POST['cell_no'];
		$select=$_POST['select'];
		$date=$_POST['date'];
		$username=$_POST['username'];
		$password=$_POST['password'];
	if(!empty($name)&&!empty($last_name)&&!empty($email)&&!empty($cell_no)&&!empty($select)&&!empty($date)&&!empty($username)&&!empty($password))
		{
	   $qry=mysql_query("insert into `signup` (`id`,`name`,`last_name`,`email`,`cell_no`,`select`,`date`,`username`,`password`)value('','$name','$last_name','$email','$cell_no','$select','$date','$username','$password')");
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
						<div class="col-md-3"><img src="../images/download.jpg" width="80%" />	<p>This is information about sign up.This is information about sign up. This is information about sign up. This is information about sign up. This is information about sign up. This is information about sign up. This is information about sign up. This is information about sign up. This is information about sign up. This is information about sign up.  </p>
						</div>
				<div class="col-md-9">
					<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:160px"> <b>Sign Up Here</b></p><hr/>
	<form method="post" enctype="multipart/form-data" onSubmit="return signup()">
		<table border="0" height="400" width="95%" cellspacing="20" > 
            <tr>
                <td><h4>Name</h4></td>
                <td><input name="name" type="text"  class="form-control" id="fname">
                <p id="ftitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px" /></p> 
                </td>
                <td> <input name="last_name" type="text" placeholder=" last Name" id="lname" class="form-control" />
               <p id="ltitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p>  
                </td>
            </tr>
            <tr>
                <td><h4>Email</h4></td>
                <td colspan="2"><input name="email" type="email" id="in"  class="form-control" ></td>
            </tr>
            <tr>
                <td><h4>Cell No</h4></td>
                <td colspan="2"><input name="cell_no" type="text" id="cell" class="form-control">
                <p id="ctitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p> 
                </td>
            </tr>
            <tr>
                <td><h4>Gender</h4></td>
                <td>  <select class="form-control" id="in" name="select" >
                
                
                <option>Gender </option>
                <option>Male</option>
                <option>Female</option>
                
                </select> </td>
                <td> <input name="date" type="date"  id="in" placeholder="Date Of Birth" class="form-control">
                </td>
            </tr>
            <tr>
                <td><h4>User Name</h4></td>
                <td colspan="2"><input name="username" type="text" id="uname"  class="form-control">
                <p id="utitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p> 
                </td>
            </tr>
            <tr>
                <td><h4>PassWord</h4></td>
                <td colspan="2"><input name="password" type="password" id="password" class="form-control">
                <p id="passitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p> 
                </td>
            </tr>
            <tr>
                <td></td>            
                <td><input type="submit" name="submit" id="in"  value="sign up" class="btn btn-success btn-lg ">
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
		<table border="1px" width="80%" height="auto" align="center">
            <tr align="center" bgcolor="#565250" style="color:white;font-weight:bold" height="50">
                   <td>S.No</td>
                   <td>Name</td>
                   <td>Last Name</td>
                   <td>Email</td>
                   <td>cell No</td>
                   <td>Gender</td>
                   <td>Date Of Birth</td>
                   <td>User Name</td>
                   <td>Pass Word</td>
                   <td colspan="2" width="20%">Opreation</td>
            </tr>
	<?php 
			$qry=mysql_query("select * from  `signup`");
			$sno= 1; 
			while($row=mysql_fetch_array($qry)) 
  			{
	?>
    	    <tr align="center">
                    <td><?php echo $sno++; ?>  </td>
                    <td><?php echo $row['name'];    ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email'];    ?></td>      
                    <td><?php echo $row['cell_no'];  ?></td>
                    <td><?php echo $row['select'];   ?></td>
                    <td><?php echo $row['date'];     ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td align="center">
                    <a href="update.php?siid=<?php echo $row['id']; ?>"><button class="btn btn-info glyphicon glyphicon-edit">&nbsp;Update</button></a></td>
                    <td align="center">
                    <a href="delete.php?suid=<?php echo $row['id']; ?>"><button class="btn btn-danger glyphicon glyphicon-erase ">&nbsp;Delete</button></td> 
 			</tr>
	<?php } ?>
			</table>
				</div>
					</div>
	<?php
    include("footer.php")
    ?>
    
    </body>
    </html>