<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HW5 - PHP Loops and Functions</title>

<?php
function mathTable($func){
	
	echo "<div>\n\n";
	
	switch($func){
		case "/":
		echo "\t<h1>Division</h1>\n\n";
		break;
		
		case "*":
		echo "\t<h1>Multiplication</h1>\n\n";
		break;
		
		case "+":
		echo "\t<h1>Addition</h1>\n\n";
		break;
		
		case "-":
		echo "\t<h1>Subtraction</h1>\n\n";
		break;
	}
	
	echo "\t<table>\n";
	echo "\t\t<tr>\n\t\t\t<th>$func</th>\n";
		for($i = 0; $i <= 10; $i++){
				echo "\t\t\t<th>$i</th>\n";
		}
		
		echo "\t\t</tr>\n\n";
			
		for($j = 0; $j <=10; $j++){
				echo "\t\t<tr>\n";
				echo "\t\t\t<th>$j</th>\n";
			for($k = 0; $k <=10; $k++){
				switch($func){
					case "/":
					echo "\t\t\t<td>", round($k / $j, 2), "</td>\n";
					break;
					
					case "*":
					echo "\t\t\t<td>", $k * $j, "</td>\n";
					break;
					
					case "+":
					echo "\t\t\t<td>", $k + $j, "</td>\n";
					break;
					
					case "-":
					echo "\t\t\t<td>", $k - $j, "</td>\n";
					break;
				}
			}
			echo "\t\t</tr>\n\n";
		}
	echo "\t</table>\n\n";
	echo "\t</div>\n\n";
}
?>

<style>
	table, tr, td, th{
		border:solid 1px;
		margin-left:auto;
		margin-right:auto;
	}
	
	div{
		padding: 10px;
	}
	
	h1{
		text-align:center;
	}
</style>

</head>

<body>

	<?php
		mathTable("/");
		mathTable("*");
		mathTable("+");
		mathTable("-");
	?>

</body>
</html>
