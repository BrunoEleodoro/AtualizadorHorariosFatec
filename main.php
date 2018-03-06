<?php

	//https://www.pdftoexcel.com/
	require_once("todos.php");
	require_once("functions.php");
	$database = connect_DB();
	$result = mysqli_query($database,"DELETE FROM horarios WHERE 1");
	@ads_manha();
	@ads_tarde();
	@gestao_manha();
	@gestao_noite();
	@gestao_tarde();
	@jogos_noturno();
	@logistica_manha();
	@logistica_noturno();
	@textil_noturno();
	@seguranca_manha();
	@seguranca_noturno();
	@textil_moda_manha();

?>
