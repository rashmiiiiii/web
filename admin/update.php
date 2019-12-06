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
		<div class="post" style="margin-right:100px">
			<h1 class="title" >Update Book</h1>
			<div class="entry" >
                
				<form action='process_updatebook.php' method='POST' enctype="multipart/form-data">
                    <br><b>Book Name:</b><br>
						<input type='text' name='name' size='40'>
						<br><br>
                    <b>Update PRICE:</b><br>
						<input type='text' name='price' size='40'>
						<br><br>
                  <input  type='submit'  value='   OK   '  >                      

                </form>
            </div>
        </div>
    </div>
    </div></body></html>