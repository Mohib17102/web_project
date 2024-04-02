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
<?php include("connection.php");?>
</head> 
<meta charset="utf-8">
<title></title>
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
			font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif;	
			}
</style>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
			</head>
<body>
<!--start of Home Page -->
<?php  
	if(isset($_GET['hoid']))
		{
			$hoid=$_GET['hoid'];

	if(isset($_POST['submit']))
		{
			$title=$_POST['title'];
			$description=$_POST['description'];
			$image_name=$_FILES['image']['name'];	
			$temp=$_FILES['image']['tmp_name'];
			$path='uploads/'.$image_name;
			move_uploaded_file($temp,$path);			
			mysql_query("update `home` set `title`='$title',`description`='$description',`image`='$path' where `id`='$hoid'");
			header("location:home.php");

			 			
						}
						?>
	<body>
    <?php include("header.php"); ?>

    <div class="row" >
		<div class="col-md-2"></div>
			<div class="col-md-10">
			<div class="row" >
				<div class="col-md-3" align="center"></div>
					<div class="col-md-9">
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:105px"> <b>Home update</b></p>
    <hr/>								
        <form method="post" enctype="multipart/form-data">
			<table border="0" height="300" width="70%" >
<?php 		
		    $qry=mysql_query("select * from  `home` where `id`='$hoid'"); 
			$row=mysql_fetch_array($qry);

?>
			<tr>
                <td width="20%"><h4>Title</h4></td>
                <td><input type="text" name="title" class="form-control" id="in" value="<?php echo $row['title']; ?>" /></td>
            </tr>
            <tr>
                    <td><h4>Image</h4></td>
                    <td><input type="file" name="image" class="form-control" id="in" description></td>				 			</tr>
            <tr>
                <td><h4>Deccription</h4></td>
              <td><input type="text" name="description" class="form-control" id="in" value="<?php echo $row['description']; ?>" /></td>
                <tr> 
            	<td></td>
                <td><input type="submit" name="submit"  value="Update" id="in" class="btn btn-success btn-lg ">
					
                </td> 
                </tr>
        </table>
           </form>
          	    </div>
    				</div>
    					</div>
    						</div>
                            <?php   } ?>
						<!--end  of Home -->
                        
 				<!--Start of jurisdiction  -->
    <?php 	if(isset($_GET['juid']))
			{
				$juid=$_GET['juid'];
		if(isset($_POST['submit']))
			{
				$main_area=$_POST['main_area'];
				$uc=$_POST['uc'];
				$tehsil=$_POST['tehsil'];
				$district=$_POST['district'];
				$description=$_POST['description'];
			mysql_query("update `jurisdiction` set `main_area`='$main_area',`uc`='$uc',`tehsil`='$tehsil',`district`='$district',`description`='$description' where `id`='$juid'");
				header("location:jurisdiction.php");
}
?>				
<?php include("header.php");?>
<div class="row">
<div class="col-md-2">

</div>
<div class="col-md-10">
<p style="color:#F89608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center"> <b>Food Menu</b></p>
<hr/>
<form method="post">
<table border="0" width="50%" height="300" style="margin-left:400px">
<?php 
			
			$qry=mysql_query("select * from  `jurisdiction` where `id`='$juid'"); 
			$row=mysql_fetch_array($qry);

		?>
<tr>
<td width="20%"><h4>Main area</h4></td>
<td><input name="main_area" type="text" id="in" class="form-control" value="<?php echo $row['main_area']; ?>"></td>
</tr>

<tr>
<td><h4>uc</h4></td>
<td><input name="uc" type="text" id="in" class="form-control" value="<?php echo $row['uc']; ?>"></td>
</tr>
<tr>
<td><h4>tehsil</h4></td>
<td><input name="tehsil" type="text" id="in" class="form-control"value="<?php echo $row['tehsil']; ?>"></td>
</tr>
<tr>
<td><h4>district</h4></td>
<td><input name="district" type="text" id="in" class="form-control"value="<?php echo $row['district']; ?>"></td>
</tr>
<tr>
<td><h4>description</h4></td>
<td><input name="description" type="text" id="in" class="form-control"value="<?php echo $row['description']; ?>"></td>
</tr>
<tr>
<td></td>
<td> <input type="submit" name="submit" value="Update" class=" btn btn-success btn-lg" id="in"></td>
</tr>
</table>
</form>
<?php   } ?>    
    				<!--end of jurisdiction  -->
    				<!--Start of quota  -->
    <?php 	if(isset($_GET['taid']))
			{
				$taid=$_GET['taid'];
		if(isset($_POST['submit']))
			{
				$title=$_POST['title'];
				$department=$_POST['department'];
				$quota=$_POST['quota'];
				$description=$_POST['description'];
				$av_programs=$_POST['av_programs'];
			mysql_query("update `quota` set `title`='$title',`department`='$department',`type`='$quota',`description`='$description',`av_programs`='$av_programs' where `id`='$taid'");
				header("location:quota_rules.php");
}
?>				
<?php include("header.php");?>
<div class="row">
<div class="col-md-2">

</div>
<div class="col-md-10">
<p style="color:#F89608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center"> <b>Food Menu</b></p>
<hr/>
<form method="post">
<table border="0" width="50%" height="300" style="margin-left:400px">
<?php 
			
			$qry=mysql_query("select * from  `quota` where `id`='$taid'"); 
			$row=mysql_fetch_array($qry);

		?>
<tr>
<td width="20%"><h4>Title</h4></td>
<td><input name="title" type="text" id="in" class="form-control" value="<?php echo $row['title']; ?>"></td>
</tr>

<tr>
<td><h4>Department</h4></td>
<td><input name="department" type="text" id="in" class="form-control" value="<?php echo $row['department']; ?>"></td>
</tr>

<tr>
<td><h4>Quota type</h4></td>
<td><input name="quota" type="text" id="in" class="form-control"value="<?php echo $row['type']; ?>"></td>
</tr>
<tr>
<td><h4>Description</h4></td>
<td><input name="description" type="text" id="in" class="form-control"value="<?php echo $row['description']; ?>"></td>
</tr>
<tr>
<td><h4>Available Programs</h4></td>
<td><input name="av_programs" type="text" id="in" class="form-control"value="<?php echo $row['av_programs']; ?>"></td>
</tr>
<tr>
<td></td>
<td> <input type="submit" name="submit" value="Update" class=" btn btn-success btn-lg" id="in"></td>
</tr>
</table>
</form>
<?php   } ?>    
    				<!--end of quota  -->
                    <!--Start of admission cycle page  -->
<?php 
	if(isset($_GET['otid']))
		{
			$otid=$_GET['otid'];
    if(isset($_POST['submit']))  
		{
			$name=$_POST['name'];
			$step1=$_POST['step1'];
			$step2=$_POST['step2'];
			$step3=$_POST['step3'];
			$step4=$_POST['step4'];
			$cell=$_POST['cell'];
			$description=$_POST['description'];
			$image_name=$_FILES['image']['name'];	
			$temp=$_FILES['image']['tmp_name'];
			$path='uploads/'.$image_name;
			move_uploaded_file($temp,$path);
		mysql_query("update `admission_cycle` set `name`='$name',`step1`='$step1',`step2`='$step2',`step3`='$step3',`step4`='$step4',`cell`='$cell',`description`='$description',`path`='$path' where `id`='$otid'");
 			header("location:admission_cycle.php");
		}
?> 
<?php include("header.php") ?>
<div class="row" >
	<div class="col-md-2"></div>
		<div class="col-md-10">
			<div class="row" >
				<div class="col-md-3"></div>
					<div class="col-md-9">
	<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:115px"> <b>Our Team update</b></p>
    <hr/>
<form method="post" enctype="multipart/form-data">
	<table border="0" height="400" width="70%" >

<?php 
 			
			$qry=mysql_query("select * from `admission_cycle` where `id`='$otid'");
			$row=mysql_fetch_array($qry);
?>
         <tr>
	         <td width="20%"><h4>Name</h4></td>
             <td><input type="text" name="name" class="form-control" id="in" value="<?php echo $row['name']; ?>"></td>
         </tr>
         <tr>
             <td><h4>step1</h4></td>
             <td><input type="text" name="step1" class="form-control" id="in"value="<?php echo $row['step1']; ?>"></td>
         </tr>
         <tr>
	         <td width="20%"><h4>step2</h4></td>
    	     <td><input type="text" name="step2" class="form-control" id="in"value="<?php echo $row['step2']; ?>"></td>
          </tr>
          <tr>
         	 <td><h4>step3</h4></td>
             <td><input type="text" name="step3" class="form-control" id="in" value="<?php echo $row['step3']; ?>"></td>	
         </tr>
         <tr>
         	 <td><h4>step4</h4></td>
             <td><input type="text" name="step4" class="form-control" id="in" value="<?php echo $row['step4']; ?>"></td>	
         </tr>
            <tr>
         	 <td><h4>cell</h4></td>
             <td><input type="text" name="cell" class="form-control" id="in" value="<?php echo $row['cell']; ?>"></td>	
         </tr>
            <tr>
         	 <td><h4>description</h4></td>
             <td><input type="text" name="description" class="form-control" id="in" value="<?php echo $row['description']; ?>"></td>	
         </tr>
         <tr>
             <td><h4>Image</h4></td>
		 	 <td><input type="file"  class="form-control" name="image" id="in"></td>
         </tr>
         <tr>
             <td></td>
             <td><input type="submit" name="submit"  value="Update" id="in" class="btn btn-success btn-lg ">
			</td>

         </tr>
	 </table>
 </form>
 		   	</div>
      	</div>
    </div>
</div>
<?php } ?>
<!--end of admission cycle-->
<!--Start of programm offered -->
<?php 
	if(isset($_GET['qaid']))
		{
			$qaid=$_GET['qaid'];
    if(isset($_POST['submit']))  
		{
			$title=$_POST['title'];
			$description=$_POST['description'];
			$duration=$_POST['duration'];
			$semesters=$_POST['semesters'];
			$eligibility=$_POST['eligibility'];
			$level=$_POST['level'];
			$quota=$_POST['quota'];
		mysql_query("update `programs` set `title`='$title',`description`='$description',`duration`='$duration',`semesters`='$semesters',`eligibility`='$eligibility',`level`='$level',`quota`='$quota' where `id`='$qaid'");
 			header("location:programm_offered.php");
		}
?> 
<?php include("header.php") ?>
<div class="row" >
	<div class="col-md-2"></div>
		<div class="col-md-10">
			<div class="row" >
				<div class="col-md-3"></div>
					<div class="col-md-9">
	<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:115px"> <b>Our Team update</b></p>
    <hr/>
<form method="post" enctype="multipart/form-data">
	<table border="0" height="400" width="70%" >

<?php 
 			
			$qry=mysql_query("select * from `programs` where `id`='$qaid'");
			$row=mysql_fetch_array($qry);
?>
         <tr>
	         <td width="20%"><h4>title</h4></td>
             <td><input type="text" name="title" class="form-control" id="in" value="<?php echo $row['title']; ?>"></td>
         </tr>
         <tr>
             <td><h4>description</h4></td>
             <td><input type="text" name="description" class="form-control" id="in"value="<?php echo $row['description']; ?>"></td>
         </tr>
         <tr>
	         <td width="20%"><h4>duration</h4></td>
    	     <td><input type="text" name="duration" class="form-control" id="in"value="<?php echo $row['duration']; ?>"></td>
          </tr>
          <tr>
         	 <td><h4>semesters</h4></td>
             <td><input type="text" name="semesters" class="form-control" id="in" value="<?php echo $row['semesters']; ?>"></td>	
         </tr>
         <tr>
         	 <td><h4>eligibility</h4></td>
             <td><input type="text" name="eligibility" class="form-control" id="in" value="<?php echo $row['eligibility']; ?>"></td>	
         </tr>
            <tr>
         	 <td><h4>level</h4></td>
             <td><input type="text" name="level" class="form-control" id="in" value="<?php echo $row['level']; ?>"></td>	
         </tr>
            <tr>
         	 <td><h4>quota</h4></td>
             <td><input type="text" name="quota" class="form-control" id="in" value="<?php echo $row['quota']; ?>"></td>	
         </tr>
        
         <tr>
             <td></td>
             <td><input type="submit" name="submit"  value="Update" id="in" class="btn btn-success btn-lg ">
			</td>

         </tr>
	 </table>
 </form>
 		   	</div>
      	</div>
    </div>
</div>
<?php } ?>
<!--end of programm offered-->
<!--start of faculty-->

<?php 
	if(isset($_GET['feid']))
		{
			$feid=$_GET['feid'];
    if(isset($_POST['submit']))  
		{
			$name=$_POST['name'];
			$designation=$_POST['designation'];
			$qualification=$_POST['qualification'];
			$description=$_POST['description'];
			$email=$_POST['email'];
			$department=$_POST['department'];
			$description=$_POST['description'];
			$image_name=$_FILES['image']['name'];	
			$temp=$_FILES['image']['tmp_name'];
			$path='uploads/'.$image_name;
			move_uploaded_file($temp,$path);
		mysql_query("update `faculty` set `fname`='$name',`designation`='$designation',`qualification`='$qualification',`description`='$description',`email`='$email',`department`='$department',`description`='$description',`path`='$path' where `id`='$feid'");
 			header("location:faculty.php");
		}
?> 
<?php include("header.php") ?>
<div class="row" >
	<div class="col-md-2"></div>
		<div class="col-md-10">
			<div class="row" >
				<div class="col-md-3"></div>
					<div class="col-md-9">
	<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:115px"> <b>Our Team update</b></p>
    <hr/>
<form method="post" enctype="multipart/form-data">
	<table border="0" height="400" width="70%" >

<?php 
 			
			$qry=mysql_query("select * from `faculty` where `id`='$feid'");
			$row=mysql_fetch_array($qry);
?>
         <tr>
	         <td width="20%"><h4>Name</h4></td>
             <td><input type="text" name="name" class="form-control" id="in" value="<?php echo $row['fname']; ?>"></td>
         </tr>
         <tr>
             <td><h4>designation</h4></td>
             <td><input type="text" name="designation" class="form-control" id="in"value="<?php echo $row['designation']; ?>"></td>
         </tr>
         <tr>
	         <td width="20%"><h4>qualification</h4></td>
    	     <td><input type="text" name="qualification" class="form-control" id="in"value="<?php echo $row['qualification']; ?>"></td>
          </tr>
          <tr>
         	 <td><h4>description</h4></td>
             <td><input type="text" name="description" class="form-control" id="in" value="<?php echo $row['description']; ?>"></td>	
         </tr>
         <tr>
         	 <td><h4>email</h4></td>
             <td><input type="text" name="email" class="form-control" id="in" value="<?php echo $row['email']; ?>"></td>	
         </tr>
            <tr>
         	 <td><h4>department</h4></td>
             <td><input type="text" name="department" class="form-control" id="in" value="<?php echo $row['department']; ?>"></td>	
         </tr>
       
         <tr>
             <td><h4>Image</h4></td>
		 	 <td><input type="file"  class="form-control" name="image" id="in"></td>
         </tr>
         <tr>
             <td></td>
             <td><input type="submit" name="submit"  value="Update" id="in" class="btn btn-success btn-lg ">
			</td>

         </tr>
	 </table>
 </form>
 		   	</div>
      	</div>
    </div>
</div>
<?php } ?>

<!--end of faculty-->


						<!--start of Gallery -->
                    
<?php 
	if(isset($_GET['guid']))
	{
	$guid=$_GET['guid'];	
		
     if(isset($_POST['submit']))
	   	{
			$type=$_POST['type'];
       		$image_name=$_FILES['image']['name'];
        	$temp=$_FILES['image']['tmp_name'];
        	$path='uploads/'.$image_name;
        	move_uploaded_file($temp,$path);	
 			mysql_query("update `gallery` set `type`='$type',`image`='$path' where `id`='$guid'");
 			header("location:gallery.php");
		}

?>
	<?php include("header.php"); ?>
<hr/>
	<div class="row" >
		<div class="col-md-2"></div>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-3" align="center"><img src="../images/download (1).png" width="80%" height="200px" class="img-thumbnail"><br>
<b>We Provide Perfect Setting For All Sort Of Functions.</b>
Ranging from complete Wedding Reception, Ceremonies, Corporate Functions, Conferences, Fund Raising Program, Theme Parties to Anniversaries. With five conveniently located halls ranging in size to accommodate from 80 to 1000 people. As we have the ability to partition off our halls to accommodate large gathering from 400-1000 guest, you will find the perfect package you are looking for.
					</div>
<div class="col-md-9">
	<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:110px" > Gallery Update</p>
    <hr/>
<form method="post" enctype="multipart/form-data">
    <table border="0" height="230" width="80%">
	<?php
	 		
			$qry=mysql_query("select * from `gallery` where `id`='$guid'");
			$row=mysql_fetch_array($qry);
?>
         <tr>
            <td><h4>Type</h4></td>
            <td>  <select class="form-control" name="type" id="in"  >
                   		  <option selected><?php echo $row['type']; ?></option>
                          <option>widding</option>
                          <option>birth day</option>
                          <option>engagement</option>
                          <option>Dineer</option>
                          <option>Lanuch</option>
                  </select>
            </td>
         </tr>      
         <tr>
             <td><h4>Image</h4></td>
             <td><input type="file" name="image" class="form-control" id="in" ></td>								         </tr>
         <tr>
             <td></td>
             <td><input type="submit" name="submit" id="in" value="Update" class="btn-success btn-lg" >
             </td>
         </tr>
    </table>
</form>
           </div>
        </div>
    </div>
</div>
<?php } ?>
	                    <!--end of Gallery-->       


						<!--start of downloads -->
<?php 
	if(isset($_GET['ddid']))
		{
			$ddid=$_GET['ddid'];
			
	if(isset($_POST['submit']))
		{
			$title=$_POST['title'];
			$type=$_POST['type'];
			$date=$_POST['date'];
			$description=$_POST['description'];
			$image_name=$_FILES['image']['name'];	
			$temp=$_FILES['image']['tmp_name'];
			$path='uploads/'.$image_name;
			move_uploaded_file($temp,$path);
			
     		mysql_query("update `downloads` set `title`='$title',`type`='$type',`date`='$date',`description`='$description',`path`='$path' where `id`='$ddid'");
		 	header("location:downloads.php");
		}
?>
<?php include("header.php"); ?>
<div class="row" >
	<div class="col-md-2"> </div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3"></div>
<div class="col-md-9">
	<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:150px"> <b>Events update</b></p>
    <hr/>
<form method="post" enctype="multipart/form-data">
	<table width="80%" height="430">
		<tr>
        <?php
  $qry=mysql_query("select * from `downloads` where `id`='$ddid'");
			$row=mysql_fetch_array($qry); 
			?>
			         <td width="25%"><h4>title</h4></td>
            <td><input type="text" name="title" id="in" value="<?php echo $row['title'];    ?>" class="form-control"></td>
		</tr>
		<tr>
            <td><h4>type</h4></td>
            <td><input type="text" name="type" id="in" value="<?php echo $row['type'];?>" class="form-control"></td>
        </tr>
		<tr>
            <td><h4>Date</h4></td>
            <td><input type="text" name="date" id="in" value="<?php echo $row['date'];    ?>" class="form-control"></td>
       </tr>
       	<tr>
            <td><h4>description</h4></td>
            <td><input type="text" name="description" id="in" value="<?php echo $row['description'];    ?>" class="form-control"></td>
       </tr>
       	<tr>
            <td><h4>image</h4></td>
            <td><input type="file" name="image" id="in" value="<?php echo $row['path'];    ?>" class="form-control"></td>
       </tr>
      
    
      <tr>
           <td></td>
           <td><input type="submit" name="submit"  value="update" id="in" class="btn-success btn-lg">
           </td>
     </tr>
	<table>
</form>
			</div>
		</div>
	</div>
</div>
<?php } ?>
          		          <!--end of downloads-->       

	                    <!--Strat  of departments-->
<?php
	if(isset($_GET['seid']))
		{
			$seid=$_GET['seid'];
	if(isset($_POST['submit']))
		{
	        $title=$_POST['title'];
			$description=$_POST['description'];
			$chairman_name=$_POST['chairman_name'];
		
			mysql_query("update `departments` set `title`='$title',`description`='$description',`chairman_name`='$chairman_name' where `id`='$seid'");
			header("location:departments.php");
} ?>
<?php include("header.php"); ?>
<div class="row" >
	<div class="col-md-2"> </div>
		<div class="col-md-10">
        	<div class="row">
       			 <div class="col-md-3"></div>
    				 <div class="col-md-9">
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:130px"> <b>Services Update</b></p>
<hr/>
<form method="post" enctype="multipart/form-data">
	<table border="0" width="90%" height="300">
<?php 
			$qry=mysql_query("select * from  `departments` where `id`='$seid'"); 
			$row=mysql_fetch_array($qry);
?>
        <tr>
           <td width="20%"><h4>department name</h4></td>
           <td><input type="text" name="title" value="<?php echo $row['title']; ?>" id="in" class="form-control"></td>
       	</tr>
        <tr>
            <td><h4>description</h4></td>
            <td><input type="text" name="description" value="<?php echo $row['description']; ?>" id="in"class="form-control"></td>
        </tr>
        <tr>
          	<td><h4>chairman name</h4></td>
            <td><input type="text" name="chairman_name" value="<?php echo $row['chairman_name']; ?>" id="in" class="form-control"></td>
        </tr>
      
        <tr>
        	 <td></td>
             <td><input type="submit" name="submit" id="in" value="Update" class="btn-success btn-lg"></td>
		</tr>
	</table>
</form>
			</div>
        </div>
    </div>
</div>
	<?php } ?>                
                     <!--end of departments-->
                       <!--Strat  of notification-->
<?php
	if(isset($_GET['neid']))
		{
			$neid=$_GET['neid'];
	if(isset($_POST['submit']))
		{
	        $title=$_POST['title'];
			$description=$_POST['description'];
			$date=$_POST['date'];
			$image_name=$_FILES['image']['name'];	
			$temp=$_FILES['image']['tmp_name'];
			$path='uploads/'.$image_name;
			move_uploaded_file($temp,$path);
			mysql_query("update `notification` set `title`='$title',`description`='$description',`date`='$date',`path`='$path' where `id`='$neid'");
			header("location:notification.php");
} ?>
<?php include("header.php"); ?>
<div class="row" >
	<div class="col-md-2"> </div>
		<div class="col-md-10">
        	<div class="row">
       			 <div class="col-md-3"></div>
    				 <div class="col-md-9">
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:130px"> <b>Services Update</b></p>
<hr/>
<form method="post" enctype="multipart/form-data">
	<table border="0" width="90%" height="300">
<?php 
			$qry=mysql_query("select * from  `notification` where `id`='$neid'"); 
			$row=mysql_fetch_array($qry);
?>
        <tr>
           <td width="20%"><h4>title</h4></td>
           <td><input type="text" name="title" value="<?php echo $row['title']; ?>" id="in" class="form-control"></td>
       	</tr>
        <tr>
            <td><h4>description</h4></td>
            <td><input type="text" name="description" value="<?php echo $row['description']; ?>" id="in"class="form-control"></td>
        </tr>
        <tr>
          	<td><h4>date</h4></td>
            <td><input type="text" name="date" value="<?php echo $row['date']; ?>" id="in" class="form-control"></td>
        </tr>
        <tr>
             <td><h4>Image</h4></td>
		 	 <td><input type="file"  class="form-control" name="image" id="in"></td>
         </tr>
      
        <tr>
        	 <td></td>
             <td><input type="submit" name="submit" id="in" value="Update" class="btn-success btn-lg"></td>
		</tr>
	</table>
</form>
			</div>
        </div>
    </div>
</div>
	<?php } ?>                
                     <!--end of notification-->
                     
                   <!--start  of cantact Us-->      
<?php
	if(isset($_GET['caid']))
		{
			$caid=$_GET['caid'];		
	if(isset($_POST['submit']))
		{
			$title=$_POST['title'];
			$address=$_POST['address'];
			$cell_no=$_POST['cell_no'];
			$email=$_POST['email'];
			$phone_no=$_POST['phone_no'];
			$link=$_POST['link'];
			
			mysql_query("update `contact_us` set `title`='$title',`address`='$address',`cell_no`='$cell_no',`email`='$email',`phone_no`='$phone_no',`link`='$link' where `id`='$caid'");
			header("location:contact_us.php");
} ?>
<?php include("header.php"); ?>
<div class="row" >
	<div class="col-md-2"></div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3"> </div>
					<div class="col-md-9">
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:125px"> <b>Cantact Us Update</b></p>
<hr/>
<form method="post" enctype="multipart/form-data">
	<table border="0" width="90%" height="470">
    <?php 			$qry=mysql_query("select * from  `contact_us` where `id`='$caid'"); 
			$row=mysql_fetch_array($qry);

?>
         <tr>
             <td width="20%"><h4>Title</h4></td>
	         <td><input type="text" name="title" value="<?php echo $row['title']; ?>"class="form-control" id="in"></td>
          </tr>
      	  <tr>
	          <td><h4>Address</h4></td>
    	      <td><input type="text" name="address"  value="<?php echo $row['address']; ?>" class="form-control" id="in"></td>
           </tr>
           <tr>
        	  <td><h4>Cell No</h4></td>
              <td><input type="text" name="cell_no" value="<?php echo $row['cell_no']; ?>" class="form-control" id="in"></td>
           </tr>
           <tr>
           	   <td><h4>Email</h4></td>
               <td><input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="in"></td>
           </tr>
          	<tr>
            	<td><h4>Phone</h4></td>
            	<td><input type="text" name="phone_no"  value="<?php echo $row['phone_no']; ?>" class="form-control" id="in"></td>
            </tr>
            <tr>
            	<td><h4>link</h4></td>
            	<td><input type="text" name="link" value="<?php echo $row['link']; ?>" class="form-control" id="in"></td>
            </tr>
          
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update" class="btn-success btn-lg" id="in"></td>
            </tr>
	</table>
</form>
			</div>
		</div>
	</div>
</div>
<?php } ?>
                            <!--End of cantact Us -->
	
    					<!--start of Signup -->
<?php
	if(isset($_GET['siid']))
		{
			$siid=$_GET['siid'];
			
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
			$qry=mysql_query("update `signup` set `name`='$name',`last_name`='$last_name',`email`='$email',`cell_no`='$cell_no',`select`='$select',`date`='$date',`username`='$username',`password`='$password' where `id`='$siid'");
			header("location:signup.php");
		}
?>
<?php include("header.php"); ?>
<div class="row" >
	<div class="col-md-2"></div>
    	<div class="col-md-10">
			<div class="row" >
				<div class="col-md-3"></div>
					<div class="col-md-9">
<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;margin-left:130px"> <b>Sign Up Here update</b></p>
<hr/>
<form method="post" enctype="multipart/form-data">
	<table border="0px" height="370" width="95%" cellspacing="20" > 
        <?php $qry=mysql_query("select * from `signup` where `id`='$siid'"); 
			$row=mysql_fetch_array($qry);
			?>
        <tr>
	        <td><h4>Name</h4></td>
            <td><input name="name" type="text"  class="form-control"  id="in" value="<?php echo $row['name']; ?>"></td>
            <td> <input name="last_name" type="text" placeholder="last Name" id="in" class="form-control" value="<?php echo $row['last_name']; ?>"></td>
        </tr>
        <tr>
            <td><h4>Email</h4></td>
            <td colspan="2"><input name="email" type="text" id="in" value="<?php echo $row['email']; ?>" class="form-control" ></td>
        </tr>
        <tr>
            <td><h4>Cell No</h4></td>
            <td colspan="2"><input name="cell_no" type="text" id="in" value="<?php echo $row['cell_no']; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td><h4>Gender</h4></td>
             <td>  <select class="form-control" id="in" name="select" > 
                   <option <?php echo $row['select']; ?>>Gender </option>
                   <option>Male</option>
                   <option>Female</option>
                   </select>
            </td>
            <td> <input name="date" type="date"  id="in" value="<?php echo $row['date']; ?>" placeholder="Date Of Birth" class="form-control">
       		</td>
        </tr>
        <tr>
             <td><h4>User Name</h4></td>
             <td colspan="2"><input name="username" type="text" id="in" value="<?php echo $row['username']; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td><h4>PassWord</h4></td>
            <td colspan="2"><input name="password" type="password" id="in" value="<?php echo $row['password']; ?>" class="form-control"></td>
        </tr>
        <tr>
            <td></td>            
            <td><input type="submit" name="submit" id="in"  value="Update" class="btn btn-success btn-lg ">
			</td> 
		</tr>
	</table>
</form>
			</div>
		</div>
	</div>
</div>
<?php } ?>
                                <!--end of signup-->
                                <!--Start  of merit list-->
                                
    <?php  
	if(isset($_GET['maid']))
		{
			$maid=$_GET['maid'];
			
if(isset($_POST['submit']))
{
			$std_name=$_POST['std_name'];
			$app_no=$_POST['app_no'];
			$prg_name=$_POST['prg_name'];
			$tmarks=$_POST['tmarks'];
			$eligibility=$_POST['eligibility'];
			$image_name=$_FILES['image']['name'];	
							$temp=$_FILES['image']['tmp_name'];
							$path='uploads/'.$image_name;
							move_uploaded_file($temp,$path);
			$qry=mysql_query("update `merit_list` set `std_name`='$std_name',`app_no`='$app_no',`prg_name`='$prg_name',`tmarks`='$tmarks',`eligibility`='$eligibility' where `id`='$maid'");
			header("location:merit_list.php");
}
?>
<?php include("header.php");?>
<div class="row">
<p style="color:#367608;; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;text-align:center"> <b>About Us Update</b></p>

<hr/>

<div class="col-md-2">
    </div>
<div class="col-md-10">
<table width="40%" height="200px" border="0" align="center" style="margin-top:40px">
<form method="post" enctype="multipat/form-data">
<?php $qry=mysql_query("select * from  `merit_list` where `id`='$maid'"); 
			$row=mysql_fetch_array($qry);

?>
<tr><td>
<p><input name="std_name" type="text" class="form-control" value="<?php echo $row['std_name']; ?> "></p>
<p><input name="app_no" type="text" class="form-control" value="<?php echo $row['app_no']; ?> "></p>
<p><input name="prg_name" type="text" class="form-control" value="<?php echo $row['prg_name']; ?> "></p>
<p><input name="tmarks" type="text" class="form-control" value="<?php echo $row['tmarks']; ?> "></p>
<p> <input name="eligibility" type="text" class="form-control" value="<?php echo $row['eligibility']; ?>"></p>

<input type="submit" name="submit" value="Update" class="btn btn-success" />
</td></tr>
</form>

</table>
<?php } ?>
</div>
</div>
                            
					<!--end of merit list-->                                
</body>
</html>