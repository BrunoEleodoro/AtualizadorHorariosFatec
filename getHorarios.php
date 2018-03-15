<?php


	$curso = @$_GET["curso"];
	require_once("functions.php");
	$database = connect_DB();
	$result = mysqli_query($database,"SELECT * FROM horarios WHERE curso=\"$curso\"");
	$linhas = array();
	while($row = mysqli_fetch_array($result))
	{
		$linhas[] = $row;
	}
	echo json_encode($linhas);

?>
