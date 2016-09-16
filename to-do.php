<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>HW7--To Do List</title>
</head>
<body style="text-align:center; color:#006600;">

<?php
// Try to connect with the MySQL Server
$con = mysql_connect('ajax.cs.mercer.edu',"mcdonald_r",'PHP351');

if (!$con)
  {
  die('Could not connect to mySQL: ' . mysql_error());
  }

// Try to open your DataBase
if (!mysql_select_db("mcdonald_r", $con))
  {
   die ('Could not open DB: ' . mysql_error());
  }
  
// Add record to todolist in database
if (isset($_REQUEST['todo']))
	{
	$sql="INSERT INTO todolist (todo)
	VALUES
	('$_POST[todo]')";

	if (!mysql_query($sql,$con))
	  {
	  die('Error adding Todo: ' . mysql_error());
	  }
	}

// Empty the todolist table in database
if (isset($_REQUEST['emptytodo']))
	{
	$sql="TRUNCATE TABLE todolist";
	
	if (!mysql_query($sql,$con))
		{
		die('Error emptying Todo: ' . mysql_error());
		}
	}
?>

<h1>Rachel Anne's To Do List</h1>

<div style="width:80%; margin-left:auto; margin-right:auto; font-size:1.5em; color:navy; text-align:center; list-style-position:inside;">
<h2>Things to do:</h2>

<ol>
<?php
// Obtain the todos from the DB.
$result = mysql_query("SELECT * FROM todolist",$con);

// Display each fav food in a row of the table.
while($row = mysql_fetch_array($result))
  {
  echo "<li>" . $row['todo'] . " <em>(" . $row['currdate'] . ")</em></li>";
  }
mysql_close($con);
?>
</ol>
</div>

<div style="margin:auto; width:160px; background-color:black; color:white; padding:20px;">
<form method="post" action=".">
   Add a ToDo: <input type="text" name="todo" /><br />
<input type="submit" value="Add" /><br />
   Empty your ToDo list:
<input name="emptytodo" type="submit" value="Empty" />
</form>

</div>

</body>
</html>








