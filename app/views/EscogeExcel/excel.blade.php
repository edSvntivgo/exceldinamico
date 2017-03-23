<!DOCTYPE html>
<html>
<head>
	<title>Excel Pauta Interna</title>
	<?php 
	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=experimental.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
	?>
</head>
<body>
	<table>
		<thead >
			<tr>
				
			</tr>
			<tr style="border: 1px solid black; background-color: #9F9F9F;">
				@foreach($datos as $resultado)
					<td></td>
					@if(strcmp($resultado,'id_empresa')==0)
						<td>empresa</td>
					@else
						<td>{{$resultado}}</td>
					@endif
				@endforeach
			</tr>
		</thead>
		<tbody>
				
				@foreach($anuncios as $anuncioresultado)
				<tr>
					<td style="width: 53px; height: 51px;">
						<img style="margin-top: 30px; " src="http://osmexico.mx/img/logo.png">
					</td>
					@foreach($datos as $resultado)
						@if(strcmp($resultado,'id_empresa')==0)
							<td style="margin-top: 10px; text-align: center;">{{$anuncioresultado['empresa']['empresa']}}</td>
						@elseif($resultado=='disponible')	
							@if($anuncioresultado['disponible']=='0')
								<td>No</td>
							@else
								<td>Si</td>
							@endif
						@elseif($resultado=='iluminacion')
							@if($anuncioresultado['iluminacion']=='2')
								<td>No</td>
							@else
								<td>Si</td>
							@endif
						@else
							<td>{{$anuncioresultado[$resultado]}}</td>
						@endif
					@endforeach		
				</tr>

				
				@endforeach		
		</tbody>
	</table>
</body>
</html>