<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HW4 - PHP Parms Exercise</title>

<?php
echo "<style> body{";
echo "background-color:", $_GET["bgcolor"], ";";
echo "color:", $_GET["fgcolor"], ";}";
echo "</style>";
?>

</head>

<body>

	<?php
		echo '<header style="text-align:center;"><h1>', $_GET["name"], '</h1></header>';
		echo '<div>';
			for($i=0; $i<$_GET["num"]; $i++){
				echo $_GET["name"], " ";
			}
		echo '</div>';
	?>

</body>
</html>
