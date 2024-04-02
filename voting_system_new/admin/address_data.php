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
	<style type="text/css">
		.btn-success
		{

			margin-left: -3.5px;
		}

	</style>
<meta charset="utf-8">
<title>Home</title>
	
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
			</head>
	
	<body>
		
    <?php 
				include("header.php");
			?>
		<div class="row" >
			<div class="col-md-2">
			<?php 
				include("menu.php");
			?>
				</div>
				<br/>
				<br />
					<div class="col-md-10">
						<p style="color:#367608; font-weight:bold; font-size:24px; font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; margin-left:125px"> <b> Add Data</b>

						</p>
                        <hr/>
<center>
         <a href="add_province.php"><button class="btn btn-success btn-lg" style="border-radius:50px 0px 0px 50px;margin-left: 0px">Add Province</button></a>
         <a href="add_district.php"><button class="btn btn-success btn-lg" style="border-radius:0px">Add District</button></a>
         <a href="add_tehsil.php"><button class="btn btn-success btn-lg" style="border-radius:0px">Add Tehsil</button></a>
         <a href="add_uc.php"><button class="btn btn-success btn-lg" style="border-radius:0px 50px 50px 0px">Add Union Council</button></a>
         </center>
 </div>                 
    </div>
    </div>
    	<?php
        include("footer.php")
        ?>
            </body>
            </html>