<!DOCTYPE html>
<?php include("includes/head.php");?>
	
	<body>
	
		<div class="main-body-text hvr-underline-from-center" id="top">
			<h2 class="body-header hvr-bounce-in .font-effect-3d-float">2015 Sponsors</h2>
				<div id="about-us-content" align="center">
						<?php 
						
						include ("markdown.php"); 
						$Parsedown = new Parsedown();
						
						$f = fopen("Markdown/Sponsors.txt", "r");
						
						$markdown = fread($f, 9999999);
						
						//$tableHtml = strtok($markdown,'+++');			
						$markdown = strtok($markdown,'+++');
						
						$html = $Parsedown->text($markdown);
						
						
						
						
						echo $html;
						?>
				</div>
		</div>
	</body>
</div>
<?php include("includes/footer.php"); ?>
</html>