<?php session_start();
require('includes/config.php');
?>
<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>

<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>

<div id="page">
	
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title"></h1>
			<div class="entry" style="min-height:400px">
				<form action='process_addcategory.php' method='POST'>
						<b style="color:darkgreen">ADD CATEGORY </b>
							<br/>
							<input type='text' name= 'cat' size='25'>
							
							<input type='submit'  value='  ADD  '>
							
							<br><br>
				</form>
				<hr>
				<form action='process_delcategory.php' method='POST'>
							
							
							
									
							
							
						<b style="color:darkgreen">DELETE CATEGORY </b>						
							<br>
								<select name="del">
									<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
											}
			
											
									?>
								</select>
						
							
							<input type='submit' value='DELETE'>
				</form>

				<form action='process_delsubcategory.php' method='POST'>
							<hr>
						
                </form>
			
		</div>
		
	</div>
	
	<div style="clear: both;">&nbsp;</div>
</div>



</div>

</body>
</html>
