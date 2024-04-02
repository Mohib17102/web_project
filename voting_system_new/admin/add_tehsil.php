<?php
$conn=mysqli_connect("localhost","root","","election");
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
function services()
{
	var name= document.getElementById("name").value;
	var type= document.getElementById("type").value;
	var description= document.getElementById("description").value;
	
	
	if(name=='')
	{
	document.getElementById("ntitle").innerHTML="Enter Name";	
	return false;
	}
	if(name.length<3 || name.length>15)
	{
	document.getElementById("ntitle").innerHTML="name must be greater than 2 or less than 15";	
	return false;
	}
	if(name.match(/^[0-9]+$/))
	{
	document.getElementById("ntitle").innerHTML="Enter text only";	
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
	
		
		if(description=='')
	{
	document.getElementById("desctitle").innerHTML="Enter Text";	
	return false;
	}
	if(description.length<3 || description.length>100)
	{
	document.getElementById("desctitle").innerHTML="description must be greater than 2 or less than 100";	
	return false;
	}
	if(description.match(/^[0-9]+$/))
	{
	document.getElementById("desctitle").innerHTML="Enter text only";	
	return false;
	}
	
}

</script>
<meta charset="utf-8">
<title>Services</title>
<link href="bootstrap/css/bootstrap.min.css.map" rel="stylesheet" type="text/css">
	<style type="text/css">
	.col-md-8 form table tr td input	
			{
				height:45px;
				border-radius:0px;
				}
		td h4
			{
			color:#367608;	
			font-weight:bold;
			font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;	
			}
    </style>
</head>
<body>
	<?php 	include("header.php"); 
			include("connection.php"); 
			error_reporting(0);
			if(isset($_POST['submit']))
			{
			$address_title=$_POST['address_title'];
			$address_type=$_POST['address_type'];
		
			if(!empty($address_title)&&!empty($address_type))
			
		{	
			$qry=mysqli_query($conn,"insert into `address_data`(`id`,`address_title`,`address_type`)value('','$address_title','$address_type')");
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
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;">
<a href="address_data.php"><span class="glyphicon glyphicon-arrow-left "> Back</span></a></p>

    	        <div class="col-md-10">
            		<div class="row">
       					 <div class="col-md-2"></div>
    				        <div class="col-md-8">
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:165px"> <b>Add Tehsil</b></p>
<hr/>
		<form method="post" enctype="multipart/form-data" onSubmit="return services()">
			<table border="0" width="90%" height="auto">
                <tr>
	                <td width="20%"><h4>Tehsil Name</h4></td>
    	            <td><input type="text" name="address_title"  class="form-control" id="names">
               <p id="ntitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p>     
                    </td>
                    
                </tr>
       
             <tr><td></td><td><input type="hidden" name="address_type" value="tehsil" class="form-control" id="names" >
               <p id="ntitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p>     
                    </td></tr>
                <tr>
                     <td></td>
                     <td><input type="submit" name="submit"  value="Add Categary" class="btn-success btn-lg" >
	<?php
			if($qry)
		{
	?>	
		&nbsp;&nbsp;&nbsp;<span class="alert alert-success"> <?php echo $success_message;  	?></span>
	<?php 
			 }
		else
			{
	?>
		&nbsp;&nbsp;&nbsp;<span class="alert alert-danger"> <?php echo $error_message;?></span>
	  <?php } ?>
					</td>
				</tr>
			</table>
		</form>
					</div>
                        </div>
        	                </div>
    	    	                </div>
		<div class="row" style="line-height:50px">
			<div class="col-md-12">
				<!-- <table border="1" width="90%" height="auto" align="center">
					<tr align="center" bgcolor="#565250" style="color:white;font-weight:bold" height="50">
                       <td>S.No</td>
                       <td>Address Title</td>
                      <td>Address Type</td>
                  
                       <td colspan="2" width="20%">Opreation</td>
                   </tr>
	<?php 
	

		$qry=mysqli_query($conn,"select * from  `address_data` where `address_type`='tehsil'");
		$sno= 1; 
		while($row=mysqli_fetch_array($qry)) 
	 		{
	?>
				<tr align="center">
       				<td><?php echo $sno++; ?>  </td>
                    <td><?php echo $row['address_title']; ?></td>
                    <td><?php echo $row['address_type']; ?></td>
                  
                               <td align="center">
                    <a href="update.php?teid=<?php echo $row['id']; ?>"><button class="btn btn-info glyphicon glyphicon-edit">&nbsp;Update</button></a></td>
                    <td align="center">
                    <a href="delete.php?tid=<?php echo $row['id']; ?>"><button class="btn btn-danger glyphicon glyphicon-trash ">&nbsp;Delete</button></a></td> 
                </tr>
	<?php } ?>
			</table>
 -->				</div>
					</div>

	<?php
	include("footer.php")
	?>
    </body>
	</html>	