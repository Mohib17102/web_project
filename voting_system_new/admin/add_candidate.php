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
	<title>Add Candidate</title>
<script type="text/javascript">
function team()
{
	var name= document.getElementById("name").value;
	var designation= document.getElementById("designation").value;
	var profession= document.getElementById("profession").value;
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
		if(designation=='')
	{
	document.getElementById("dtitle").innerHTML="Enter designation";	
	return false;
	}
	if(designation<3 || designation.length>15)
	{
	document.getElementById("dtitle").innerHTML="designation must be greater than 2 or less than 15";	
	return false;
	}
	if(designation.match(/^[0-9]+$/))
	{
	document.getElementById("dtitle").innerHTML="Enter text only";	
	return false;
	}
	
		if(profession=='')
	{
	document.getElementById("ptitle").innerHTML="Enter Text";	
	return false;
	}
	if(profession.length<3 || profession.length>15)
	{
	document.getElementById("ptitle").innerHTML="profession must be greater than 2 or less than 15";	
	return false;
	}
	if(profession.match(/^[0-9]+$/))
	{
	document.getElementById("ptitle").innerHTML="Enter text only";	
	return false;
	}
		if(description=='')
	{
	document.getElementById("desctitle").innerHTML="Enter Text";	
	return false;
	}
	if(description<3 || descriptionlength>15)
	{
	document.getElementById("desctitle").innerHTML="description must be greater than 2 or less than 15";	
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
<title>ourteam</title>
	<style type="text/css">
		.col-md-9 form table tr td input
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
			.col-md-9 form table tr td select
			{
{
				height:45px;
				border-radius:0px;	
			}

			}
	</style>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet"  type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include("header.php");
    	  include("connection.php");
    	  
	      error_reporting(0);
				if(isset($_POST['submit']))
					{
						$name=$_POST['name'];
						$cell=$_POST['cell'];
						$gender=$_POST['gender'];
						$categary=$_POST['categary'];
						$party_name=$_POST['party_name'];
						$area=$_POST['area'];
						$uc=$_POST['uc'];
						$tehsil=$_POST['tehsil'];
						$district=$_POST['district'];
						$province=$_POST['province'];
						$image_name=$_FILES['image']['name'];	
							$temp=$_FILES['image']['tmp_name'];
							$path='uploads/'.$image_name;
							move_uploaded_file($temp,$path);
							$image_name1=$_FILES['image1']['name'];	
							$temp1=$_FILES['image1']['tmp_name'];
							$path1='uploads/'.$image_name1;
							move_uploaded_file($temp1,$path1);
								
			if(!empty($name)&&!empty($cell)&&!empty($gender)&&!empty($categary)&&!empty($party_name)&&!empty($area)&&!empty($uc)&&!empty($tehsil)&&!empty($district)&&!empty($province)&&!empty($image_name)&&!empty($image_name1))
					{
	 			  $qry=mysqli_query($conn,"insert into `add_candidate`(`id`,`name`,`cell`,`gender`,`categary`,`party_name`,`area`,`uc`,`tehsil`,`district`,`province`,`candidate_image`,`party_logo`)value('','$name','$cell','$gender','$categary','$party_name','$area','$uc','$tehsil','$district','$province','$path','$path1')");
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
							<div class="col-md-9">
				<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:128px"> <b>Add Candidate</b></p>
                <hr/>
		<form method="post" enctype="multipart/form-data" onSubmit="return team()">
			<table border="0" height="450" width="70%" >
                <tr>
                <td width="20%"><h4>Name</h4></td>
                <td><input type="text" name="name" class="form-control" id="name">
 <p id="ntitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p>
               </td> </tr>
                <tr>
                <td><h4>Cell</h4></td>
                <td><input type="text" name="cell" class="form-control" id="designation">
                <p id="dtitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p>
                </td>
                </tr>
                 <tr>
                <td><h4>Gender</h4></td>
                <td colspan="2">
                	<select name="gender" type="text"  class="form-control" >
<option>Male</option>
<option>Female</option>


                	</select>
                </td>
            </tr>
                <tr>
	                <td width="20%"><h4>Categary</h4></td>
	                <td><select name="categary" class="form-control">
    	           <?php $qry=mysqli_query($conn,"select * from  `add_categary`");
			$sno= 1; 
			while($row=mysqli_fetch_array($qry)) 
  				{  ?>
<option><?php echo $row['categary_title']; ?></option>

<?php } ?>
</select>
    	            	
                    <p id="ptitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p>
                    </td>
                </tr>
                <tr>
        	        <td><h4>Party name</h4></td>
            	    	                <td><select name="party_name" class="form-control">
    	           <?php $qry=mysqli_query($conn,"select * from  `add_party`");
			$sno= 1; 
			while($row=mysqli_fetch_array($qry)) 
  				{  ?>
<option><?php echo $row['party_title']; ?></option>

<?php } ?>
</select>
                    <p id="desctitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p>
                    </td>	
                </tr>
                                <tr>
        	        <td><h4>Area</h4></td>
            	    	                <td><select name="area" class="form-control">
    	           <?php $qry=mysqli_query($conn,"select * from  `add_area`");
			$sno= 1; 
			while($row=mysqli_fetch_array($qry)) 
  				{  ?>
<option><?php echo $row['area_title']; ?></option>

<?php } ?>
</select>
                    <p id="desctitle" style="color:#F5060A;font-size:18px;text-transform:capitalize;margin-top:10px"></p>
                    </td>	
                </tr>
                <tr>
        	        <td><h4>Union council</h4></td>
            	    <td><select name="uc" class="form-control">
    	           <?php $qry=mysqli_query($conn,"select * from  `address_data` where `address_type`='uc'");
			$sno= 1; 
			while($row=mysqli_fetch_array($qry)) 
  				{  ?>
<option><?php echo $row['address_title']; ?></option>

<?php } ?>
</select></td>	
                </tr>
                  <tr>
        	        <td><h4>Tehsil</h4></td>
            	    <td><select name="tehsil" class="form-control">
    	           <?php $qry=mysqli_query($conn,"select * from  `address_data` where `address_type`='tehsil'");
			$sno= 1; 
			while($row=mysqli_fetch_array($qry)) 
  				{  ?>
<option><?php echo $row['address_title']; ?></option>

<?php } ?>
</select></td>	
                </tr>
                  <tr>
        	        <td><h4>District</h4></td>
            	    <td><select name="district" class="form-control">
    	           <?php $qry=mysqli_query($conn,"select * from  `address_data` where `address_type`='district'");
			$sno= 1; 
			while($row=mysqli_fetch_array($qry)) 
  				{  ?>
<option><?php echo $row['address_title']; ?></option>

<?php } ?>
</select></td>	
                </tr>
                   <tr>
        	        <td><h4>Province</h4></td>
            	    <td><select name="province" class="form-control">
    	           <?php $qry=mysqli_query($conn,"select * from  `address_data` where `address_type`='province'");
			$sno= 1; 
			while($row=mysqli_fetch_array($qry)) 
  				{  ?>
<option><?php echo $row['address_title']; ?></option>

<?php } ?>
</select></td>	
                </tr>
                <tr>
        	        <td><h4>Candidate Image</h4></td>
            	    <td><input type="file"  class="form-control" name="image" id=""></td>
                </tr>
                <tr>
        	        <td><h4>Party Logo</h4></td>
            	    <td><input type="file"  class="form-control" name="image1" id=""></td>
                </tr>
                 
                <tr>
                	<td></td>
                	<td><input type="submit" name="submit"  value="Save" id="" class="btn btn-success btn-lg ">
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
  			&nbsp;&nbsp;&nbsp;<span class="alert alert-danger"> <?php echo $error_message?></span>
		  <?php } ?>
						</td>
    	            </tr>
				 </table>
		      </form>
	    	</div>
      	</div>
    </div>
</div>
<br/>
		<div class="row" style="line-height:50px">	
			<div class="col-md-1"></div>
            <div class="col-md-10">
			<!-- 	<table border="1" width="100%" height="auto" align="center">
					<tr  align="center" bgcolor="#565250" style="color:white;font-weight:bold">
                        <td>S.No</td>
                        <td>Name</td>
                        <td>Cell</td>
                        <td>Gender</td>
                        <td>Categary</td>
                        <td>Party</td>
                        <td>Area</td>
                        <td>Address</td>
                        <td>Candidate image</td>
                        <td>Party Image</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
	<?php 
			$qry=mysqli_query($conn,"select * from  `add_candidate`");
			$sno= 1; 
			while($row=mysqli_fetch_array($qry)) 
  				{
	 ?>
     			   <tr align="center">
       				  <td><?php echo $sno++; ?>  </td>
        		      <td><?php echo $row['name']; ?></td>
            	      <td><?php echo $row['cell']; ?></td>
            	      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['categary']; ?></td>
                      <td><?php echo $row['party_name']; ?></td>
                      <td><?php echo $row['area']; ?></td>
                      <td><?php echo $row['uc'].",".$row['tehsil'].",".$row['district'].",".$row['province']; ?></td>
                      <td><img src="<?php echo $row['candidate_image'];    ?>" width="50" height="50" /></td>
                      <td><img src="<?php echo $row['party_logo'];    ?>" width="50" height="50" /></td>
           <td>
           <a href="update.php?otid=<?php echo $row['id']; ?>"><button class="btn btn-info glyphicon glyphicon-edit">&nbsp;Update</button></a></td>
                     <td>
                     <a href="delete.php?cid=<?php echo $row['id']; ?>"><button class="btn btn-danger glyphicon glyphicon-trash ">&nbsp;Delete</button></a></td>
                  </tr>
	<?php  } ?>
				</table> -->
		    </div>
		</div>
      		<div class="col-md-1"></div>
	<?php
		include("footer.php")
	?>
	</body>
</html>