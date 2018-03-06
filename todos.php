<?php

	function ads_manha()
	{
		$contents = file_get_contents("novo/ads_manha.csv");
		$i = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "ADS";
		$periodo = "Manhã";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % 3 == 0){$dia++;}
		}
	}
	
	function ads_tarde()
	{
		$contents = file_get_contents("novo/ads_tarde.csv");
		$i = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "ADS";
		$periodo = "Vespertino";
		require_once("functions.php");
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % 3 == 0){$dia++;}
		}
	}
	function gestao_manha()
	{
		$contents = file_get_contents("novo/gestao_manha.csv");
		$i = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Gestão Empresarial";
		$periodo = "Manhã";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % 2 == 0){$dia++;}
		}
	}
	function gestao_tarde()
	{
		$contents = file_get_contents("novo/gestao_tarde.csv");
		$i = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Gestão Empresarial";
		$periodo = "Vespertino";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % 2 == 0){$dia++;}
		}
	}
	function jogos_noturno()
	{
		$contents = file_get_contents("novo/jogos_noturno.csv");
		$i = 0;
		$quebra = 2;
		$entrei = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Jogos Digitais";
		$periodo = "Noturno";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % $quebra == 0){$dia++;}
			if($entrei == 0){
				if($dia == 6){
					$quebra = 3;
					$entrei = 1;
					$i--;
					//$j = $j + 2;
					//$l = $l + 2;
				}
			}
		}
	}
	function gestao_noite()
	{
		$contents = file_get_contents("novo/gestao_noite.csv");
		$i = 0;
		$quebra = 2;
		$entrei = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Gestão Empresarial";
		$periodo = "Noturno";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % $quebra == 0){$dia++;}
			if($entrei == 0){
				if($dia == 6){
					$quebra = 3;
					$entrei = 1;
					$i--;
					//$j = $j + 2;
					//$l = $l + 2;
				}
			}
		}
	}
	function logistica_manha()
	{
		$contents = file_get_contents("novo/logistica_manha.csv");
		$i = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Logistica";
		$periodo = "Manhã";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % 2 == 0){$dia++;}
		}
	}
	function logistica_noturno()
	{
		$contents = file_get_contents("novo/logistica_noturno.csv");
		$i = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Logistica";
		$periodo = "Noturno";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % 2 == 0){$dia++;}
		}
	}
	function textil_noturno()
	{
		$contents = file_get_contents("novo/textil_noturno.csv");
		$i = 0;
		$partes = explode("\n",$contents);
		$quebra = 2;
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Produção Textil";
		$periodo = "Noturno";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % $quebra == 0){$dia++;}
			if($entrei == 0){
				if($dia == 6){
					$quebra = 3;
					$entrei = 1;
					$i--;
					//$j = $j + 2;
					//$l = $l + 2;
				}
			}
		}
	}
	function seguranca_manha()
	{
		$contents = file_get_contents("novo/seguranca_manha.csv");
		$i = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Segurança da informação";
		$periodo = "Manhã";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % 3 == 0){$dia++;}
		}
	}

	function seguranca_noturno()
	{
		$contents = file_get_contents("novo/seguranca_noturno.csv");
		$i = 0;
		$quebra = 2;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Segurança da informação";
		$periodo = "Noturno";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % $quebra == 0){$dia++;}
			if($entrei == 0){
				if($dia == 6){
					$quebra = 3;
					$entrei = 1;
					$i--;
					//$j = $j + 2;
					//$l = $l + 2;
				}
			}
		}
	}
	function textil_moda_manha()
	{
		$contents = file_get_contents("novo/textil_moda_manha.csv");
		$i = 0;
		$partes = explode("\n",$contents);
		$limit = 7;
		$dia = 1;
		$j = 0;
		$l = 1;
		$curso = "Textil e Moda";
		$periodo = "Manhã";
		require_once("functions.php");
		$database = connect_DB();
		$linha_quant = count($partes);
		while($i < $linha_quant)
		{
			$k = 1;
			if($j > $linha_quant){break;}
			$professores = explode(";",$partes[$j]);
			$materias = explode(";",$partes[$l]);
			while($k < $limit)
			{
				$materia = $professores[$k];
				$professor = $materias[$k];
				$sql = "INSERT INTO horarios VALUES(null,\"$materia\",\"$professor\",\"".$professores[0]."\",\"".getDia($dia)."\",\"$curso ".$k."º sem - $periodo\",\"\");";
				mysqli_query($database,$sql);
				//echo $sql."<br>";
				$k++;
			}
			$j = $j + 2;
			$l = $l + 2;
			$i++;
			if($i % 3 == 0){$dia++;}
		}
	}
?>
