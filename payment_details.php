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
				
				
			
    </body>	<marquee><font style="font-size:30px;align:center;">Payment options</font></marquee>
<div class="container">			
    <hr style="margin-left:260px;margin-right:260px;"> 
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="ship.html">Secure Online Payment</a></div> <br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="cash_on_delivery.html">Cash On Delivery</a></div> <br>
    </div>
    
</html>