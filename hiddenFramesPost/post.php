<html>
	<head>
		<style>
		
		</style>
		<script>
		<?php
		     extract($_POST);
		     echo "parent.global_name_array.push(\"$nameT\");";
			 echo "parent.updateHere();";
			 echo "parent.check = \"$nameT\";";
		?>	
		</script>
	</head>
	<body>
		  <p> I am a hidden frame that can be seen</p>
		  <?php
		  		     echo "$name";
		  ?>
	</body>
</html>