<?php
require 'connection.php';
require 'class/Reservas.php';

$reservas = new Reservas($pdo);
?>
<h1>Reservas</h1>

<a href="reservar.php">Adicionar Reserva</a>
<br/><br/>

<form action="" method="get">
	<select name="ano" id="">
		<?php for($q=date('Y');$q>2000;$q--): ?>
			<option value="<?php echo $q;?>"><?php echo $q;?></option>
		<?php endfor; ?>
	</select>

	<select name="mes" id="">
		<?php for($m=1;$m<=12;$m++):?>
			<option value="<?php echo $m;?>"><?php echo $m;?></option>
		<?php endfor; ?>
	</select>

	<input type="submit" value="Mostrar">	

</form>


<?php

if(empty($_GET['ano'])){
	exit;
}

$data = $_GET['ano'].'-'.$_GET['mes'] ;
$dia1 = date('w', strtotime($data));
$dias = date('t',strtotime($data));
$linhas = ceil(( $dia1+$dias ) / 7);
$dia1 = -$dia1;
$data_inicio = date('Y-m-d', strtotime($dia1.' days', strtotime($data)));
$data_fim = date('Y-m-d', strtotime( ($dia1 + ($linhas * 7) - 1).' days', strtotime($data)));
  

$lista = $reservas->getReservas($data_inicio, $data_fim);

/*
foreach($lista as $item) {
	$data1 = date('d/m/Y', strtotime($item['data_inicio']));
	$data2 = date('d/m/Y', strtotime($item['data_fim']));
	echo $item['pessoa'].' reservou o carro '.$item['id_carro'].' entre '.$data1.' e '.$data2.'<br/>';
}
*/
?>
<hr/>

<?php
    require 'calendario.php';
?>