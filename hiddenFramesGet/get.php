<?php header("Access-Control-Allow-Origin:*"); ?>
<html>
	<head>
		<style>
		</style>
		<script>
		<?php
		/*parent.displayDetails: parent is A reference to the parent of the current window or subframe.If a window does not have a parent, its parent property is a reference to itself.When a window is loaded in an <iframe>, <object>, or <frame>, its parent is the window with the element embedding the window.*/
            extract($_GET);
            //echo($srn);
			if($srn=="SRN1"){
				$ret="abc;9.8";
				echo "parent.setNameSrn('$ret')";
				
			}
			elseif($srn=="SRN2"){
				$ret="def;9.8";
				echo "parent.setNameSrn('$ret')";
				
			}
			elseif($srn=="SRN3"){
				$ret="xyz;9.8";
				echo "parent.setNameSrn('$ret')";
				
			}
		?>
		</script>
	</head>
	<body>
	</body>
<html>	