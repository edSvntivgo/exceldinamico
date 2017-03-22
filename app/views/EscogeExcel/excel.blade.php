<!DOCTYPE html>
<html>
<head>
	<title>Excel Pauta Interna</title>
<?php 
	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=pautasInternas.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>
</head>
<body>
	<table>
		<thead>
			<tr style="border: 1px solid black; background-color: #9F9F9F;">
				@foreach($datos as $resultado)
					<td>{{$resultado}}</td>
				@endforeach
			</tr>
		</thead>
		<tbody>
				@foreach($anuncios as $anuncioresultado)
				<tr>
					@foreach($datos as $resultado)
					<td>{{$anuncioresultado[$resultado]}}</td>
					@endforeach		
				</tr>
				@endforeach		
		</tbody>
	</table>
</body>
</html>