<?php
ob_start();
session_start();
if(!isset($_SESSION['username']))
	header("Location: ../index.php?errmsg=YOU ARE UNAUTHORISED");



?>





<html>
	
	
	<head>
		
		<link rel="stylesheet" type="text/css" href="../style.css"/>
		<link rel="stylesheet" type="text/css" href="../form.css"/>
		<script type="text/javascript" src="../jquery.js" language="javascript" charset="utf-8">
		</script>
		<script type="text/javascript" src="main.js" language="javascript" charset="utf-8">
		
			
		
			
	
		</script>
	
	
	</head>
	
	
	
	
	<body>
	
		<?php
			
			include("header.php");
			
		
		?>
		
		
		<div id="ct"></div>
			
			<div id="content">
				
				<div id="side_panel">
					<?php
				
						include("side_insert.php");
				
				
					?>
				
				</div>
				
				<div id="main_panel">
					<form action="insert/subject.php" method="post" class="cssform" id="regSubject">
					
						<fieldset>
							<legend>Subject Details</legend>
							
								<?php
				
									if(isset($_GET['submitted']))
									{
									echo "<b style='color:red;margin-left:100px;font-size:20px;'>Subject Detail saved successfully</b>";
									
				
									}
									if(isset($_GET['errmsg'])){
									
									
									echo "<p ><span class='errmsg'>".$_GET['errmsg']."</span></p>";
									
									}
				
				
									?>
		
	
	
							<p><label for="">Subject Name:
								<span class="mand">*<span></label>
								<input type="text" id="subjectName" value="" name="name" />
								<span  class="Error">REQUIRED</span>
							</p>
							
							<p><label for="">Subject Type
								<span class="mand">*<span></label>
								<select id="subjectType" name="type" >
								<option>Lecture</option>
								<option>Practical</option>
								
								</select>
								<span  class="Error">REQUIRED</span>
							</p>
							
							
							<p><label for="">Subject Weekly Load
								<span class="mand">*<span></label>
								<input type='text' id="subjectLoad" name="subload" />
								
								<span  class="Error">REQUIRED</span>
							</p>
							
							
							
							
							
							
							
							<p><input type="submit" value="SUBMIT" /> <input type="reset" value="RESET" /></p>
						</fieldset>
					</form>
				
				
				</div>
				
				
				

			</div>
						
			
		</div>
		
		<div id="cb"></div>
	
		<?php
	
		include("footer.php");
	
		?>
	
	
	
	</body>








</html>
