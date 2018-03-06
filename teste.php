<html>
<body>
<center>
<form action="teste.php" method="GET">
<select name="curso">
<?php
	require_once("functions.php");
	$database = connect_DB();
	$result = mysqli_query($database,"SELECT DISTINCT curso FROM horarios ORDER BY curso ASC");
	while($row = mysqli_fetch_assoc($result))
	{
		$item = $row["curso"];
		if($item == @$_GET["curso"])
		{
			echo "<option value=\"$item\" selected>$item</option>";
		}
		else
		{
			echo "<option value=\"$item\">$item</option>";
		}
	}
	
?>
</select>
<select name="dia">
<?php
	require_once("functions.php");
	$database = connect_DB();
	$result = mysqli_query($database,"SELECT DISTINCT dia FROM horarios ORDER BY dia DESC");
	while($row = mysqli_fetch_assoc($result))
	{
		$item = $row["dia"];
		if($item == @$_GET["dia"])
		{
			echo "<option value=\"$item\" selected>$item</option>";
		}
		else
		{
			echo "<option value=\"$item\">$item</option>";
		}
	}
	
?>
</select>
<br><br>
<input type="submit">
</form>
<center>
<table>
	<?php

		$result = mysqli_query($database,"SELECT * FROM horarios WHERE curso=\"".@$_GET["curso"]."\" AND dia=\"".@$_GET["dia"]."\"");
		while($row = mysqli_fetch_assoc($result))
		{
			$horario = $row["horario"];
			$materia = $row["materia"];
			$professor = $row["professor"];
			echo "<tr><td>$horario</td><td>$materia</td><td>$professor</td></tr>";
		}
		
	?>
</table>
</center>
</body>
</html>

