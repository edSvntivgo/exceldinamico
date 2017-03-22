<!DOCTYPE html>
<html>
<head>
	<title>Selecciona tu reporte</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div class="col-lg-12"><center><h1>Crea tu reporte con los campos que necesitas</h1></center></div>
	<form action="{{action('SeleccionaExcel@ExcelCrear')}}" method="POST" id="formulario">
		<select class="form-control" name="campo" id="opciones">
			<option value="">Escoge...</option>
			@foreach($campo as $campoArray)
			<option value="{{$campoArray}}">{{$campoArray}}</option>
			@endforeach
		</select>
		<input type="button" onclick="javascript:agrega()"  title="Agregar" class="btn btn-success form-control" >
    <input type="input" name="datos" id="datos" class="form-control">
    <input type="submit" name="" class="btn btn-danger form-control">
	</form>
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript">
		var campos= new Array();
		function agrega(){
			var seleccionada=$('#opciones').val();
			campos.push(seleccionada);
        for(var i=0; i<=campos.length;i++){
        var datos=document.getElementById("datos").innerHTML=campos;
        i++;
      }
      $('#datos').val(campos.toString())
     
		}
	</script>

</body>
</html>