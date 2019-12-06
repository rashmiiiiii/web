<?php session_start();?>
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
			<div class="entry">
				<form action='process_addcategory.php' method='POST'>
						<b>ADD CATEGORY </b>
							<br><br>
							<input type='text' name= 'cat' size='25'>
							
							<input type='submit'  value='  ADD  '>
							
							<br><br>
				</form>
				<hr>
				<form action='process_addsubcategory.php' method='POST'>
							<b>ADD SUB-CATEGORY </b>
							<br><br>
							<u>PARENT CATEGORY :</u>
									<br><br>
										<select  name="parent">
											<?php
											
												$link=mysqli_connect("localhost","root","")or die("Can't Connect...");
					
													mysqli_select_db("shop",$link) or die("Can't Connect to Database...");
					
													$query="select * from category ";
					
													$res=mysqli_query($query,$link);
													
													while($row=mysqli_fetch_assoc($res))
													{
														echo "<option value='".$row['cat_id']."'>".$row['cat_nm'];
														//PASS ID NOT NAME
													}
					
													mysqli_close($link);
											?>
										</select>
									
									<br><br>
							<u>SUB-CATEGORY:</u>
									<br><br>
										<input type='text' name= 'subcat' size='25'>
										
										<input type='submit'  value='  ADD  '>
									
									<br><br>	
				</form>
				<hr>
				<form action='process_delcategory.php' method='POST'>
							
						<b>DELETE CATEGORY </b>						
							<br><br>
								<select name="del">
									<?php
									
										$link=mysqli_connect("localhost","root","")or die("Can't Connect...");
			
											mysqli_select_db("shop",$link) or die("Can't Connect to Database...");
			
											$query="select * from category ";
			
											$res=mysqli_query($query,$link);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
											}
			
											mysqli_close($link);
									?>
								</select>
						
							
							<input type='submit' value='  DELETE  '>
				</form>

				<form action='process_delsubcategory.php' method='POST'>
							<hr>
						<b>DELETE SUB CATEGORY </b>						
							<br><br>
								<select  name="subcatnm">
									<?php
									
										$link=mysqli_connect("localhost","root","")or die("Can't Connect...");
			
											mysqli_select_db("shop",$link) or die("Can't Connect to Database...");
			
											$query="select * from category ";
			
											$res=mysqli_query($query,$link);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
												$qq = "select * from subcat where parent_id=".$row['cat_id'];
												
												$ress = mysqli_query($qq,$link) or die("wrong delete subcat query..");
												while($roww = mysqli_fetch_assoc($ress))
												{
													echo "<option value='".$roww['subcat_id']."'> ---> ".$roww['subcat_nm'];
												}
												
											}
			
											mysqli_close($link);
									?>
								</select>
						
							
							<input type='submit' value=' DELETE '>
				</form>	
			</div>
			
		</div>
		
	</div>
	
	<div style="clear: both;">&nbsp;</div>
</div>

<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>

</body>
</html>
